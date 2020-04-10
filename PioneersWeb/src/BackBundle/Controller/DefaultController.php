<?php

namespace BackBundle\Controller;

use Mgilet\NotificationBundle\Entity\NotifiableNotification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request )
    {
        $N= new NotifiableNotification();

        $em = $this->getDoctrine()->getRepository(NotifiableNotification::class)
            ->findAllForNotifiable($this->getUser()->getId(),'PioneerBundle\Entity\User');
        $session = $request->getSession();
        $session->set('notif',$em);

        return $this->render('base.html.twig',array('notif'=>$em));
    }
}
