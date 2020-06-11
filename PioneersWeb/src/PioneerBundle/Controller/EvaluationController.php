<?php

namespace PioneerBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use PioneerBundle\Entity\Enfant;
use PioneerBundle\Entity\Evaluation;
use PioneerBundle\Form\EvaluationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyAccess\PropertyAccess;

class EvaluationController extends Controller
{
    public function addEvaluationAction(Request $request)
    {
        $evaluation = new Evaluation();
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evaluation);
            $em->flush();
            return $this->redirectToRoute('showEvaluation');
        }


        return $this->render("@Pioneer/Evaluation/addE.html.twig", array('form' => $form->createView()));

    }


    public function showEvaluationAction(Request $request)
    {

        $posts = $this->getDoctrine()->getRepository(Evaluation::class)->findAllOrderby();
        return $this->render("@Pioneer/Evaluation/showE.html.twig", array(
            "Formlist" => $posts
        ));
    }

    public function updateEvaluationAction(Request $request, $id)
    {


        $evaluation = $this->getDoctrine()->getRepository(Evaluation::class)->find($id);
        $form = $this->createForm(EvaluationType::class, $evaluation);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evaluation);
            $em->flush();
            return $this->redirectToRoute('showEvaluation');

        }
        return $this->render('@Pioneer/Evaluation/editE.html.twig', array(
            "formupdate" => $form->createView()
        ));
    }


    public function deleteEvaluationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $evaluation = $this->getDoctrine()->getRepository(Evaluation::class)->find($id);
        $em->remove($evaluation);
        $em->flush();
        return $this->redirectToRoute('showEvaluation');
    }

    public function statsEvaluationAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $Evaluation = new Evaluation();
        $userId =  $this->getUser()->getCin();
        $Enfant = $em->getRepository(Enfant::class)->selectEnf($userId);
        dump($Enfant);
        dump($Evaluation);
        $form = $this->createForm('PioneerBundle\Form\NomEnfType', $Evaluation,[
            'id'=>$Enfant
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() ) {
            dump($Enfant);
           $em->persist($Evaluation);
            return $this->StatistiqueAction($request,$Evaluation->getIdE());
        }

        return $this->render('@Pioneer/Evaluation/statE.html.twig',array(
            'absence' => $Evaluation,
            'form' => $form->createView(),
        ));
    }

    public function StatistiqueAction (Request $request ,Enfant $enfant){

        $propertyAccessor = PropertyAccess::createPropertyAccessor();
        $pieChart = new ColumnChart();
        $em= $this->getDoctrine();

        $data= array();
        $stat=['Activite' , 'Score'];
        $nb=0;
        array_push($data,$stat);

            $absnb = $em->getRepository(Evaluation::class)->GetEvalEtudiant($enfant->getIdE());
            dump($absnb);
        foreach($absnb as $EvalEnf) {
            dump($EvalEnf);
            $stat = array();

            array_push($stat, $EvalEnf->getIdAc()->getNom(),$EvalEnf->getScore());

            $stat = [$EvalEnf->getIdAc()->getNom(),$EvalEnf->getScore()];
            array_push($data, $stat);
        }
        dump($data);
        $result = array_map("unserialize", array_unique(array_map("serialize", $data)));
        dump($result);
        $pieChart->getData()->setArrayToDataTable(
            $result
        );
        //$pieChart->getOptions()->setTitle('Activite / Score');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        return $this->render('@Pioneer/Evaluation/statistiques.html.twig', array('piechart' => $pieChart));


    }



}
