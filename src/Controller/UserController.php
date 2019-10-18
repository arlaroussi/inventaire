<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $au)
    {
        $lastusername = $au->getLastUsername();
        $error = $au->getLastAuthenticationError();
        return $this->render('user/login.html.twig', ['lastuser'=>$lastusername, 'error'=>$error]);
    }
}
