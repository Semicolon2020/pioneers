<?php

namespace BackBundle\Controller;

use Mgilet\NotificationBundle\Entity\NotifiableNotification;
use PioneerBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    public function indexAction(Request $request )
    {


        if($this->getUser() !=null)
        {
            $em = $this->getDoctrine()->getRepository(NotifiableNotification::class)
                ->findAllForNotifiable($this->getUser()->getId(),'PioneerBundle\Entity\User');
            $session = $request->getSession();
            $session->set('notif',$em);

            return $this->render('base.html.twig',array('notif'=>$em));
        }
        else
        {
            return $this->render('base.html.twig');
        }


    }

    public function emailAction()
    {
      /*  $message = (new \Swift_Message('Hello Email'))
            ->setFrom('fadhel.shel@gmail.com')
            ->setTo('mohamedfadhel.shel@esprit.tn')
            ->setBody("Message body");*/

        $u= $this->getDoctrine()->getRepository(User::class)->find(95);
        $e = $u->getemail();
       // $this->get('mailer')->send($message);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($e);
        return new JsonResponse($formatted);
    }


}
