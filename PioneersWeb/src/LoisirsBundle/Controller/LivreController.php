<?php

namespace LoisirsBundle\Controller;

use LoisirsBundle\Entity\Livre;
use LoisirsBundle\Form\LivreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class LivreController extends Controller
{

    public function allLAction()
    {
        $livre = $this->getDoctrine()
            ->getRepository(Livre::class)
            ->findAll();
        $result=[];
        foreach ($livre as $p) {

            $tmp =array( ["id" => $p->getId(),
                "titrel"=> $p->getTitrel(),
                "filel"=> $p->getFilel(),
                "audio"=> $p->getAudio(),
                "nom_image"=> $p->getNomImage(),



            ]);

            $result= array_merge($result,$tmp);


        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($result);
        return new JsonResponse($formatted);
    }
    public function ajouterlivreAction(Request $request)
    {
        $modele = new Livre();
        $form=$this->createForm( LivreType::class, $modele);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            //create audio
            $em=$this->getDoctrine()->getManager();
            $file=$modele->getAudio();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('fichiers_directory'), $fileName);
            $modele->setAudio($fileName);
            $file=$modele->getFilel();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('livre_directory'), $fileName);
            $modele->setFilel($fileName);
            $modele->uploadProfilePicture();
            $em->persist($modele);
            $em->flush();
            return $this->redirectToRoute('afficherl');


            //return $this->redirectToRoute('homepage')


            //create file

          //  $file=$modele->getFilel();
            //$fileName=md5(uniqid()).'.'.$file->guessExtension();
            //$file->move($this->getParameter('livre_directory'), $fileName);
            //$modele->setFilel($fileName);
            //$modele->uploadProfilePicture();
            //$em->persist($modele);
            //$em->flush();
            //return $this->redirectToRoute('afficherl');


        }
        return $this->render("@Loisirs/Livre/AjoutL.html.twig",array(
            'form'=>$form->createView()
        ));}
    public function afficherlAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $livres=$em->getRepository("LoisirsBundle:Livre")->findAll();
        if($request->isMethod('POST'))
        {
            $titrel=$request->get('titrel');
            $livres=$em->getRepository("LoisirsBundle:Livre")->findBy(array("titrel"=>$titrel));

        }
        return $this->render("@Loisirs/Livre/AfficherL.html.twig",array('livres'=>$livres));

    }

   // public function supprimerlAction(Request $request, $id)
    //{
      //  $modele = new Livre();
        //$em=$this->getDoctrine()->getManager();
       //$modele=$em->getRepository("LoisirsBundle:Livre")->find($id);
        //$em->remove($modele);
        //$em->flush();
       // return $this->redirectToRoute('afficherl');
    //}

    public function updatelAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository("LoisirsBundle:Livre")->find($id);
        $form=$this->createForm(LivreType::class,$modele);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em->persist($modele);
            $em->flush();
            return $this->redirectToRoute("afficherl");}
        return $this->render("@Loisirs/Livre/updatel.html.twig",array('form'=>$form->createView())
        );




    }
    public function afficherlfrontAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $livres=$em->getRepository("LoisirsBundle:Livre")->findAll();
        if($request->isMethod('POST'))
        {
            $titrel=$request->get('Titre');
            $livres=$em->getRepository("LoisirsBundle:Livre")->findBy(array("titrel"=>$titrel));

        }
        return $this->render("@Loisirs/Livre/AfficherLF.html.twig",array('livres'=>$livres));

    }

}
