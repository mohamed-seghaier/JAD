<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ProductRepository $products): Response
    {
        $session = new Session();
        $session->start();
        $tmp = $products->findBy([], [], 4);

        return $this->render('home/index.html.twig', [
            'products' => $tmp,
        ]);
    }
}
