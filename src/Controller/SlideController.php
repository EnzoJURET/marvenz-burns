<?php

namespace App\Controller;

use App\Entity\Slide;
use App\Form\SlideType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class SlideController extends AbstractController
{
    /**
     * @Route("/", name="slide_index", methods={"GET"})
     */
    public function index(): Response
    {
        $slides = $this->getDoctrine()
            ->getRepository(Slide::class)
            ->findAll();

        if (empty($slides)) {
            $slide_empty=1;
        }
        else {
            $slide_empty=0;   
        }

        return $this->render('slide/index.html.twig', [
            'slides' => $slides,
            'slide_empty' => $slide_empty,
        ]);
    }

    /**
     * @Route("/new", name="slide_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $slide = new Slide();
        $form = $this->createForm(SlideType::class, $slide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($slide);
            $entityManager->flush();

            return $this->redirectToRoute('slide_index');
        }

        return $this->render('slide/new.html.twig', [
            'slide' => $slide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idSlide}", name="slide_show", methods={"GET"})
     */
    public function show(Slide $slide): Response
    {
        return $this->render('slide/show.html.twig', [
            'slide' => $slide,
        ]);
    }

    /**
     * @Route("/{idSlide}/edit", name="slide_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Slide $slide): Response
    {
        $form = $this->createForm(SlideType::class, $slide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('slide_index');
        }

        return $this->render('slide/edit.html.twig', [
            'slide' => $slide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idSlide}", name="slide_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Slide $slide): Response
    {
        if ($this->isCsrfTokenValid('delete'.$slide->getIdSlide(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($slide);
            $entityManager->flush();
        }

        return $this->redirectToRoute('slide_index');
    }
}
