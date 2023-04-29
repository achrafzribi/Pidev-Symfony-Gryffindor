<?php

namespace App\Controller;

use App\Entity\Covoiturage;
use App\Form\CovoiturageType;
use App\Repository\CovoiturageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;


class CovoiturageController extends AbstractController
{
    #[Route('/covoiturage', name: 'app_covoiturage')]
    public function index(): Response
    {
        return $this->render('covoiturage/index.html.twig', [
            'controller_name' => 'CovoiturageController',
        ]);
    }

    #[Route('/front', name: 'app_front')]
    public function indexfront(): Response
    {
        return $this->render('baseFront.html.twig');
    }

    #[Route('/covoiturage/Affiche',name:'Aff')]
    function Affiche(CovoiturageRepository $repo, PaginatorInterface $paginator,Request $request){
        $covoiturage=$repo->findAll();
        $pagination = $paginator->paginate($covoiturage, $request->query->getInt('page', 1), 5);
        return $this->render('covoiturage/Affichecov.html.twig',
    ['covs'=> $pagination]);
    }

    



    #[Route('/covoiturage/ajout',name:'Ajoutcov')]
    function Ajout(CovoiturageRepository $repo,Request $req){
    #form
    $covoiturage=new  Covoiturage();

    $form=$this->createForm(CovoiturageType::class,$covoiturage);
        
      //  $currentDateTime = new \DateTime();
         // $currentDateTime->format('Y-m-d H:i:s'); 
      //  $currentDateTime->format('Y-m-d'); 
        //  $Vehicule->setF($currentDateTime);
    $form->handleRequest($req);
  
    #isEmpty isValid isSubmitted
    if($form->isSubmitted() && $form->isValid()){
        $repo->save($covoiturage,true);
        if ($form->isSubmitted() && $form->isValid()) {
            $repo->save($covoiturage, true);
            $this->addFlash('success', 'Entity created successfully!');
        return $this->redirectToRoute('Aff');
    }
}
    return $this->render('covoiturage/Ajoutcov.html.twig',
    ['form'=>$form->createView()]);

    # 2 Meth :  repo->save()
    # ou bien  em->persist()  flush
}




#[Route('/covoiturage/modifier/{id}',name:'modifc')]
function ModifierR(Covoiturage $Covoiturage, Request $req, EntityManagerInterface $em) {
    # formulaire
    $form = $this->createForm(CovoiturageType::class, $Covoiturage)
  
  ;

    $form->handleRequest($req);

    if ($form->isSubmitted() && $form->isValid()) {
        # flush()
        $em->flush();

        return $this->redirectToRoute('Aff');
    }

return $this->render('Covoiturage/Ajoutcov.html.twig', [
    'form' => $form->createView(),
]);
}







#[Route('/reponse/delete/{id}',name:'daletecov')]
    function DeleteR(ManagerRegistry $doctrine,Covoiturage $Covoiturage){
        //  $repo->remove($classroom,true);
        // 2eme methode 
        $em=$doctrine->getManager();
        $em->remove($Covoiturage);
        $em->flush();
          return $this->redirectToRoute('Aff');
      }
    

      #[Route('/reponse/deleteB/{id}',name:'daletecovB')]
    function DeleteRB(ManagerRegistry $doctrine,Covoiturage $Covoiturage){
        //  $repo->remove($classroom,true);
        // 2eme methode 
        $em=$doctrine->getManager();
        $em->remove($Covoiturage);
        $em->flush();
          return $this->redirectToRoute('AffB');
      }
    


      #[Route('/trierParName', name: 'app_trier_depart')]
      public function trierdepart(CovoiturageRepository $repo, PaginatorInterface $paginator,Request $request): Response
      {
          $recs = $repo->trierDepart();
          $pagination = $paginator->paginate($recs, $request->query->getInt('page', 1), 5);
          return $this->render('covoiturage/Affichecov.html.twig', [
              'covs' => $pagination
          ]);
      }
    
      #[Route('/trierParEmail', name: 'app_trier_destination')]
      public function trierdest(CovoiturageRepository $repo, PaginatorInterface $paginator,Request $request): Response
      {
          $recs =$repo->trierDestination();
          $pagination = $paginator->paginate($recs, $request->query->getInt('page', 1), 5);
    
          return $this->render('covoiturage/Affichecov.html.twig', [
              'covs' => $pagination 
          ]);
      }
    
      #[Route('/trierParEmail', name: 'app_trier_vehicule')]
      public function triervehicule(CovoiturageRepository $repo, PaginatorInterface $paginator,Request $request): Response
      {
          $recs =$repo->trierVehicule();
          $pagination = $paginator->paginate($recs, $request->query->getInt('page', 1), 5);
    
          return $this->render('covoiturage/Affichecov.html.twig', [
              'covs' => $pagination 
          ]);
      }


}
