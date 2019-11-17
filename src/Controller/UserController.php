<?php

namespace App\Controller;

use App\Service\MessageGenerator;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Psr\Log\LoggerInterface; //Un service de logger


class UserController extends AbstractController
{
    /**
     * @Route("/logger", name="r_logger")
     */
    public function index(LoggerInterface $logger)
    {
        $logger->info('Vérifier vos logs');
        return $this->render("user/test.html.twig");
    }
    
    /**
     * @Route("/", name="login")
     */
    public function login(Request $request, AuthenticationUtils $au)
    {
        $lastusername = $au->getLastUsername();
        $error = $au->getLastAuthenticationError();
        return $this->render('user/login1.html.twig', ['lastuser'=>$lastusername, 'error'=>$error]);
    }
    
    /**
     * 
     * @Route("/user/register", name="user_register")
     * 
     */
   
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
    // 1) Générons le formulaire à partir de notre UserType
    $user = new User();
    $form = $this->createForm(UserType::class, $user);

    // 2) Traitement du formulaire une fois envoyé
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {

    // 3)Encodage du mot de passe
    $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
    
    $user->setPassword($password);

    // 4) sauvegarde de l'utilisateur en base de données!
    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->persist($user);
    $entityManager->flush();

      return $this->redirectToRoute('add_art');
    }
    return $this->render('user/register.html.twig', array('form' => $form->createView(),)
    );
}

/**
 * @Route("/user/dash", name="user_dash")
 */
    public function dashboard(){
        return $this->render('user/dashboard.html.twig');
    }
    
    
/**
 * @Route("/user/message", name="user_msg")
 */
 }
    

