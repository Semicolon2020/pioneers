<?php

namespace PioneerBundle\Controller;

use PioneerBundle\Entity\Actualite;
use PioneerBundle\Entity\Comment;
use PioneerBundle\Entity\User;
use PioneerBundle\Form\ActualiteType;
use PioneerBundle\Form\CommentType;
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

    public function viewfrontAction()
    {

        $posts=$this->getDoctrine()->getRepository(Actualite::class)->findAllOrderby();
        return $this->render('@Pioneer/Blog/viewfront.html.twig', array(
            "Formlist" =>$posts
        ));
    }

    public function singleblogAction(Request $request)
    {
        $cmt= new Comment();

        $idB = $request->get('id');
        $idU=$request->get('idU');

        $p=$this->getDoctrine()->getRepository(Actualite::class)->find($idB);
        $U=$this->getDoctrine()->getRepository(User::class)->find($idU);
        $C=$this->getDoctrine()->getRepository(Comment::class)->ShowCmtBlog($idB);

        $form = $this->createForm(CommentType::class,$cmt);
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
           // $cmt->setText("sd");
            $cmt->setUser($U);
            $cmt->setActualite($p);
            $cmt->setPoint(0);
            $cmt->setDate(new \DateTime('now'));
            $em->persist($cmt);
            $em->flush();

          //return $this->redirectToRoute('singleblogFront',array("id"=>$idB,"f" =>$p));

        }
        $form->initialize();
        return $this->render('@Pioneer/Blog/singleblog.html.twig',array(
            "f" =>$p,"cmt"=>$form->createView(),"c"=>$C
        ));
    }



}
