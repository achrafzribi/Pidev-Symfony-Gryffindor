<?php

namespace App\Controller;

use App\Entity\Chauffeur;
use App\Form\ChauffeurType;
use App\Repository\ChauffeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/chauffeur')]
class ChauffeurController extends AbstractController
{
    #[Route('/back', name: 'app_chauffeur_index_back', methods: ['GET'])]
    public function indexback(ChauffeurRepository $chauffeurRepository): Response
    {
        return $this->render('chauffeur/index.html.twig', [
            'chauffeurs' => $chauffeurRepository->findAll(),
        ]);
    }

    #[Route('/back/new', name: 'app_chauffeur_new_back', methods: ['GET', 'POST'])]
    public function newback(Request $request, ChauffeurRepository $chauffeurRepository): Response
    {
        $chauffeur = new Chauffeur();
        $form = $this->createForm(ChauffeurType::class, $chauffeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chauffeurRepository->save($chauffeur, true);

            return $this->redirectToRoute('app_chauffeur_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chauffeur/new.html.twig', [
            'chauffeur' => $chauffeur,
            'form' => $form,
        ]);
    }

    #[Route('/back/{id}', name: 'app_chauffeur_show_back', methods: ['GET'])]
    public function showback(Chauffeur $chauffeur): Response
    {
        return $this->render('chauffeur/show.html.twig', [
            'chauffeur' => $chauffeur,
        ]);
    }

    #[Route('/back/{id}/edit', name: 'app_chauffeur_edit_back', methods: ['GET', 'POST'])]
    public function editback(Request $request, Chauffeur $chauffeur, ChauffeurRepository $chauffeurRepository): Response
    {
        $form = $this->createForm(ChauffeurType::class, $chauffeur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chauffeurRepository->save($chauffeur, true);

            return $this->redirectToRoute('app_chauffeur_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chauffeur/edit.html.twig', [
            'chauffeur' => $chauffeur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chauffeur_delete', methods: ['POST'])]
    public function delete(Request $request, Chauffeur $chauffeur, ChauffeurRepository $chauffeurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chauffeur->getId(), $request->request->get('_token'))) {
            $chauffeurRepository->remove($chauffeur, true);
        }

        return $this->redirectToRoute('app_chauffeur_index_back', [], Response::HTTP_SEE_OTHER);
    }
}
