<?php

namespace BackBundle\Controller;

use PioneerBundle\Entity\Actualite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class BackController extends Controller
{
    /**
     * @Route("/admin", name="homepage")
     */

    public function indexAction(Request $request)
    {
        return $this->render('@Back/Admin/base2.html.twig');
    }



}
