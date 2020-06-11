<?php

namespace activiteBundle\Controller;

use activiteBundle\Entity\activite;
use activiteBundle\Form\activiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Swift_Mailer;
use Swift_SmtpTransport;

class activiteController extends Controller
{
    public function AjouterAction(Request $request)
{
    $app = new activite();
    $form = $this->createForm(activiteType::class, $app);
    $form->handleRequest($request);


    if ($form->isSubmitted() && $form->isValid()) {
      
        $em = $this->getDoctrine()->getManager();
        $em->persist($app);
        $em->flush();
        $this->addFlash('info', 'created Successfully ! ');
        return $this->redirectToRoute('activite_afficherActivite');

    }
    return $this->render("@activite/activite/ajouterActivite.html.twig", array('activite' => $form->createView()));
}

    public function AfficherAction()
    {


        $em = $this->getDoctrine()->getManager();
        $app = $em->getRepository('activiteBundle:activite')->findAll();
        return $this->render('@activite/activite/afficherActivite.html.twig', array(
            'activite' => $app));
    }

    public function modifierAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $app = $em->getRepository('activiteBundle:activite')->find($id);
        $form = $this->createForm(activiteType::class, $app);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($app);
            $em->flush();
            $this->addFlash('info', 'Modificated Successfully !');
            return $this->redirectToRoute('activite_afficherActivite');
        }
        return $this->render("@activite/activite/modifierActivite.html.twig", array('activite' => $form->createView()));

    }


    public function SupprimerAction($qdt)
    {

        $em = $this->getDoctrine()->getManager();
        $app = $em->getRepository('activiteBundle:activite')->find($qdt);
        $em->remove($app);
        $em->flush();
        return $this->redirectToRoute('activite_afficherActivite');
    }
}
