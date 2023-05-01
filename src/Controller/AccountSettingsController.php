<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountSettingsController extends AbstractController
{
    #[Route('/home/back/account_settings', name: 'app_account_settings')]
    public function account_settings(): Response
    {
        return $this->render('account_settings/account_settings.html.twig', [
            'controller_name' => 'AccountSettingsController',
        ]);
    }
}
