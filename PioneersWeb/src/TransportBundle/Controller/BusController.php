<?php


namespace TransportBundle\Controller;


use TransportBundle\Entity\Bus;
use TransportBundle\Form\BusType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class BusController extends Controller
{
    public function editAction($id)
    {
        $bus=$this->getDoctrine()->getRepository(Bus::class)->find($id);
        return $this->render('@Transport/back/bus/edit.html.twig',array("tab"=>$bus));

    }

    public function modifierAction($id,Request $request)
    {
        $no2="";
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository(Bus::class)->find($id);
        $form = $this->createForm(BusType::class,$club);
        $form=$form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()){
            $no2=" Le chauffeur ne peut pas etre affecte a 2 bus";
            $in2=$form["chauffeur"]->getData();
            $club1=$this->getDoctrine()->getRepository(Bus::class)->findByNames($in2,$id);
            if($club1==null){
            $em->flush();
            return  $this->redirectToRoute('afficherdetails');
        }}
        return $this->render('@Transport/back/bus/edit.html.twig',array('form'=>$form->createView(),"tab"=>$club,'noo'=>$no2));

    }
    public function ajouterAction(Request $request)
    {
        $club = new Bus();
        $no="";
        $no2="";
        $form = $this->createForm(BusType::class,$club);
        $form=$form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()){
            $in=$form["name"]->getData();
            $in2=$form["chauffeur"]->getData();
            $club1=$this->getDoctrine()->getRepository(Bus::class)->findByName($in);
            $club2=$this->getDoctrine()->getRepository(Bus::class)->findByNames($in2,$in);
            $no=" Le Bus Existe Deja";
            $no2="";
            if($club1==null && $club2!=null){$no=""; $no2=" Le chauffeur ne peut pas etre affecte a 2 bus";}
            if($club2==null && $club1==null){

            $em = $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            return  $this->redirectToRoute('afficherdetails');
        }}
        return $this->render('@Transport/back/bus/add.html.twig',array(
            'form'=>$form->createView(),'no'=>$no,'noo'=>$no2));

        }




    public function deleteAction($id)
    {

        $club=$this->getDoctrine()->getRepository(Bus::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($club);
        $em->flush();
        return $this->afficherAction();
    }
    public function afficherAction()
    {
        $bus=$this->getDoctrine()->getRepository(Bus::class)->findAll();
        return $this->render('@Transport/back/bus/bus.html.twig',array("tab"=>$bus));

    }


}