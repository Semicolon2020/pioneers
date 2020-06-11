<?php

namespace mailBundle\Controller;


use mailBundle\Entity\mail;
use PioneerBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class mailController extends Controller
{
    public function sendAction(Request $request)
    {

        $mailer = new mail();
        $form = $this->createForm('mailBundle\Form\mailType', $mailer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $mailer->setMail($this->getUser()->getEmail());
            $subject = $mailer->getSubject();
            $obj= $mailer->getObject();
            $username = 'jardin.pioneer@gmail.com';

            $message = (new \Swift_Message($subject))

                ->setFrom($this->getUser()->getEmail())
                ->setTo($username)
                ->setBody($obj);
                $this->get('mailer')->send($message);


                $this->get('session')->getFlashBag()->add('notice','Message envoyé avec success');
        }
       

        return $this->render('@mail/mail/mail.html.twig', array(

            'form' => $form->createView(),
        ));
    }

    public function showmailsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mails = $em->getRepository('mailBundle:mail')->findAll();

        return $this->render('@mail/mail/listmail.html.twig', array(
            'mails' => $mails,
        ));
    }
    public function repondreAction(Request $request, $id)
    {
        $u= new User();
        $mailer = new mail();
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $form = $this->createForm('mailBundle\Form\mailType', $mailer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
         //   $mailer->setMail($this->getUser()->getEmail());
            $subject = $mailer->getSubject();
            $obj= $mailer->getObject();
            $username = 'jardin.pioneer@gmail.com';
            $message = (new \Swift_Message($subject))

                ->setFrom($username)
                ->setTo($user->getemail())
                ->setBody($obj);
            $this->get('mailer')->send($message);
            $this->get('session')->getFlashBag()->add('notice','Message envoyé avec success');
        }


        return $this->render('@mail/mail/mail.html.twig', array(
            'mail' => $mailer,
            'form' => $form->createView(),
        ));
    }

}
