<?php


namespace TransportBundle\Controller;

use OpenCage\Geocoder\Geocoder;
use TransportBundle\Entity\Station;
use TransportBundle\Form\StationType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StationController extends Controller
{

    public function ajouterstAction($id,$m,Request $request)

    {
        if($m==2){
            $in1="tunis,tunisia";
            $club = new Station();
            $no="";
            $form = $this->createForm(StationType::class,$club);
            $form=$form->handleRequest($request);
            $i=1;
            if($form->isSubmitted() and $form->isValid()){
                $in=$form["name"]->getData();$i=1;
                $in1=$in.",tunisie";
                $url = "https://api.opencagedata.com/geocode/v1/json?q=".$in1."&key=298b7f9be7d54d9ab21c3e365567b3f0&language=en&pretty=1";
                $json = file_get_contents($url);
                $json = json_decode($json);
                $lat = $json->results[0]->geometry->lat;
                $lng = $json->results[0]->geometry->lng;
                $club1=$this->getDoctrine()->getRepository(Station::class)->findByName($in);
                $no=" Le station existe deja";
                if($club1==null){
                    $i=1;
                    $in=$form["idtrajet"]->getData();
                    $form->getData('adresse')->setIdtrajet($id);
                    $in2=$form["longtitude"]->getData();
                    $form->getData('adresse')->setLongtitude($lng);
                    $in3=$form["altitude"]->getData();
                    $form->getData('adresse')->setAltitude($lat);//$first['geometry']['lng']
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($club);
                    $em->flush();
                    return  $this->redirectToRoute('afficherdetailsst',['id' => $id]);}}
            return $this->render('@Transport/back/station/addstation.html.twig',array('form'=>$form->createView(),'id'=>$id,'no'=>$no,'name'=>$in1,'m'=>$m,'n'=>$i,'m'=>$m));
        } else if ($m==0){
            $no="";
            $in1="tunis,tunisia";
            $club = new Station();
            $form = $this->createForm(StationType::class,$club);
            $form=$form->handleRequest($request);
            if($form->isSubmitted() and $form->isValid()){
                $no="";
                $i=2;
                $m=1;
                $in1=$form["name"]->getData();
                              return $this->render('@Transport/back/station/addstation.html.twig',array('form'=>$form->createView(),'id'=>$id,'no'=>$no,'name'=>$in1,'n'=>$i,'m'=>$m));
            }}    $i=1;$m=1;  return $this->render('@Transport/back/station/addstation.html.twig',array('form'=>$form->createView(),'id'=>$id,'no'=>$no,'name'=>$in1,'n'=>$i,'m'=>$m));
    }


            public function deletestAction($id,$id2)
    {

        $club=$this->getDoctrine()->getRepository(Station::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($club);
        $em->flush();
        return $this->afficherst2Action($id2);
    }
    public function afficherstAction($id)
    {   $no="";
        $bus=$this->getDoctrine()->getRepository(Station::class)->findByTrajet($id);
        return $this->render('@Transport/back/station/station.html.twig',array("tab"=>$bus,"id"=>$id,"no"=>$no));

    }
    public function afficherst2Action($id)
    {
        $bus=$this->getDoctrine()->getRepository(Station::class)->findByTrajet($id);
        return  $this->redirectToRoute('afficherdetailsst',['id' => $id]);
    }




}