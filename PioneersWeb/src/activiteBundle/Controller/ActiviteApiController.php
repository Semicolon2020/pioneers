<?php

namespace activiteBundle\Controller;

use activiteBundle\Entity\activite;
use activiteBundle\Form\activiteType;
use SchoolBundle\Entity\Absence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class ActiviteApiController extends Controller
{
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $activite = new activite();
        $activite->setDescription($request->get('description'));
        $activite->setNom($request->get('nom'));
        $activite->setLieu($request->get('lieu'));
        $activite->setType($request->get('type'));
        $activite->setNiveau($request->get('niveau'));
        $em->persist($activite);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($activite);
        return new JsonResponse($formatted);
    }

    public function afficherAction()
    {
        $abs = $this->getDoctrine()->getRepository(activite::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($abs);
        return new JsonResponse($formatted);
    }
    public function supprimerAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $activite=$em->getRepository(activite::class)->find((int)$request->get('id'));
        $em->remove($activite);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($activite);
        return new JsonResponse($formatted);
    }
}
