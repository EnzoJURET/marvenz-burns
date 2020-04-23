<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SlideController extends AbstractController
{
    /**
     * @Route("/slide", name="slide")
     */
    public function index()
    {
        return $this->render('slide/index.html.twig', [
            'controller_name' => 'SlideController',
        ]);
    }
}
