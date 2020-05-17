<?php

namespace EspritApiBundle\Controller;

use PioneerBundle\Entity\Actualite;
use PioneerBundle\Entity\Comment;
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

}
