<?php

namespace App\Controller;

use App\Entity\PaiementMethod;
use App\Form\PaiementMethodType;
use App\Repository\PaiementMethodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/pay/method')]
class PayMethodController extends AbstractController
{
    #[Route('/', name: 'app_pay_method_index', methods: ['GET'])]
    public function index(PaiementMethodRepository $paiementMethodRepository): Response
    {
        return $this->render('pay_method/index.html.twig', [
            'paiement_methods' => $paiementMethodRepository->findAll(),
        ]);
    }
 /*   #[Route('/trying/admin', name: 'admin_homepage')]
public function adminHome(Request $request): Response
{
    // Render the 'dashboards_crypto' template with an empty form
    $paiementMethod = new PaiementMethod();
    $form = $this->createForm(PaiementMethodType::class, $paiementMethod);
    return $this->render('dashboards_crypto.html.twig', [
        'form' => $form->createView(),
        'paiement_method' => $paiementMethod,
    ]);
} */

   
#[Route('/trying/admin', name: 'admin_homepage')]
#[Template('/trying/admin1')]
public function adminHome(Request $request): Response
{
    // Render the 'dashboards_crypto' template with an empty form
    $paiementMethod = new PaiementMethod();
    $form = $this->createForm(PaiementMethodType::class, $paiementMethod);
    $role = 'cli';
    if ($role === 'client'){
        return $this->render('SecTemp/page-starter.html.twig', [
            'form' => $form->createView(),
            'paiement_method' => $paiementMethod,
        ]); 
    } else {
    return $this->render('dashboards_crypto.html.twig', [
        'form' => $form->createView(),
        'paiement_method' => $paiementMethod,
    ]); 
}
}

   /* #[Route('/new', name: 'app_pay_method_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PaiementMethodRepository $paiementMethodRepository): Response
    {
        $paiementMethod = new PaiementMethod();
        $form = $this->createForm(PaiementMethodType::class, $paiementMethod);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paiementMethodRepository->save($paiementMethod, true);

            return $this->redirectToRoute('admin_homepage', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dashboards_crypto.html.twig', [
            'paiement_method' => $paiementMethod,
            'form' => $form,
           
        ]);
    } */

    #[Route('/new', name: 'app_pay_method_new', methods: ['GET', 'POST'])]
#[Template('SecTemp/page-starter.html.twig')]
public function new(Request $request, PaiementMethodRepository $paiementMethodRepository): Response
{
    $paiementMethod = new PaiementMethod();
    $form = $this->createForm(PaiementMethodType::class, $paiementMethod);
    $form->handleRequest($request);
    $role = 'cli';
    if ($form->isSubmitted() && $form->isValid()) {
        $paiementMethodRepository->save($paiementMethod, true);

        if ($role === 'client') {
            return $this->redirectToRoute('client_page', [], Response::HTTP_SEE_OTHER);
        } else {
            return $this->redirectToRoute('admin_homepage', [], Response::HTTP_SEE_OTHER);
        }
    }

    if ($role === 'client') {
        return $this->renderForm('SecTemp/page-starter.html.twig', [
            'paiement_method' => $paiementMethod,
            'form' => $form,
        ]);
    } else {
        return $this->renderForm('dashboards_crypto.html.twig', [
            'paiement_method' => $paiementMethod,
            'form' => $form,
        ]);
    }
}

    #[Route('/{id}', name: 'app_pay_method_show', methods: ['GET'])]
    public function show(PaiementMethod $paiementMethod): Response
    {
        return $this->render('pay_method/show.html.twig', [
            'paiement_method' => $paiementMethod,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_pay_method_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PaiementMethod $paiementMethod, PaiementMethodRepository $paiementMethodRepository): Response
    {
        $form = $this->createForm(PaiementMethodType::class, $paiementMethod);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paiementMethodRepository->save($paiementMethod, true);

            return $this->redirectToRoute('app_pay_method_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pay_method/edit.html.twig', [
            'paiement_method' => $paiementMethod,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pay_method_delete', methods: ['POST'])]
    public function delete(Request $request, PaiementMethod $paiementMethod, PaiementMethodRepository $paiementMethodRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$paiementMethod->getId(), $request->request->get('_token'))) {
            $paiementMethodRepository->remove($paiementMethod, true);
        }

        return $this->redirectToRoute('app_pay_method_index', [], Response::HTTP_SEE_OTHER);
    }
}
