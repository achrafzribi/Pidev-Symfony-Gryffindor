<?php

namespace App\Controller;

use App\Entity\Paiement;
use App\Form\PaiementType;
use App\Entity\PaiementMethod;
use App\Repository\PaiementRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PaiementMethodRepository;

use Symfony\Component\Routing\Annotation\Route;

#[Route('/paiement')]
class PaiementController extends AbstractController
{
    private EntityManagerInterface $em;
    private PaiementMethodRepository $paiementMethodRepository;

    public function __construct(EntityManagerInterface $em, PaiementMethodRepository $paiementMethodRepository)
    {
        $this->em = $em;
        $this->paiementMethodRepository = $paiementMethodRepository;
    }
    

    #[Route('/', name: 'app_paiement_index', methods: ['GET'])]
    public function index(PaiementRepository $paiementRepository): Response
    {
        return $this->render('paiement/index.html.twig', [
            'paiements' => $paiementRepository->findAll(),
        ]);
    }

#[Route('/trying/admin', name: 'admin_homepage_paiement')]
#[Template('/trying/admin2')]
public function adminHome(Request $request): Response
{
    // Render the 'dashboards_crypto' template with an empty form
    $paiement = new Paiement();
    $form = $this->createForm(PaiementType::class, $paiement);
    $role = 'cli';
    if ($role === 'client'){
        return $this->render('SecTemp/add-paiement.html.twig', [
            'form' => $form->createView(),
            'paiement' => $paiement,
        ]); 
    }else{
    return $this->render('dashboards_corona.html.twig', [
        'form' => $form->createView(),
        'paiement' => $paiement,
    ]); 
}
}

    #[Route('/new', name: 'app_paiement_new', methods: ['GET', 'POST'])]
    #[Template('SecTemp/add-paiement.html.twig')]
    public function new(Request $request, PaiementRepository $paiementRepository ): Response
    {
        $paiement = new Paiement();
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);
        $role = 'clie';
        if ($form->isSubmitted() && $form->isValid()) {
          
            $paiementRepository->save($paiement, true);
            if ($role === 'client') {
                return $this->redirectToRoute('client_page1', [], Response::HTTP_SEE_OTHER);
            }else {
            return $this->redirectToRoute('admin_homepage_paiement', [], Response::HTTP_SEE_OTHER);
            }
        }
        if ($role === 'client') {
            return $this->renderForm('SecTemp/add-paiement.html.twig', [
                'paiement' => $paiement,
                'form' => $form,
            ]);
        } else {
        return $this->renderForm('dashboards_corona.html.twig', [
           
            'paiement' => $paiement,
            'form' => $form,
        ]);
    }
    }

    #[Route('/{id}', name: 'app_paiement_show', methods: ['GET'])]
    public function show(Paiement $paiement): Response
    {
        return $this->render('paiement/show.html.twig', [
            'paiement' => $paiement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_paiement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Paiement $paiement, PaiementRepository $paiementRepository): Response
    {
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paiementRepository->save($paiement, true);

            return $this->redirectToRoute('app_paiement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('paiement/edit.html.twig', [
            'paiement' => $paiement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_paiement_delete', methods: ['POST'])]
    public function delete(Request $request, Paiement $paiement, PaiementRepository $paiementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$paiement->getId(), $request->request->get('_token'))) {
            $paiementRepository->remove($paiement, true);
        }

        return $this->redirectToRoute('app_paiement_index', [], Response::HTTP_SEE_OTHER);
    }
}
