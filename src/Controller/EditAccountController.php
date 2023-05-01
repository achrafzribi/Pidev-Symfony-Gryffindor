<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditAccountController extends AbstractController
{
    #[Route('/home/back/account_settings/edit', name: 'app_edit_account')]
    public function edit_account(): Response
    {
        return $this->render('edit_account/edit_account.html.twig', [
            'controller_name' => 'EditAccountController',
        ]);
    }
}
