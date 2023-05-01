<?php

namespace App\Controller;


use Twilio\Rest\Client;
use App\Entity\Chauffeur;
use App\Form\ChauffeurType;
use App\Repository\ChauffeurRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/chauffeur')]
class ChauffeurController extends AbstractController
{
    #[Route('/back', name: 'app_chauffeur_index_back', methods: ['GET'])]
    public function indexback(ChauffeurRepository $chauffeurRepository,PaginatorInterface  $paginator,Request  $request): Response
    {
        $chauffeur = $chauffeurRepository->findAll();
        $pagination = $paginator->paginate(
            $chauffeur,
            $request->query->getInt('page', 2),
            2
        );
        return $this->render('chauffeur/index.html.twig', [
            'chauffeurs' => $pagination,
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
            $this->addFlash('success', 'chauffeur ajoutée avec succèes!');
             // Send a Twilio message to notify about the new chauffeur
        $accountSid = 'AC7820afe394dbafb7a218a18b491c5c07';
        $authToken = 'b639280362d5f98e6133536fc3966f35';
        $twilioNumber = '+12706759631'; // your Twilio phone number
        $adminNumber = '+21695411518'; // the phone number to receive the message
        $client = new Client($accountSid, $authToken);
        $message = $client->messages->create(
            $adminNumber,
            array(
                'from' => $twilioNumber,
                'body' => 'A new chauffeur has been added!'
            )
        );

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
            $this->addFlash('success', 'chauffeur modifiée avec succèes!');

            // Send a Twilio message to notify about the new chauffeur
        $accountSid = 'AC7820afe394dbafb7a218a18b491c5c07';
        $authToken = 'b639280362d5f98e6133536fc3966f35';
        $twilioNumber = '+12706759631'; // your Twilio phone number
        $adminNumber = '+21695411518'; // the phone number to receive the message
        $client = new Client($accountSid, $authToken);
        $message = $client->messages->create(
            $adminNumber,
            array(
                'from' => $twilioNumber,
                'body' => 'A chauffeur has been modified!'
            )
        );

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
            $this->addFlash('success', 'chauffeur supprimée avec succèes!');
            // Send a Twilio message to notify about the new chauffeur
        $accountSid = 'AC7820afe394dbafb7a218a18b491c5c07';
        $authToken = 'b639280362d5f98e6133536fc3966f35';
        $twilioNumber = '+12706759631'; // your Twilio phone number
        $adminNumber = '+21695411518'; // the phone number to receive the message
        $client = new Client($accountSid, $authToken);
        $message = $client->messages->create(
            $adminNumber,
            array(
                'from' => $twilioNumber,
                'body' => 'A chauffeur has been deleted!'
            )
        );

        }

        return $this->redirectToRoute('app_chauffeur_index_back', [], Response::HTTP_SEE_OTHER);
    }
}
