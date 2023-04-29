<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TryingAdminController extends AbstractController
{
    #[Route('/home/back', name: 'app_home_back')]
    public function index3(): Response
    {
        return $this->render('base-back.html.twig', [
            'controller_name' => 'HomeBackController',
        ]);
    }
    #[Route('/home/front', name: 'app_home_front')]
    public function index4(): Response
    {
        return $this->render('base-front.html.twig', [
            'controller_name' => 'HomeFrontController',
        ]);
    }

    #[Route('/trying/admin', name: 'app_trying_admin')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'TryingAdminController',
        ]);
    }
    #[Route('/trying/admin1', name: 'app_trying_admin1')]
    public function index1(): Response
    {
        return $this->render('SecTemp/page-starter1.html.twig', [
            'controller_name' => 'admin1',
        ]);
    }
    #[Route('/trying/admin2', name: 'app_trying_admin2')]
    public function index2(): Response
    {
        return $this->render('SecTemp/add-paiement1.html.twig', [
            'controller_name' => 'admin1',
        ]);
    }
    
}
