<?php

namespace TransportBundle\Controller;

use OpenCage\Geocoder\Geocoder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function busAction()
    {
        return $this->render('@Transport/back/bus/bus.html.twig');
    }
    public function indexAction()
    {
        return $this->render('@Transport/front/Transport.html.twig');
    }
    public function transportespaceAction()
    {
        return $this->render('@Transport/back/index.html.twig');////
    }
    public function backAction()
    {
        return $this->render('base2.html.twig');
    }
    public function trajetAction()
    {
        return $this->render('@Transport/back/trajet/trajet.html.twig');
    }

}
