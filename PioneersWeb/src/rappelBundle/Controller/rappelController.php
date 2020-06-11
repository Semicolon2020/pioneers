<?php

namespace rappelBundle\Controller;


use rappelBundle\Entity\rappel;
use rappelBundle\Form\rappelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class rappelController extends Controller
{
    public function allAction()
    {
        $rappel = $this->getDoctrine()->getManager()
            ->getRepository('rappelBundle:rappel')
            ->findAll();
        $result = [];
        foreach ($rappel as $p) {

            $tmp =array( ["id" => $p->getId(),
                "objet"=> $p->getObjet(),
                "text"=> $p->getText(),
                "enfant"=> $p->getEnfant(),
                "date" => $p->getDate()->format('d-M-Y'),


            ]);

            $result= array_merge($result,$tmp);


        }

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($result);
        return new JsonResponse($formatted);

    }

    public function addRappelAction($text,$Objet,$enfant){
        $rappel = new rappel();
        $rappel->setDate(new \DateTime('now'));
        $rappel->setText($text);
        $rappel->setObjet($Objet);
        $rappel->setEnfant($enfant);
        $em = $this->getDoctrine()->getManager();
        $em->persist($rappel);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($rappel);
        return new JsonResponse($formatted);

    }
    public function findAction($id)
    {
        $rappel = $this->getDoctrine()->getManager()
            ->getRepository('rappelBundle:rappel')
            ->find($id);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($rappel);
        return new JsonResponse($formatted);
    }

    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $rappel = new Rappel();
        $rappel->setText($request->get('text'));
        $rappel->setObjet($request->get('objet'));
        $rappel->setEnfant($request->get('enfant'));
        $em->persist($rappel);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($rappel);
        return new JsonResponse($formatted);
    }
    public function ajouterRappelAction(Request $request)
    {
        $rappel = new rappel();
        $form = $this->createForm(rappelType::class, $rappel);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $rappel->setDate(new \DateTime('now'));
            $em->persist($rappel);
            $em->flush();
            return $this->redirectToRoute('listRappelAdmin');
        }

        return $this->render('@rappel/Rappel/Rappel.html.twig', array("form" => $form->createView()));
    }

    public function listrappelAction(Request $request)
    {

        $posts = $this->getDoctrine()->getRepository(rappel::class)->findAll();
        return $this->render('@rappel/Rappel/listRappel.html.twig', array(
            "Formlist" => $posts
        ));
    }

    public function deleteRappelAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $p = $this->getDoctrine()->getRepository(rappel::class)->find($id);
        $em->remove($p);
        $em->flush();
        return $this->redirectToRoute('listRappelAdmin');
    }


}
