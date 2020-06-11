<?php

namespace RecBundle\Controller;

use RecBundle\Entity\Mail;
use RecBundle\Entity\Rec;
use RecBundle\Form\MailType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RecBundle\Form\ReclamationsType;

class ReclamationController extends Controller
{
    public function ajouterReclamationAction(Request $request)
    {
        $reclamation = new Rec();
        $form = $this->createForm(ReclamationsType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reclamation->setDate(new \DateTime('now'));
            $reclamation->setUser($this->getUser());
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('listRecAdmin');
        }

        return $this->render('@Rec/Reclam/Reclamations.html.twig', array("form" => $form->createView()));
    }

    public function listrecAction(Request $request)
    {

        $posts = $this->getDoctrine()->getRepository(Rec::class)->findAll();
        return $this->render('@Rec/Reclam/listRec.html.twig', array(
            "Formlist" => $posts
        ));
    }

    public function deleteRecAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $p = $this->getDoctrine()->getRepository(Rec::class)->find($id);
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('listRecAdmin');
    }
}
