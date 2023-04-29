<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\VehiculeType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;




class VehiculeController extends AbstractController
{
    #[Route('/vehicule', name: 'app_vehicule')]
    public function index(): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'controller_name' => 'VehiculeController',
        ]);
    }


    #[Route('/vehicule/Affiche',name:'AffStt')]
    function Affiche(VehiculeRepository $repo, PaginatorInterface $paginator,Request $request){
        $vehicule=$repo->findAll();
       $pagination = $paginator->paginate($vehicule, $request->query->getInt('page', 1), 5);
        return $this->render('vehicule/Affiche.html.twig',
    ['vss'=> $pagination]);
    }


    #[Route('/vehicule/ajout',name:'Ajout')]
    function Ajout(VehiculeRepository $repo,Request $req){
    #form
    $Vehicule=new  Vehicule();

    $form=$this->createForm(VehiculeType::class,$Vehicule);
        
      //  $currentDateTime = new \DateTime();
         // $currentDateTime->format('Y-m-d H:i:s'); 
      //  $currentDateTime->format('Y-m-d'); 
        //  $Vehicule->setF($currentDateTime);
    $form->handleRequest($req);
  
    #isEmpty isValid isSubmitted
    if($form->isSubmitted() && $form->isValid()){
        $repo->save($Vehicule,true);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($Vehicule, true);
         
        
           
        return $this->redirectToRoute('AffStt');
    }
}
    return $this->render('vehicule/Ajout.html.twig',
    ['form'=>$form->createView()]);

    # 2 Meth :  repo->save()
    # ou bien  em->persist()  flush
}



#[Route('/reponse/modifier/{id}',name:'MMM')]
function ModifierR(Vehicule $Vehicule, Request $req, EntityManagerInterface $em) {
    # formulaire
    $form = $this->createForm(VehiculeType::class, $Vehicule)
  
  ;

    $form->handleRequest($req);

    if ($form->isSubmitted() && $form->isValid()) {
        # flush()
        $em->flush();

        return $this->redirectToRoute('AffStt');
    }

return $this->render('vehicule/Ajout.html.twig', [
    'form' => $form->createView(),
]);
}

#[Route('/reponse/delete/{id}',name:'AAA')]
    function DeleteR(ManagerRegistry $doctrine,Vehicule $Vehicule){
        //  $repo->remove($classroom,true);
        // 2eme methode 
        $em=$doctrine->getManager();
        $em->remove($Vehicule);
        $em->flush();
          return $this->redirectToRoute('AffStt');
      }
    

      
    #[Route('/vehicule/pdf/{id}',name:'pdfff')]
    public function PDFreponse( $id,VehiculeRepository $repo)
    {
        
        $reponse=$repo->find($id);
        $reponses = [$reponse];
       // $Produits=$ProduitRepository->findBy(array('idCateg'=>$categorie));
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        //$html = $this->render("reponse/pdf.html.twig",array('reps'=>$reponse));
        $dompdf->loadHtml($this->renderView('vehicule/pdf.html.twig',
        ['vss'=>$reponses]));
        // Load HTML to Dompdf
       // $dompdf->loadHtml($html);
       // $dompdf->loadHtml('heloooooooooooooo');
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        $response = new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Reponse.pdf"',
        ]);
    
        return $response;

        // Output the generated PDF to Browser (force download)
    //    $dompdf->stream("reponse.pdf", [
    //       "Attachment" => true
     //   ]);

     //   $dompdf->stream();

    //   return $this->redirectToRoute("Aff");
    }

    #[Route('/vehicules/pdf', name: 'pdf_all_reponses')]
public function pdfAllReponses(VehiculeRepository $repo): Response
{
    // Récupérer toutes les réponses depuis la base de données
    $reponses = $repo->findAll();

    // Configurer Dompdf selon vos besoins
    $pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial');

    $dompdf = new Dompdf($pdfOptions);

    // Charger le contenu HTML des réponses dans Dompdf
    $dompdf->loadHtml($this->renderView('vehicule/pdf.html.twig', ['vss' => $reponses]));

    // Définir le format de la page
    $dompdf->setPaper('A4', 'portrait');

    // Générer le PDF
    $dompdf->render();

    // Renvoyer la réponse avec le contenu PDF en pièce jointe
    $response = new Response($dompdf->output(), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="Toutes_les_Vehicules.pdf"',
    ]);

    return $response;
}



}
