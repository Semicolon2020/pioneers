<?php

namespace LoisirsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Loisirs/Default/index.html.twig');
    }
}
