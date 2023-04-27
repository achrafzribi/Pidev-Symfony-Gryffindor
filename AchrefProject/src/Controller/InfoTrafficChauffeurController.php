<?php

namespace App\Controller;

use App\Entity\Infotrafic;
use App\Repository\ChauffeurRepository;
use App\Repository\InfotraficRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class InfoTrafficChauffeurController extends AbstractController
{
    #[Route('/chauffeur/statistics', name: 'app_chauffeur_statistics')]
public function index(ChauffeurRepository $chauffeurRepository,InfotraficRepository $infotrafficRepository): Response
{
    $chauffeurs = $chauffeurRepository->findAll();
    
    $infotraffics = $infotrafficRepository->findAll();
    $totalLikes=$infotrafficRepository->countLikes();
    $totaldisLikes=$infotrafficRepository->countDisLikes();
    $totalChauffeurs = count($chauffeurs);
    
    $totalInfotraffics = count( $infotraffics);
    
    $averageInfotrafficsPerChauffeurs = $totalChauffeurs > 0 ? round($totalInfotraffics / $totalChauffeurs, 2) : 0;
    
   
    
    $chauffeursByID = $chauffeurRepository->createQueryBuilder('r')
        ->select('r.id, COUNT(r) AS count')
        ->groupBy('r.id')
        ->getQuery()
        ->getResult();
    
    $emailwithmostinfotraffic = null;
    $maxChauffeurs = 0;
    foreach ($chauffeursByID as $chauffeurByEmail) {
        if ($chauffeurByEmail['count'] > $maxChauffeurs) {
            $emailwithmostinfotraffic = $chauffeurByEmail['id'];
            $maxChauffeurs = $chauffeurByEmail['count'];
        }
    }
    
    
    return $this->render('chauffeur/chauffeurStats.html.twig', [
        'totalChauffeurs' => $totalChauffeurs,
        'totalInfotraffics' => $totalInfotraffics,
        'averageInfotrafficsPerChauffeurs' => $averageInfotrafficsPerChauffeurs,
        'chauffeursByID' => $chauffeursByID,
        'IDchauffeurwithmostinfotraffic' => $emailwithmostinfotraffic,
        'totalLikes' => $totalLikes,
        'totaldisLikes' => $totaldisLikes,

    ]);
}

    
    






}


