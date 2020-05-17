<?php

namespace EspritApiBundle\Controller;

use PioneerBundle\Entity\Actualite;
use PioneerBundle\Entity\Comment;
use PioneerBundle\Entity\Enfant;
use PioneerBundle\Entity\Reply;
use PioneerBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritApiBundle:Default:index.html.twig');
    }


    public function listblogAction()
    {
        $result= [];
        $posts=$this->getDoctrine()->getRepository(Actualite::class)->findAllOrderby();
        foreach ($posts as $p) {

            $tmp =array( ["id" => $p->getId(),
                "date" => $p->getDate()->format('d-M-Y'),
                "description" => $p->getDescription(),
                "titre" => $p->getTitre(),
                "photo" => $p->getPhoto()]);

            $result= array_merge($result,$tmp);


        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($result);
        return new JsonResponse($formatted);

    }

    public function listCmtAction($idB)
    {
        $result= [];
        $Cmts=$this->getDoctrine()->getRepository(Comment::class)->ShowCmtBlog($idB);
        $nbC=$this->getDoctrine()->getRepository(Comment::class)->CountCmtBlog($idB);

        foreach ($Cmts as $p) {

            $tmp =array( ["id" => $p->getId(),
                "id_u"=> $p->getUser()->getId(),
                "text"=> $p->getText(),
                "point"=> $p->getPoint(),
                "date" => $p->getDate()->format('d-M-Y'),
                "UserName" => $p->getUser()->getUsername(),
                "UserPhoto" => $p->getUser()->getPhoto(),
                "NbrCmt" => $nbC,
                "NbrReply"=>$this->getDoctrine()->getRepository(Reply::class)->CountReply($p->getId())]);

            $result= array_merge($result,$tmp);


        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($result);
        return new JsonResponse($formatted);

    }

    public function AuthAction($username,$password)
    {

        $User=$this->getDoctrine()->getRepository(User::class)->Auth($username,$password);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($User);
        return new JsonResponse($formatted);
    }

    public function addCmtAction($idB,$idU,$text)
    {

        $U=$this->getDoctrine()->getRepository(User::class)->find($idU);
        $B=$this->getDoctrine()->getRepository(Actualite::class)->find($idB);

        $cmt= new Comment();
        $em = $this->getDoctrine()->getManager();
        $cmt->setUser($U);
        $cmt->setActualite($B);
        $cmt->setPoint(0);
        $cmt->setDate(new \DateTime('now'));
        $cmt->setText($text);
        $em->persist($cmt);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($text);
        return new JsonResponse($formatted);


    }


    public function listReplyAction($idC)
    {
        $result= [];
        $reps=$this->getDoctrine()->getRepository(Reply::class)->FindRep($idC);

        foreach ($reps as $p) {

            $tmp =array( ["id" => $p->getId(),
                "id_u"=> $p->getUser()->getId(),
                "id_cmt"=> $p->getComment()->getId(),
                "text"=> $p->getText(),
                "point"=> $p->getPoint(),
                "date" => $p->getDate()->format('d-M-Y'),
                "UserName" => $p->getUser()->getUsername(),
                "UserPhoto" => $p->getUser()->getPhoto(),

                ]);

            $result= array_merge($result,$tmp);


        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($result);
        return new JsonResponse($formatted);

    }

    public function addReplyAction($idC,$idU,$text)
    {

        $U=$this->getDoctrine()->getRepository(User::class)->find($idU);
        $B=$this->getDoctrine()->getRepository(Comment::class)->find($idC);

        $cmt= new Reply();
        $em = $this->getDoctrine()->getManager();
        $cmt->setUser($U);
        $cmt->setComment($B);
        $cmt->setPoint(0);
        $cmt->setDate(new \DateTime('now'));
        $cmt->setText($text);
        $em->persist($cmt);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($text);
        return new JsonResponse($formatted);


    }

    public function addUserAction($cin,$nom,$prenom,$etat,$mail,$username,$password,$num)
    {
       
        
        $user = new User();
        $user->setCin($cin);
        $user->setPassword($password);
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setEtatCivil($etat);
        $user->setEtatCompte(1);
        $user->setEmail($mail);
        $user->setUsername($username);
        $user->setNumTel($num);
        $user->setRole("P");
        $user->setRoles([0,1,"P"]);
        $user->setDateEmbauche(new \DateTime('now'));
        $user->setEnabled(true);
        $user->setPhoto("default.png");
        

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($user);
        return new JsonResponse($formatted);


    }

    public function addEnfantAction($cin,$nom,$prenom,$age,$sexe)
    {


        $enfant = new Enfant();
        $enfant->setNom($nom);
        $enfant->setPrenom($prenom);
        $enfant->setAge($age);
        $enfant->setCinP($cin);
        $enfant->SetSexe($sexe);
        $enfant->setPhoto("default.png");


        $em = $this->getDoctrine()->getManager();
        $em->persist($enfant);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($enfant);
        return new JsonResponse($formatted);


    }

    public function ChangePassAction($id,$password)
    {


        $User=$this->getDoctrine()->getRepository(User::class)->find($id);
        $User->setPassword($password);
        $em = $this->getDoctrine()->getManager();
        $em->persist($User);
        $em->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($User);
        return new JsonResponse($formatted);


    }

    public function AddLikeRAction($id)
    {


        $reply=$this->getDoctrine()->getRepository(Reply::class)->find($id);
        $reply->setPoint($reply->getPoint()+1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($reply);
        $em->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($reply->getPoint());
        return new JsonResponse($formatted);


    }

    public function AddLikeCAction($id)
    {

        $C=$this->getDoctrine()->getRepository(Comment::class)->find($id);
        $C->setPoint($C->getPoint()+1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($C);
        $em->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($C->getPoint());
        return new JsonResponse($formatted);


    }


}
