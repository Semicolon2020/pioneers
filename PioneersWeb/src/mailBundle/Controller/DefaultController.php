<?php

namespace mailBundle\Controller;

use mailBundle\Entity\mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('base.html.twig');
    }
    public  function homeAction()
    {
        return $this->render('@mail/mail/mail.html.twig');
    }
    public function sendAction()
    {

        $mail = new mail();
        $form = $this->createForm(mailType::class, $mail);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $subject = $mail->getSubject();
            $mail = $mail->getMail();
            $objet = $request->get('form')['message'];
            $username = 'jardin.pioneer@gmail.com';
            $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($username)
                ->setTo($mail)
                ->setBody($objet);
            $this->get('mailer')->send($message);
            $this->get('session')->getFlashBag()->add('notice','Message envoyé avec success');
        }
        return $this->render('@mail/mail/mail.html.twig', array(
            'mail' => $mail,
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
}
