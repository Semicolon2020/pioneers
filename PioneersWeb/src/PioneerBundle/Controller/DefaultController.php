<?php

namespace PioneerBundle\Controller;

use Mgilet\NotificationBundle\Entity\NotifiableNotification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {


        return $this->render('@Pioneer/Default/index.html.twig');
    }
}
