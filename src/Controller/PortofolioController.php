<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortofolioController extends AbstractController
{
    /**
     * @Route("/portofolio", name="portofolio")
     */
    public function index()
    {
        return $this->render('portofolio/index.html.twig', [
            'controller_name' => 'PortofolioController',
        ]);
    }
}
