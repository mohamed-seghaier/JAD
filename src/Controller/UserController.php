<?php

namespace App\Controller;

use App\Entity\Client;
use App\Repository\ClientRepository;
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
    public function user($seller_id ,ClientRepository $userRepository, Session $session): Response
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


    #[Route('/user/{id}', name:'app_client_index')]
    public function client_index($id, ClientRepository $userRepository, Session $session) : Response {
        $user = $userRepository->findOneBy([
            'id' => $id
        ]);
        if (!$user)
            throw $this->createNotFoundException("Cet utilisateur n'existe pas.");

        return $this->render('user/client.html.twig', [
            'client' => $user,
            'user_type' =>$user->getUserType()->getName()
        ]);
    }

    #[Route('/vendeur/{id}/index', name:'app_vendeur_index')]
    public function vendeur_index(ClientRepository $userRepository, Session $session) : Response {
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
