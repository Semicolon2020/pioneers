<?php

namespace activiteBundle\Controller;

use activiteBundle\Entity\evenement;
use activiteBundle\Form\evenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class evenementController extends Controller
{
    public function AjouterAction(Request $request)
    {
        $app = new evenement();
        $form = $this->createForm(evenementType::class, $app);
        $form->handleRequest($request);




        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($app);
            $em->flush();
            $this->addFlash('info', 'created Successfully ! ');

            //$parent = $em->getRepository("edheya il bundle ili fih entité parent:parent")->findAll();

            $username='debbopi@gmail.com';
            $message = \Swift_Message::newInstance()
                ->setSubject('Nouvelle evenement est ajouté  ')
                ->setFrom($username)
                ->setTo("omar.sabbagh@esprit.tn")
                ->setBody('cette evenement a ete ajouter');
               // ->attach(\Swift_Attachment::fromPath('C:\Users\Mahdi\Desktop\Traitement.pdf'));

            $this->get('mailer')->send($message);
            return $this->redirectToRoute('evenement_afficherEvenement');

        }
        return $this->render("@activite/evenement/ajouterEvenement.html.twig", array('evenement' => $form->createView()));
    }

    public function AfficherAction()
    {


        $em = $this->getDoctrine()->getManager();
        $app = $em->getRepository('activiteBundle:evenement')->findAll();
        return $this->render('@activite/evenement/afficherEvenement.html.twig', array(
            'evenement' => $app));
    }

    public function modifierAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $app = $em->getRepository('activiteBundle:evenement')->find($id);
        $form = $this->createForm(evenementType::class, $app);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($app);
            $em->flush();
            $this->addFlash('info', 'Modificated Successfully !');
            return $this->redirectToRoute('evenement_afficherEvenement');
        }
        return $this->render("@activite/evenement/modifierEvenement.html.twig", array('evenement' => $form->createView()));

    }


    public function SupprimerAction($qdt)
    {

        $em = $this->getDoctrine()->getManager();
        $app = $em->getRepository('activiteBundle:evenement')->find($qdt);
        $em->remove($app);
        $em->flush();
        return $this->redirectToRoute('evenement_afficherEvenement');
    }
}
