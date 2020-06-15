<?php

namespace LoisirsBundle\Controller;

use LoisirsBundle\Entity\Cours;
use LoisirsBundle\Form\CoursType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CoursController extends Controller
{

    public function allCAction()
    {
        $cours = $this->getDoctrine()
           ->getRepository(Cours::class)
           ->findAll();
        $result=[];
        foreach ($cours as $p) {

            $tmp =array( ["id" => $p->getId(),
                "livre_id"=> $p->getLivre()->getTitrel(),
                "tuteur"=> $p->getTuteur(),
                "file"=> $p->getFile(),
                "titre"=> $p->getTitre(),
                "date" => $p->getDate()->format('d-M-Y'),



            ]);

            $result= array_merge($result,$tmp);


        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($result);
        return new JsonResponse($formatted);
    }
    public function ajoutercoursAction(Request $request)
    {
        $modele = new Cours();
        $form=$this->createForm( CoursType::class, $modele);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $file=$modele->getFile();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('brochures_directory'), $fileName);
            $modele->setFile($fileName);
            $em->persist($modele);
            $em->flush();
            return $this->redirectToRoute('afficher');


        }
        return $this->render("@Loisirs/Cours/AjoutC.html.twig",array(
            'form'=>$form->createView()
        ));


}   public function afficherAction(Request $request)
{
    $em=$this->getDoctrine()->getManager();
    $course=$em->getRepository("LoisirsBundle:Cours")->findAll();
    if($request->isMethod('POST'))
    {
        $tuteur=$request->get('tuteur');
        $course=$em->getRepository("LoisirsBundle:Cours")->findBy(array("tuteur"=>$tuteur));

    }
    /**
    * @var $paginator \Knp\Component\Pager\Paginator
     */

    $paginator = $this->get('knp_paginator');
    $course = $paginator->paginate(
    $course,
    $request->query->getInt('page',1),
        $request->query->getInt('limit',2)
    );
    return $this->render("@Loisirs/Cours/AfficherC.html.twig",array('course'=>$course));

}
   public function deleteAction(Request $request, $id)
   {
       $modele =new cours();
       $em=$this->getDoctrine()->getManager();
       $modele=$em->getRepository("LoisirsBundle:Cours")->find($id);
       $em->remove($modele);
       $em->flush();
       return $this->redirectToRoute('afficher');


   }

   public function updateAction(Request $request, $id)
   {
       $em=$this->getDoctrine()->getManager();
       $modele=$em->getRepository("LoisirsBundle:Cours")->find($id);
       $form=$this->createForm(CoursType::class,$modele);
       $form->handleRequest($request);
       if($form->isSubmitted()){
       $em->persist($modele);
       $em->flush();
       return $this->redirectToRoute("afficher");}
       return $this->render("@Loisirs/Cours/update.html.twig",array('form'=>$form->createView())
       );




   }

   public function rechercheAction(Request $request)
   {
       $em=$this->getDoctrine()->getManager();
       $course=$em->getRepository("LoisirsBundle:Cours")->findAll();
       if($request->isMethod('POST'))
       {
           $tuteur=$request->get('tuteur');
           $course=$em->getRepository("LoisirsBundle:Cours")->findBy(array("tuteur"=>$tuteur));

       }
     return $this->render("@Loisirs/Cours/recherche.html.twig",array('course'=>$course));
   }

    public function afficherfrontAction(Request $request){

        $em=$this->getDoctrine()->getManager();
        $course=$em->getRepository("LoisirsBundle:Cours")->findAll();
        if($request->isMethod('POST'))
        {
            $tuteur=$request->get('tuteur');
            $course=$em->getRepository("LoisirsBundle:Cours")->findBy(array("tuteur"=>$tuteur));

        }
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */

        $paginator = $this->get('knp_paginator');
        $course = $paginator->paginate(
            $course,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',2)
        );
        return $this->render("@Loisirs/Cours/AfficherCF.html.twig",array('course'=>$course));

    }


    public function backAction(Request $request)
    {
        return $this->render("@Loisirs/Cours/back.html.twig");
    }
}
