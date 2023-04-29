<?php

namespace App\Controller;

use App\Entity\Paiement;
use App\Form\PaiementType;
use App\Form\CreditCardPaymentType;
use App\Form\BankTransferType;
use App\Entity\PaiementMethod;
use App\Repository\PaiementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\PaymentMethod;
use Stripe\Customer;
use Stripe\Charge;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\AnnotationChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\CalendarChart;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\Request;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\AreaChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\CandlestickChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\ColumnChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\LineChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\LineChart\LineChartOptions;

use Defuse\Crypto\Key;
use Defuse\Crypto\Crypto;

use Stripe\Token;



use Stripe\BankAccount;
use Stripe\Error\InvalidRequest;
use Psr\Log\LoggerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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

    
    

    #[Route('/back', name: 'app_paiement_index', methods: ['GET'])]
    public function index(PaiementRepository $paiementRepository): Response
    {
        return $this->render('paiement/indexR.html.twig', [
            'paiements' => $paiementRepository->findAll(),
        ]);
    }

    #[Route('/front', name: 'app_paiement_indexF', methods: ['GET'])]
    public function index1(PaiementRepository $paiementRepository): Response
    {
        return $this->render('paiement/indexF.html.twig', [
            'paiements' => $paiementRepository->findAll(),
        ]);
    }
    #[Route('/new', name: 'app_paiement_new', methods: ['GET', 'POST'])] 
    public function new(Request $request, PaiementRepository $paiementRepository): Response
    {
      //  $logger->debug('This is a custom debug log message');
        //try{
        $paiement = new Paiement();
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        $userIpAddress = '';
if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
    $userIpAddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
    $userIpAddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $userIpAddress = $_SERVER['REMOTE_ADDR'];
}

        if ($form->isSubmitted() && $form->isValid()) {
            $paiement->setIpAddress($userIpAddress);
            $paiementRepository->save($paiement, true);
            $paymentMethod = $form->get('paymentMethod')->getData();
            
           
            if ($paymentMethod->getType() == 'Credit Card') {
                return $this->redirectToRoute('app_paiement_newapi', ['id' => $paiement->getId(),'amount' => $paiement->getAmount()], Response::HTTP_SEE_OTHER);
        
            }else{
            
                return $this->redirectToRoute('app_paiement_show1', ['id' => $paiement->getId()], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('paiement/new.html.twig', [
            'paiement' => $paiement,
            'form' => $form,
        ]);
  //  }catch (\Exception $e) {
    //    $logger->error('An error occurred during the payment process: ' . $e->getMessage());
      //  return $this->redirectToRoute('app_paiement_indexF');
    //}
    }
    

   

    #[Route('/newapi', name: 'app_paiement_newapi', methods: ['GET','POST'])] 
    public function newapi(Request $request, PaiementRepository $paiementRepository): Response
    {
        $paiement = new Paiement();
        $form = $this->createForm(CreditCardPaymentType::class, $paiement);
        $form->handleRequest($request);
        $amount = $request->query->get('amount');
        $id = $request->query->get('id');
       
        
    
        Stripe::setApiKey('sk_test_51MgXUSHDZ477HmaTRBbQ43QrqSPHsC5iUQE5tvFSKL3jVufDWRQ02wnDJ1P8As7ScIybYYpQ3MpGoNZFPI5OSbNI007jqR4B6q');

        if ($form->isSubmitted() && $form->isValid()) {
            
            $expMonth = sprintf('%02d', $form->get('expirationDate')->getData()->format('m'));
            $cardNumber = $form->get('cardNumber')->getData();
            
            $card = [
                'number' => $cardNumber,
                'exp_month' => $expMonth,
                'exp_year' => $form->get('expirationDate')->getData()->format('Y'),
                'cvc' => $form->get('cvc')->getData(),
            ];

            $paymentMethod = $this->createPaymentMethod($card);

            $paymentIntent = PaymentIntent::create([
                'amount' =>$amount*100, // amount in cents
                'currency' => 'usd',
                'payment_method' => $paymentMethod->id,
                'description' => 'Payment for service'.$id,
            ]); 
            $paymentIntent->confirm();

            return $this->redirectToRoute('app_paiement_show1', ['id' => $id , 'Amount'=> $amount], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('paiement/newCC.html.twig', [
            'id' => $id,
            'Amount' =>$amount,
            'paiement' => $paiement,
            'form' => $form,
        ]);
    }

    private function createPaymentMethod($card) {
        $paymentMethod = PaymentMethod::create([
            'type' => 'card',
            'card' => $card,
        ]);
    
        return $paymentMethod;
    }
   
    #[Route('/payment/statistics', name: 'payment_statistics', methods: ['GET'])] 
    public function statistics(Request $request, PaginatorInterface $paginator, PaiementRepository $paiementRepository)
    {
        // Retrieve the payment data to analyze
        $payments = $paiementRepository->findAll();

        // Create an array to store the payments by date
        $paymentsByDate = [];
        foreach ($payments as $paiement) {
            $date = $paiement->getPaiementDate()->format('Y-m-d');
            if (!isset($paymentsByDate[$date])) {
                $paymentsByDate[$date] = [];
            }
            $paymentsByDate[$date][] = $paiement;
        }

        // Sort the payments by date
        ksort($paymentsByDate);

        // Calculate statistics for each date
        $paymentStats = [];
        foreach ($paymentsByDate as $date => $payments) {
            $totalAmount = 0;
            foreach ($payments as $payment) {
                $totalAmount += $payment->getAmount();
            }
            $averageAmount = count($payments) > 0 ? $totalAmount / count($payments) : 0;
            $paymentStats[] = [
                'date' => $date,
                'totalAmount' => $totalAmount,
                'averageAmount' => $averageAmount,
            ];
        }
    
//this is the piechart hedhy tekhdem
$pieChart = new PieChart();
$dataTable = [['Date', 'Average Amount']];
foreach ($paymentStats as $stats) {
    $dataTable[] = [$stats['date'], $stats['averageAmount']];
}
$pieChart->getData()->setArrayToDataTable($dataTable);
$pieChart->getOptions()->setTitle('Average Payment Amount by Date');
$pieChart->getOptions()->setHeight(500);
$pieChart->getOptions()->setWidth(900);
$pieChart->getOptions()->getTitleTextStyle()->setBold(true);
$pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
$pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
$pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
$pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
       
     $col = new ColumnChart();
$dataArray = [['Date', 'Total Amount', 'Average Amount']];
foreach ($paymentStats as $stat) {
    $dataArray[] = [$stat['date'], $stat['totalAmount'], $stat['averageAmount']];
}
$col->getData()->setArrayToDataTable($dataArray);
$col->getOptions()->setTitle('Payment Statistics');
$col->getOptions()->getHAxis()->setTitle('Date');
$col->getOptions()->getVAxis()->setTitle('Amount');
$col->getOptions()->setWidth(900);
$col->getOptions()->setHeight(500);


$dates = [];
$totalAmounts = [];
$averageAmounts = [];

foreach ($paymentStats as $payment) {
    $dates[] = $payment['date'];
    $totalAmounts[] = $payment['totalAmount'];
    $averageAmounts[] = $payment['averageAmount'];
}

$area = new AreaChart();
$area->getData()->setArrayToDataTable([
    ['Date', 'Total Amount', 'Average Amount'],
    [$dates[0], $totalAmounts[0], $averageAmounts[0]],
    [$dates[1], $totalAmounts[1], $averageAmounts[1]],
    [$dates[2], $totalAmounts[2], $averageAmounts[2]],
    [$dates[3], $totalAmounts[3], $averageAmounts[3]],
    // add more data points as needed
]);
$area->getOptions()->setTitle('Payment Statistics');
$area->getOptions()->getHAxis()->setTitle('Date');
$area->getOptions()->getHAxis()->getTitleTextStyle()->setColor('#333');
$area->getOptions()->getHAxis()->setMinValue(0);
$area->getOptions()->getHAxis()->setMaxValue(strtotime(end($dates)));

        // Configure pagination parameters
        $pagination = $paginator->paginate(
            $paymentStats,
            $request->query->getInt('page', 1),
            10 // items per page
        );

        // Render the statistics to the user
        return $this->render('paiement/statistics2.html.twig', [
            'paymentStats' => $pagination,
            'chart' => $col,
            'chart1' => $area,
            'chart2' => $pieChart,
        ]);
    }
   
/*
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
    */

    #[Route('/{id}/back', name: 'app_paiement_show', methods: ['GET'])]
    public function show(Paiement $paiement): Response
    {
        return $this->render('paiement/show.html.twig', [
            'paiement' => $paiement,
        ]);
    }

    
    #[Route('/{id}', name: 'app_paiement_show1', methods: ['GET'])]
    public function show1(Paiement $paiement): Response
    {
       

     
        return $this->render('paiement/showF.html.twig', [
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
    #[Route('/{id}/editB', name: 'app_paiement_editB', methods: ['GET', 'POST'])]
    public function editB(Request $request, Paiement $paiement, PaiementRepository $paiementRepository): Response
    {
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paiementRepository->save($paiement, true);

            return $this->redirectToRoute('app_paiement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('paiement/delete.html.twig', [
            'paiement' => $paiement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/editF', name: 'app_paiement_editF', methods: ['GET', 'POST'])]
    public function editF(Request $request, Paiement $paiement, PaiementRepository $paiementRepository): Response
    {
        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $paiementRepository->save($paiement, true);

            return $this->redirectToRoute('app_paiement_show1', ['id'=>$paiement->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('paiement/editF.html.twig', [
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
