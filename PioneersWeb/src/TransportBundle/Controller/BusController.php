<?php


namespace TransportBundle\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
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

    public function allAction() {
      $tasks=$this->getDoctrine()->getManager()->getRepository(Bus::class)->findAll();
      $serializer=new SeriaLizer([ new ObjectNormaLizer()]);
      $formatted=$serializer->normalize($tasks);
      return new JsonResponse($formatted);
    }

    public function editmobileAction(Request  $request)
{

    $club=$this->getDoctrine()->getRepository(Bus::class)->find($request->get('id'));
    $club->setId($request->get('id'));
    $club->setName($request->get('name'));
    $club->setCapacite($request->get('capacite'));
    $club->setChauffeur($request->get('chauffeur'));
    $em = $this->getDoctrine()->getManager();
    $em->persist($club);
    $em->flush();
    $serializer=new SeriaLizer([ new ObjectNormaLizer()]);
    $formatted=$serializer->normalize($club);
    return new JsonResponse($formatted);
}

    public function addmobileAction(Request  $request)
    {
        $club = new Bus();
        $club->setName($request->get('name'));
        $club->setCapacite($request->get('capacite'));
        $club->setChauffeur($request->get('chauffeur'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($club);
        $em->flush();
        $serializer=new SeriaLizer([ new ObjectNormaLizer()]);
        $formatted=$serializer->normalize($club);
        return new JsonResponse($formatted);
    }




    public function deletemobileAction(Request  $request)
    {


        $club=$this->getDoctrine()->getRepository(Bus::class)->find($request->get('id'));
        $em = $this->getDoctrine()->getManager();
        $em->remove($club);
        $em->flush();
        $serializer=new SeriaLizer([ new ObjectNormaLizer()]);
        $formatted=$serializer->normalize($club);
        return new JsonResponse($formatted);
    }

        }