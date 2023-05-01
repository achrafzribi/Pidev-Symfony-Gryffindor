<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeBackController extends AbstractController
{
    #[Route('/home/back', name: 'app_home_back')]
    public function index(): Response
    {
        return $this->render('base-back.html.twig', [
            'controller_name' => 'HomeBackController',
        ]);
    }
}
