<?php

namespace PioneerBundle\Controller;

use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use PioneerBundle\Entity\Enfant;
use PioneerBundle\Entity\Suivi;
use PioneerBundle\Form\SuiviType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Knp\Bundle\SnappyBundle\Snappy\Response\JpegResponse;


class SuiviController extends Controller
{
    public function addSuiviAction(Request $request)
    {
        $suivi = new Suivi();
        $form = $this->createForm(SuiviType::class, $suivi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($suivi);
            $em->flush();
            return $this->redirectToRoute('showSuivi');
        }


        return $this->render("@Pioneer/Suivi/addS.html.twig", array('form' => $form->createView()));

    }


    public function showSuiviAction(Request $request)
    {

        $posts = $this->getDoctrine()->getRepository(Suivi::class)->findAllOrderby();
        return $this->render("@Pioneer/Suivi/showS.html.twig", array(
            "Formlist" => $posts
        ));
    }

    public function updateSuiviAction(Request $request, $id)
    {


        $suivi = $this->getDoctrine()->getRepository(Suivi::class)->find($id);
        $form = $this->createForm(SuiviType::class, $suivi);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($suivi);
            $em->flush();
            return $this->redirectToRoute('showSuivi');

        }
        return $this->render('@Pioneer/Suivi/editS.html.twig', array(
            "form" => $form->createView()
        ));
    }


    public function deleteSuiviAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $suivi = $this->getDoctrine()->getRepository(Suivi::class)->find($id);
        $em->remove($suivi);
        $em->flush();
        return $this->redirectToRoute('showSuivi');
    }


    public function showSuiviFAction(Request $request)
    {
        $result=[];
        $enfant = $this->getDoctrine()->getRepository(Enfant::class)->selectEnf($this->getUser()->getCin());
        foreach ($enfant as $e )
        {
            $posts = $this->getDoctrine()->getRepository(Suivi::class)->findAllOrderbyE($e->getidE());
            $result = array_merge($result,$posts);
        }

        return $this->render("@Pioneer/Suivi/pdfS.html.twig", array(
            "Formlist" => $result
        ));
    }


    public function pdfAction()
    {
        $result=[];
        $enfant = $this->getDoctrine()->getRepository(Enfant::class)->selectEnf($this->getUser()->getCin());
        foreach ($enfant as $e )
        {
            $posts = $this->getDoctrine()->getRepository(Suivi::class)->findAllOrderbyE($e->getidE());
            $result = array_merge($result,$posts);
        }
        $html = $this->renderView('@Pioneer/Suivi/backUPpdf.html.twig', array(
        "Formlist" => $result
        ));
        $snappy = $this->get('knp_snappy.pdf');

        $filename = 'myFirstSnappyPDF';
        return new PdfResponse(
            $snappy->getOutputFromHtml($html),
            "Test.pdf",
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
        return $this->redirectToRoute('showSuiviF',array(
            "Formlist" => $result));

    }


}
