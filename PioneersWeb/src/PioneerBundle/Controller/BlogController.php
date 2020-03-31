<?php

namespace PioneerBundle\Controller;

use PioneerBundle\Entity\Actualite;
use PioneerBundle\Form\ActualiteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Pioneer/Default/index.html.twig');
    }

    public function addAction(Request $request)
    {
        $post = new Actualite();
        $form = $this->createForm(ActualiteType::class,$post);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $file=$post->getPhoto();
            $filename= md5(uniqid(rand(), true))  . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $post->setPhoto($filename);

            $post->setDate(new \DateTime('now'));
            $em->persist($post);
            $em->flush();

            return $this->redirectToRoute('listallBlogAdmin');
        }

        return $this->render('@Pioneer/Blog/addblog.html.twig',array("Form"=>$form->createView()));

    }

    public function listblogAction(Request $request )
    {

        $posts=$this->getDoctrine()->getRepository(Actualite::class)->findAll();
        return $this->render('@Pioneer/Blog/listallblog.html.twig', array(
            "Formlist" =>$posts
        ));
    }

    public function updateblogAction(Request $request, $id)
    {


        $p=$this->getDoctrine()->getRepository(Actualite::class)->find($id);
        $form=$this->createForm(ActualiteType::class,$p);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $file = $p->getPhoto();
            $filename= md5(uniqid(rand(), true))  . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $p->setPhoto($filename);
            $p->setDate(new \DateTime('now'));
            $em= $this->getDoctrine()->getManager();
            $em->persist($p);
            $em->flush();
            return $this->redirectToRoute('listallBlogAdmin');

        }
        return $this->render('@Pioneer/Blog/updateblog.html.twig', array(
            "formupdate"=> $form->createView()
        ));
    }

    public function deleteblogAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $id = $request->get('id');
        $p=$this->getDoctrine()->getRepository(Actualite::class)->find($id);
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('listallBlogAdmin');
    }


}
