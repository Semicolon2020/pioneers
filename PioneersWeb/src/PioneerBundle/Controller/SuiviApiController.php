<?php

namespace PioneerBundle\Controller;


use PioneerBundle\Entity\Enfant;
use PioneerBundle\Entity\Suivi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class SuiviApiController extends Controller
{
    public function afficherSuiAction()
    {
        $abs=$this->getDoctrine()->getRepository(Suivi::class)->findAll();
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


}
