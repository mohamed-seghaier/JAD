<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/{seller_id}', name: 'app_seller')]
    public function user($seller_id ,UserRepository $userRepository, Session $session): Response
    {

        $user = $userRepository->findOneBy([
            'id' => $seller_id
        ]);

        if (!$user)
            throw $this->createNotFoundException("Ce vendeur n'existe pas.");
        return $this->render('user/seller.html.twig', [
            'user' => $user,
            'user_type' =>$user->getUserType()->getName()
        ]);
    }


    #[Route('/client/connect', name:'client_connect')]
    public function clientConnect(UserRepository $userRepository, Session $session) : Response {
        $user = $userRepository->findOneBy([
            'id' => 501
        ]);
        if (!$user)
            throw $this->createNotFoundException("Ce client n'existe pas.");

        return $this->render('user/client.html.twig', [
            'client' => $user,
            'user_type' =>$user->getUserType()->getName()
        ]);
    }

    #[Route('/vendeur/connect', name:'vendeur_connect')]
    public function vendeurConnect(UserRepository $userRepository, Session $session) : Response {
        $user = $userRepository->findOneBy([
            'id' => 502
        ]);
        $session->set('user', $user);
        if (!$user)
            throw $this->createNotFoundException("Ce client n'existe pas.");
        return $this->render('user/seller.html.twig', [
            'user' => $user,
            'user_type' =>$user->getUserType()->getName()

        ]);
    }
}
