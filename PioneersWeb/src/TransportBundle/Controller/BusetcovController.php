<?php


namespace TransportBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TransportBundle\Entity\Busetcov;
use TransportBundle\Entity\Station;
use TransportBundle\Entity\Trajet;
use TransportBundle\Form\BusetcovType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BusetcovController extends Controller
{
    public function afficherfAction( Request $request){

              $ids = $request->get("id");
        $club=$this->getDoctrine()->getRepository(Trajet::class)->findByIdbus3();
        $club1=$this->getDoctrine()->getRepository(Station::class)->findBytrajet($ids);
        return $this->render('@Transport/front/Bus/index2.html.twig',array('tab'=>$club,'tabb'=>$club1));}

public function affichercoAction(){
    return $this->render('@Transport/front/Covoiturage/index.html.twig');}
    public function afficheroffreAction(){

        $club=$this->getDoctrine()->getRepository(Busetcov::class)->findByNames();
        return $this->render('@Transport/front/Covoiturage/offre2.html.twig',array('tab'=>$club));}

    public function afficherdemandeAction(){

        $club=$this->getDoctrine()->getRepository(Busetcov::class)->findByName();

        return $this->render('@Transport/front/Covoiturage/demande2.html.twig',array('tab'=>$club));}

    public function afficherbussAction(Request $request){
        $ids = $request->get("id");
        $club=$this->getDoctrine()->getRepository(Trajet::class)->findAll();
        $club1=$this->getDoctrine()->getRepository(Station::class)->findBytrajet($ids);
        return $this->render('@Transport/front/Bus/index.html.twig',array('tab'=>$club,'tabb'=>$club1));
    }


}