<?php

namespace App\Controller\Purchase;

use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Exception\AccessException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Security;

class PurchasesListController extends AbstractController
{


    #[Route('/commandes', name: "app_purchases")]
    public function index() {
        /** @var Client $user */
        $user = $this->getUser();
        if (!$user) throw new AccessDeniedException("Vous devez être connecté pour voir vos commandes.");

        return $this->render("purchase/index.html.twig", [
            'purchases' => $user->getPurchases()
        ]);
    }
}