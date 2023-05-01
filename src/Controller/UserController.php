<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Assurance;
use App\Form\UserType;
use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use App\Repository\AssuranceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Service\PdfService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Form\FormError;
use Spipu\Html2Pdf\Html2Pdf;
use App\Service\T_HTML2PDF;


#[Route('/user')]
class UserController extends AbstractController
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
public function index(Request $request, UserRepository $userRepository): Response
{
    $searchEmail = $request->query->get('email');
    $orderBy = $request->query->get('orderBy', 'FirstName');
    $orderDirection = $request->query->get('orderDirection', 'ASC');
    $users = [];

    if ($searchEmail) {
        $users = $userRepository->findByEmail($searchEmail)->getQuery()->getResult();
    } 
    else if($orderBy ) {
        $users = $userRepository->findAllOrderedByNameASC($orderBy, $orderDirection);
    }
    else {
        $users = $userRepository->findAll();
    }

    return $this->render('user/index.html.twig', [
        'users' => $users,
        'orderBy' => $orderBy,
        'orderDirection' => $orderDirection,
    ]);
}

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainpwd = $user->getPassword();
            $encoded = $this->passwordEncoder->encodePassword($user,$plainpwd);
            $user->setPassword($encoded);

            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/pdf/{id}', name: 'app_pdf')]
    public function generatePdfUser(User $user = null, PdfService $pdf) {
        $html = $this->render('PDF/userPDF.html.twig', ['user' => $user]);
        $pdf->showPdfFile($html);
    }

   
    /*#[Route('/pdf/{id}', name: 'app_pdf', methods: ['GET'])]
    public function showPdf(User $user): Response
    {
        $template = $this->render('PDF/userPDF.html.twig', [
            'user' => $user,
        ]);
 
 
      $html2pdf = new T_Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(10, 15, 10, 15));
      $html2pdf->create('P', 'A4', 'fr', true, 'UTF-8', array(10, 15, 10, 15));
 
 
      return $html2pdf->generatePdf($template, "user");
    }*/

    #[Route('/{id}/front/passager', name: 'app_user_show_front', methods: ['GET'])]
    public function showFront_chauffeur(User $user): Response
    {
        return $this->render('user/showFront.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/front/chauffeur', name: 'app_user_show_front_chauffeur', methods: ['GET'])]
    public function showFront_passager(User $user): Response
    {
        $assurance = null;
        return $this->render('user/showFront_chauffeur.html.twig', [
            'user' => $user,
            'assurance' => $assurance,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainpwd = $user->getPassword();
            $encoded = $this->passwordEncoder->encodePassword($user,$plainpwd);
            $user->setPassword($encoded);
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit/front/passager', name: 'app_user_edit_front', methods: ['GET', 'POST'])]
    public function editFront_passager(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainpwd = $user->getPassword();
            $encoded = $this->passwordEncoder->encodePassword($user,$plainpwd);
            $user->setPassword($encoded);
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_home_front_passager', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/editFront.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit/front/chauffeur', name: 'app_user_edit_front_chauffeur', methods: ['GET', 'POST'])]
    public function editFront_chauffeur(Request $request, User $user, UserRepository $userRepository): Response
    {
        $assurance = null;
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainpwd = $user->getPassword();
            $encoded = $this->passwordEncoder->encodePassword($user,$plainpwd);
            $user->setPassword($encoded);
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_home_front_chauffeur', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/editFront_chauffeur.html.twig', [
            'user' => $user,
            'form' => $form,
            'assurance' => $assurance,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/front', name: 'app_user_delete_front', methods: ['POST'])]
    public function deleteFront(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/search', name: 'user_search')]
    public function searchByEmail(Request $request, UserRepository $userRepository,User $user = null)
    {
        $email = $request->query->get('email');
    
        $user = $userRepository->searchByEmail($email);
    
        return $this->render('user/search.html.twig', [
            'user' => $user,
            'email' => $email,
        ]);
    }
    
    #[Route('/{id}/edit/password/chauffeur', name: 'app_user_edit_password_chauffeur', methods: ['GET', 'POST'])]
    public function resetPasswordAction_chauffeur(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ResetPasswordType::class, $user);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            //$passwordEncoder = $this->get('security.password_encoder');
            $oldPassword = $request->get('reset_password')['oldPassword'];
    
            // Si l'ancien mot de passe est bon
            if ($this->passwordEncoder->isPasswordValid($user, $oldPassword)) {
                $newEncodedPassword = $this->passwordEncoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($newEncodedPassword);
    
                $em->persist($user);
                $em->flush();
    
                $this->addFlash('notice', 'Votre mot de passe a bien été changé !');
    
                return $this->redirectToRoute('app_user_show_front_chauffeur', ['id' => $user->getId()], Response::HTTP_SEE_OTHER);
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }
    
        return $this->render('user/resetPasswordChauffeur.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit/password/passager', name: 'app_user_edit_password_passager', methods: ['GET', 'POST'])]
    public function resetPasswordAction_passager(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ResetPasswordType::class, $user);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            //$passwordEncoder = $this->get('security.password_encoder');
            $oldPassword = $request->get('reset_password')['oldPassword'];
    
            // Si l'ancien mot de passe est bon
            if ($this->passwordEncoder->isPasswordValid($user, $oldPassword)) {
                $newEncodedPassword = $this->passwordEncoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($newEncodedPassword);
    
                $em->persist($user);
                $em->flush();
    
                $this->addFlash('notice', 'Votre mot de passe a bien été changé !');
    
                return $this->redirectToRoute('app_user_show_front', ['id' => $user->getId()], Response::HTTP_SEE_OTHER);
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }
        }
    
        return $this->render('user/resetPassword.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

}