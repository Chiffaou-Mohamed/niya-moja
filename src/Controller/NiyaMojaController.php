<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Routing\Annotation\Route;

class NiyaMojaController extends AbstractController
{
    /**
     * @Route("/niya/moja", name="niya_moja")
     */
    public function index()
    {
        return $this->render('niya_moja/index.html.twig', [
            'controller_name' => 'NiyaMojaController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home() {
        return $this->render('niya_moja/home.html.twig');
    }
}
