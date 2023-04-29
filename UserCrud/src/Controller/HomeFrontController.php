<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Assurance;


class HomeFrontController extends AbstractController
{
    #[Route('/home/front/passager', name: 'app_home_front_passager')]
    public function index_passager(): Response
    {
        $user = $this->getUser();

        return $this->render('base-front_passager.html.twig', [
            'controller_name' => 'HomeFrontController',
            'user' => $user,
        ]);
    }

    #[Route('/home/front/chauffeur', name: 'app_home_front_chauffeur')]
    public function index_chauffeur(): Response
    {
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $assurance = $entityManager->getRepository(Assurance::class)->findOneBy(['createdBy' => $user]);

        return $this->render('base-front_chauffeur.html.twig', [
            'controller_name' => 'HomeFrontController',
            'user' => $user,
            'assurance' => $assurance,
        ]);
    }
}
