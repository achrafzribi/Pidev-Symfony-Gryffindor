<?php

namespace App\Controller;

use App\Entity\Assurance;
use App\Entity\User;
use App\Form\AssuranceType;
use App\Repository\AssuranceRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;
use App\Service\PdfService;
use Knp\Snappy\Pdf;

#[Route('/assurance')]
class AssuranceController extends AbstractController
{
    private $pdfGenerator;

    public function __construct(Pdf $pdfGenerator)
    {
        $this->pdfGenerator = $pdfGenerator;
    }

    #[Route('/', name: 'app_assurance_index', methods: ['GET'])]
    public function index(AssuranceRepository $assuranceRepository): Response
    {
        return $this->render('assurance/index.html.twig', [
            'assurances' => $assuranceRepository->findAll(),
        ]);
    }

    #[Route('/{created_by_id}/chauffeur', name: 'app_assurance_index_chauffeur', methods: ['GET'])]
    public function indexchauffeur(AssuranceRepository $assuranceRepository, int $created_by_id): Response
    {
        $assurances = $assuranceRepository->findBy(['createdBy' => $created_by_id]);
        $user = $this->getUser();
        $assurance = null; // initialize assurance variable
        if (!empty($assurances)) {
            $assurance = $assurances[0]; // set assurance variable to first item in array
        }
        return $this->render('assurance/index_chauffeur.html.twig', [
            'assurances' => $assurances,
            'user' => $user,
            'assurance' => $assurance,
        ]);
    }
    
    

    #[Route('/new', name: 'app_assurance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository, AssuranceRepository $assuranceRepository): Response
    {
        $assurance = new Assurance();
        $assurance->setCreatedBy($this->getUser());
        $form = $this->createForm(AssuranceType::class, $assurance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $assuranceRepository->save($assurance, true);

            return $this->redirectToRoute('app_assurance_index_chauffeur', ['created_by_id' => $this->getUser()->getId()], Response::HTTP_SEE_OTHER);
        }

        $user = $this->getUser();

        return $this->renderForm('assurance/new.html.twig', [
            'assurance' => $assurance,
            'form' => $form,
            'user' => $user,
        ]);
    }

    #[Route('/show/{id}/{created_by_id}', name: 'app_assurance_show', methods: ['GET'])]
    public function show_chauffeur(int $id, int $created_by_id, AssuranceRepository $assuranceRepository, Assurance  $assurance): Response
    {
        $user = $this->getUser();
        $assurance = $assuranceRepository->find($id);
        return $this->render('assurance/show_chauffeur.html.twig', [
            'assurance' => $assurance,
            'user' => $user,
        ]);
        
    }

    #[Route('show/{id}', name: 'app_assurance_show_admin', methods: ['GET'])]
    public function show(Assurance $assurance): Response
    {
        return $this->render('assurance/show.html.twig', [
            'assurance' => $assurance,
        ]);
    }

    /*#[Route('/pdf/{id}/chauffeur', name: 'app_pdf')]
    public function generatePdf(Assurance $assurance = null): Response
    {
        $html = $this->renderView('assurance/showPDF.html.twig', [
            // Add any variables that you want to pass to the template here
            "assurance" => $assurance,
        ]);

       // $pdfGenerator = new Pdf();
        $pdfGenerator = new Pdf('C:\Program Files\wkhtmltopdf\bin');
        $pdf = $pdfGenerator->getOutputFromHtml($html);

        return new Response($pdf,
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="example.pdf"',
        ]
    );
    }
    */

   /* public function indexAction(Request $request, Assurance $assurance = null)
    {
        $html = $this->renderView("assurance/showPDF.html.twig", array(
            "assurance" => $assurance,
            "title" => "Awesome PDF Title"
        ));
    
        $filename = "custom_pdf_from_twig";
        return new Response(
            $this->pdfGenerator->getOutputFromHtml(
                $html,
                array(
    'Content-type' => 'application/pdf',
    'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
)
            ),
            200,
            array(
                'content-type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"'
            )
        );
    }*/
  
        /*public function generatePdfAssurance(Assurance $assurance = null, PdfService $pdf) {
        $html = $this->render("assurance/showPDF.html.twig", [
            'assurance' => $assurance,
    ]);
        $pdf->showPdfFile($html);
    }*/

    

    #[Route('/{id}/edit/{created_by_id}', name: 'app_assurance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Assurance $assurance, AssuranceRepository $assuranceRepository): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(AssuranceType::class, $assurance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $assuranceRepository->save($assurance, true);

            return $this->redirectToRoute('app_assurance_index_chauffeur', ['created_by_id' => $this->getUser()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('assurance/edit_chauffeur.html.twig', [
            'assurance' => $assurance,
            'form' => $form,
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_assurance_edit_admin', methods: ['GET', 'POST'])]
    public function edit_admin(Request $request, Assurance $assurance, AssuranceRepository $assuranceRepository): Response
    {
        $form = $this->createForm(AssuranceType::class, $assurance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
    
            $assuranceRepository->save($assurance, true);

            return $this->redirectToRoute('app_assurance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('assurance/edit.html.twig', [
            'assurance' => $assurance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_assurance_delete', methods: ['POST'])]
    public function delete(Request $request, Assurance $assurance, AssuranceRepository $assuranceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$assurance->getId(), $request->request->get('_token'))) {
            $assuranceRepository->remove($assurance, true);
        }

        return $this->redirectToRoute('app_assurance_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/chauffeur', name: 'app_assurance_delete_chauffeur', methods: ['POST'])]
    public function delete_chauffeur(Request $request, Assurance $assurance, AssuranceRepository $assuranceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$assurance->getId(), $request->request->get('_token'))) {
            $assuranceRepository->remove($assurance, true);
        }

        return $this->redirectToRoute('app_assurance_index_chauffeur', ['created_by_id' => $assurance->getCreatedBy()->getId()], Response::HTTP_SEE_OTHER);
    }
}
