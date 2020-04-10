<?php

namespace PioneerBundle\Controller;

use Mgilet\NotificationBundle\Entity\NotifiableNotification;
use PioneerBundle\Entity\Actualite;
use PioneerBundle\Entity\Comment;
use PioneerBundle\Entity\Reply;
use PioneerBundle\Entity\User;
use PioneerBundle\Form\ActualiteType;
use PioneerBundle\Form\CommentType;
use PioneerBundle\Form\ReplyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Pioneer/Default/index.html.twig');
    }

    public function addAction(Request $request)
    {
        $post = new Actualite();
        $form = $this->createForm(ActualiteType::class,$post);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $file=$post->getPhoto();
            $filename= md5(uniqid(rand(), true))  . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $post->setPhoto($filename);

            $post->setDate(new \DateTime('now'));
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('listallBlogAdmin');
        }

        return $this->render('@Pioneer/Blog/addblog.html.twig',array("Form"=>$form->createView()));

    }

    public function listblogAction(Request $request )
    {

        $posts=$this->getDoctrine()->getRepository(Actualite::class)->findAllOrderby();
        return $this->render('@Pioneer/Blog/listallblog.html.twig', array(
            "Formlist" =>$posts
        ));
    }

    public function updateblogAction(Request $request, $id)
    {


        $p=$this->getDoctrine()->getRepository(Actualite::class)->find($id);
        $form=$this->createForm(ActualiteType::class,$p);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $file = $p->getPhoto();
            $filename= md5(uniqid(rand(), true))  . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $p->setPhoto($filename);
            $p->setDate(new \DateTime('now'));
            $em= $this->getDoctrine()->getManager();
            $em->persist($p);
            $em->flush();
            return $this->redirectToRoute('listallBlogAdmin');

        }
        return $this->render('@Pioneer/Blog/updateblog.html.twig', array(
            "formupdate"=> $form->createView()
        ));
    }

    public function deleteblogAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $id = $request->get('id');
        $p=$this->getDoctrine()->getRepository(Actualite::class)->find($id);
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('listallBlogAdmin');
    }

    public function viewfrontAction(Request $request)
    {
        $session = $request->getSession();

        $em= $session->get('notif');
        $posts=$this->getDoctrine()->getRepository(Actualite::class)->findAllOrderby();
        return $this->render('@Pioneer/Blog/viewfront.html.twig', array(
            "Formlist" =>$posts,'notif'=>$em
        ));
    }

    public function singleblogAction(Request $request)
    {
        $cmt= new Comment();
        $reply= new Reply();

        $idB = $request->get('id');
        $idU=$request->get('idU');
        $idc = $request->get('commentid');
        $TextReply = $request->get('reply');

        $session = $request->getSession();
        $em= $session->get('notif');
        if($idU != null && $idB !=null)
        {
            $session->set('idB',$idB);
            $session->set('idU',$idU);
        }


        $U=$this->getDoctrine()->getRepository(User::class)->find($session->get('idU'));
        $p=$this->getDoctrine()->getRepository(Actualite::class)->find($session->get('idB'));


        $form = $this->createForm(CommentType::class,$cmt);


        $form->handleRequest($request);

        if($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $cmt->setUser($U);
            $cmt->setActualite($p);
            $cmt->setPoint(0);
            $cmt->setDate(new \DateTime('now'));
            $em->persist($cmt);
            $em->flush();
        }

        if ($idc !=null)
        {
            $em = $this->getDoctrine()->getManager();
            $cmtRR=$this->getDoctrine()->getRepository(Comment::class)->find($idc);
            $reply->setText($TextReply);
            $reply->setPoint(0);
            $reply->setComment($cmtRR);
            $reply->setUser($U);
            $reply->setDate(new \DateTime('now'));
            $em->persist($reply);
            $em->flush($reply);

        }

        $C=$this->getDoctrine()->getRepository(Comment::class)->ShowCmtBlog($session->get('idB'));
        $nbC=$this->getDoctrine()->getRepository(Comment::class)->CountCmtBlog($session->get('idB'));
        $cmtR=$this->getDoctrine()->getRepository(Reply::class)->FindLikeOrderBy();

        return $this->render('@Pioneer/Blog/singleblog.html.twig',array(
            "f" =>$p,"cmt"=>$form->createView(),"c"=>$C,"nbC"=>$nbC,'id'=>$session->get('idB'),'idU'=>$session->get('idU'),
            'reply'=>$cmtR,'notif'=>$em
        ));
    }






    public function deleteCmtAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $idc = $request->get('idc');
        $p=$this->getDoctrine()->getRepository(Comment::class)->find($idc);
        $em->remove($p);
        $em->flush();

        $session = $request->getSession();
        $em= $session->get('notif');

        return $this->redirectToRoute('singleblogFront',array('id'=> $session->get('idB'),'idU'=>$session->get('idU'),'notif'=>$em));
    }

    public function LikeCmtAction(Request $request)
    { $session = $request->getSession();
        $em=$this->getDoctrine()->getManager();
        $idc = $request->get('idc');
        $p=$this->getDoctrine()->getRepository(Comment::class)->find($idc);
        $p->setPoint($p->getPoint()+1);
        $em->persist($p);
        $em->flush();
        $lien ="http://localhost/Web2.0/PioneersWeb/web/app_dev.php/pioneer/singleblog/".$session->get('idB')  ."/".$session->get('idU');
        /// Notification
        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification($p->getActualite()->getTitre());
        $notif->setMessage($this->getUser().' Liked your comment');
        $notif->setLink( $lien);
        $manager->addNotification(array($p->getUser()), $notif, true);
        /////



        $em= $session->get('notif');
        return $this->redirectToRoute('singleblogFront',array('id'=> $session->get('idB'),'idU'=>$session->get('idU')
        ,'notif'=>$em));
    }

    public function deleteReplyAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $idR = $request->get('idR');
        $p=$this->getDoctrine()->getRepository(Reply::class)->find($idR);
        $em->remove($p);
        $em->flush();

        $session = $request->getSession();

        $em= $session->get('notif');

        return $this->redirectToRoute('singleblogFront',array('id'=> $session->get('idB'),'idU'=>$session->get('idU'),'notif'=>$em));
    }

    public function LikeReplyAction(Request $request)
    {
        $session = $request->getSession();
        $em=$this->getDoctrine()->getManager();
        $idR = $request->get('idR');
        $p=$this->getDoctrine()->getRepository(Reply::class)->find($idR);
        $p->setPoint($p->getPoint()+1);
        $em->persist($p);
        $em->flush();

        //////
        /// Notification
        $lien ="http://localhost/Web2.0/PioneersWeb/web/app_dev.php/pioneer/singleblog/".$session->get('idB')  ."/".$session->get('idU');
        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification($p->getComment()->getActualite()->getTitre());
        $notif->setMessage($this->getUser().' Liked your Reply');
        $notif->setLink( $lien);
        $manager->addNotification(array($p->getUser()), $notif, true);
        /////
        ///

        $em= $session->get('notif');


        $session = $request->getSession();

        return $this->redirectToRoute('singleblogFront',array('id'=> $session->get('idB'),'idU'=>$session->get('idU')
        ,'notif'=>$em));
    }

    function MarkSeenAction(Request $request,$idNotif)

    {
        $em=$this->getDoctrine()->getManager();

        $p=$this->getDoctrine()->getRepository(NotifiableNotification::class)->find($idNotif);
        $em->remove($p);
        $em->flush();

        $session = $request->getSession();

        $em= $session->get('notif');

        return $this->redirectToRoute('back_homepage',array('notif'=>$em));

    }


}
