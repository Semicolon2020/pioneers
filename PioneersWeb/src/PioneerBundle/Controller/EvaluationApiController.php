<?php

namespace PioneerBundle\Controller;


use PioneerBundle\Entity\Activite;
use PioneerBundle\Entity\Enfant;
use PioneerBundle\Entity\Evaluation;
use PioneerBundle\Form\EvaluationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class EvaluationApiController extends Controller
{
    public function afficherEvalAction()
    {
        $abs=$this->getDoctrine()->getRepository(Evaluation::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($abs);
        return new JsonResponse($formatted);
    }

    public function afficherEvalSAction(Request $request)
    {
        $enf=$this->getDoctrine()->getRepository(Enfant::class)->findByPrenom($request->get('prenom'));

        $abs=$this->getDoctrine()->getRepository(Evaluation::class)->findByIdE($enf);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($abs);
        return new JsonResponse($formatted);
    }

    public function afficherActiviteAction()
    {
        $abs=$this->getDoctrine()->getRepository(Activite::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($abs);
        return new JsonResponse($formatted);
    }

    public function afficherEnfantAction()
    {
        $abs=$this->getDoctrine()->getRepository(Enfant::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($abs);
        return new JsonResponse($formatted);
    }

    public function newEvalAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $eval = new Evaluation();
        //$eval->setIdE($request->get('idE'));
        //$eval->setIdAc($request->get('idAc'));
        $eval->setRemarque($request->get('remarque'));
        $eval->setScore($request->get('score'));
        $activite = $em->getRepository(Activite::class)->find($request->get('id_ac'));

        $eval->setIdAc($activite);
        $enfant = $em->getRepository(Enfant::class)->find($request->get('id_e'));
        //$absence->setClasse($classe);
        $eval->setIdE($enfant);

        $em->persist($eval);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($eval);
        return new JsonResponse($formatted);
    }

    public function supprimerAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $evaluation=$em->getRepository(Evaluation::class)->find((int)$request->get('id'));
        $em->remove($evaluation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($evaluation);
        return new JsonResponse($formatted);
    }

    public function modifierAction(Request $request){


        $em=$this->getDoctrine()->getManager();
        $e=$em->getRepository(Evaluation::class)->find((int)$request->get('id'));
        //$form=$this->createForm(AbsenceType::class,$absence);

        $e->setRemarque($request->get('remarque'));
        $e->setScore($request->get('score'));
        $activite = $em->getRepository(Activite::class)->find($request->get('id_ac'));

        $e->setIdAc($activite);
        $enfant = $em->getRepository(Enfant::class)->find($request->get('id_e'));
        //$absence->setClasse($classe);
        $e->setIdE($enfant);
        $em->persist($e);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($e);
        return new JsonResponse($formatted);
    }


    public function enfantStatAction(Request $request){

       // $cin =  $this->getUser()->getCin();
        $enf=$this->getDoctrine()->getRepository(Enfant::class)->findby(array("cinP"=>$request->get('cin')));
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($enf);
        return new JsonResponse($formatted);

    }



}
