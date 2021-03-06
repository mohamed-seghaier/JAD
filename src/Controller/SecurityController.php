<?php

namespace App\Controller;

use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $utils): Response
    {
        $form = $this->createForm(LoginType::class, ['email'=> $utils->getLastUsername()]);

        return $this->render('security/login.html.twig', [
            'formView'=> $form->createView(),
            'error' => $utils->getLastAuthenticationError()
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout() {

    }
}
