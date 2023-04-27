<?php

namespace App\Controller;

use App\Entity\Infotrafic;
use App\Form\InfotraficType;
use App\Repository\InfotraficRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



#[Route('/infotrafic')]
class InfotraficController extends AbstractController
{
    #[Route('/', name: 'app_infotrafic_index', methods: ['GET'])]
    public function index(InfotraficRepository $infotraficRepository,PaginatorInterface  $paginator,Request  $request): Response
    {

        $infotrafic = $infotraficRepository->findAll();
        $pagination = $paginator->paginate(
            $infotrafic,
            $request->query->getInt('page', 1),
            2
        );
        return $this->render('infotrafic/index.html.twig', [
            'infotrafics' => $pagination,
        ]);
    }
    #[Route('/back', name: 'app_infotrafic_index_back', methods: ['GET'])]
    public function indexback(InfotraficRepository $infotraficRepository,PaginatorInterface  $paginator,Request  $request): Response
    {
        $infotrafic = $infotraficRepository->findAll();
        $pagination = $paginator->paginate(
            $infotrafic,
            $request->query->getInt('page', 1),
            3
        );
        return $this->render('infotrafic/indexback.html.twig', [
            'infotrafics' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_infotrafic_new', methods: ['GET', 'POST'])]
    public function new(Request $request, InfotraficRepository $infotraficRepository): Response
    {
        $infotrafic = new Infotrafic();
        $form = $this->createForm(InfotraficType::class, $infotrafic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $infotraficRepository->save($infotrafic, true);
            $this->addFlash('success', 'Infotraffic ajoutée avec succèes!');

            return $this->redirectToRoute('app_infotrafic_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('infotrafic/new.html.twig', [
            'infotrafic' => $infotrafic,
            'form' => $form,
        ]);
    }
    #[Route('/back/new', name: 'app_infotrafic_new_back', methods: ['GET', 'POST'])]
    public function newback(Request $request, InfotraficRepository $infotraficRepository): Response
    {
        $infotrafic = new Infotrafic();
        $form = $this->createForm(InfotraficType::class, $infotrafic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $infotraficRepository->save($infotrafic, true);
            $this->addFlash('success', 'Infotraffic ajoutée avec succèes!');

            return $this->redirectToRoute('app_infotrafic_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('infotrafic/newback.html.twig', [
            'infotrafic' => $infotrafic,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_infotrafic_show', methods: ['GET'])]
    public function show(Infotrafic $infotrafic): Response
    {
        return $this->render('infotrafic/show.html.twig', [
            'infotrafic' => $infotrafic,
        ]);
    }

    #[Route('/back/{id}', name: 'app_infotrafic_show_back', methods: ['GET'])]
    public function showback(Infotrafic $infotrafic): Response
    {
        return $this->render('infotrafic/showback.html.twig', [
            'infotrafic' => $infotrafic,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_infotrafic_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Infotrafic $infotrafic, InfotraficRepository $infotraficRepository): Response
    {
        $form = $this->createForm(InfotraficType::class, $infotrafic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $infotraficRepository->save($infotrafic, true);
            $this->addFlash('success', 'Infotraffic modifiée avec succèes!');

            return $this->redirectToRoute('app_infotrafic_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('infotrafic/edit.html.twig', [
            'infotrafic' => $infotrafic,
            'form' => $form,
        ]);
    }

    #[Route('/back/{id}/edit', name: 'app_infotrafic_edit_back', methods: ['GET', 'POST'])]
    public function editback(Request $request, Infotrafic $infotrafic, InfotraficRepository $infotraficRepository): Response
    {
        $form = $this->createForm(InfotraficType::class, $infotrafic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $infotraficRepository->save($infotrafic, true);
            $this->addFlash('success', 'Infotraffic modifiée avec succèes!');

            return $this->redirectToRoute('app_infotrafic_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('infotrafic/editback.html.twig', [
            'infotrafic' => $infotrafic,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_infotrafic_delete', methods: ['POST'])]
    public function delete(Request $request, Infotrafic $infotrafic, InfotraficRepository $infotraficRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$infotrafic->getId(), $request->request->get('_token'))) {
            $infotraficRepository->remove($infotrafic, true);
            $this->addFlash('success', 'Infotraffic supprimée avec succèes!');

        }

        return $this->redirectToRoute('app_infotrafic_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/back/{id}', name: 'app_infotrafic_delete_back', methods: ['POST'])]
    public function deleteback(Request $request, Infotrafic $infotrafic, InfotraficRepository $infotraficRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$infotrafic->getId(), $request->request->get('_token'))) {
            $infotraficRepository->remove($infotrafic, true);
            $this->addFlash('success', 'Infotraffic supprimée avec succèes!');
        }

        return $this->redirectToRoute('app_infotrafic_index_back', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/infotraffic/{infoid}/like', name: 'app_infotraffic_like', methods: ['POST'])]
    public function like(Request $request, EntityManagerInterface $entityManager,$infoid): Response
    {
        $infotraffic = $entityManager
        ->getRepository(Infotrafic::class)
        ->find($infoid);
    if (! $infotraffic) {
        throw $this->createNotFoundException(
            'No covoiturage found for id '.$infoid
        );
    }

    $infotraffic->setLikes($infotraffic->getLikes() + 1);
    $entityManager->flush();

    // Redirect to the index page after liking the annonce
    return new RedirectResponse($this->generateUrl('app_infotrafic_index'));
    }
  
    #[Route('/infotraffic/{infoid}/dislike', name: 'app_infotraffic_dislike', methods: ['POST'])]
    public function dislike(Request $request, EntityManagerInterface $entityManager,$infoid): Response
    {
        $infotraffic = $entityManager
        ->getRepository(Infotrafic::class)
        ->find($infoid);
    if (!$infotraffic) {
        throw $this->createNotFoundException(
            'No annonce found for id '.$infoid
        );
    }

    $infotraffic->setDislikes($infotraffic->getDislikes() + 1);
    $entityManager->flush();

    // Redirect to the index page after disliking the annonce
    return new RedirectResponse($this->generateUrl('app_infotrafic_index'));
    }

}
