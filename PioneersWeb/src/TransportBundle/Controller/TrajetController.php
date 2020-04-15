<?php


namespace TransportBundle\Controller;

use TransportBundle\Entity\Bus;
use TransportBundle\Entity\Station;
use TransportBundle\Entity\Trajet;
use TransportBundle\Form\TrajetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TrajetController extends Controller
{
    public function edittrAction($id)
    {
        $bus=$this->getDoctrine()->getRepository(Trajet::class)->find($id);
        return $this->render('@Transport/back/trajet/edit.html.twig',array("tab"=>$bus));

    }
    public function affichertrAction()
    {    $no="";
         $bus=$this->getDoctrine()->getRepository(Trajet::class)->findByIdbus();
        return $this->render('@Transport/back/trajet/trajet.html.twig',array("tab"=>$bus,"no"=>$no));

    }
    public function ajoutertrAction(Request $request)
    {
        $alluser=$this->getDoctrine()->getRepository(Trajet::class)->findByIdbus2();
        $club = new Trajet();
        $ids = $request->get("idbus");
        $no="";
        $form = $this->createForm(TrajetType::class,$club);
        $form=$form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()){
            $in=$form["name"]->getData();
            $club1=$this->getDoctrine()->getRepository(Trajet::class)->findByName($in);
            $no=" Le Trajet existe deja";
            //echo $in->getId();
            //die();
            if($club1==null){
            $form->getData('adresse')->setIdbus($ids);
            $em = $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            return  $this->redirectToRoute('afficherdetailsst',['id' => $club->getId()]);
        }}
        return $this->render('@Transport/back/trajet/add.html.twig',array('form'=>$form->createView(),"ta"=>$alluser,"no"=>$no));

    }

    public function deletetrAction($id)
    {

        $club=$this->getDoctrine()->getRepository(Trajet::class)->find($id);
        $club1=$this->getDoctrine()->getRepository(Trajet::class)->findBytrajets($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($club);
        $em->flush();
        return $this->affichertrAction();
    }

    public function modifiertrAction($id,Request $request)
    {
        $alluser=$this->getDoctrine()->getRepository(Trajet::class)->findByIdbus2();
        $ids2=$request->get("id");
        $t=$this->getDoctrine()->getRepository(Trajet::class)->findBysame($ids2);
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Trajet::class)->find($id);
        $form = $this->createForm(TrajetType::class,$club);
        $form=$form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()){
            $ids=$request->get("idbus");
            $form->getData('adresse')->setIdbus($ids);
            $em->flush();
            return  $this->redirectToRoute('afficherdetailsst',['id'=>$club->getId()]);
        }
        return $this->render('@Transport/back/trajet/edit.html.twig',array('form'=>$form->createView(),"ta"=>$alluser,"tab"=>$t));
    }


}