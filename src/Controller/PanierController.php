<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PanierController extends AbstractController
{
    #[Route('/panier/add/{id}', name: 'app_panier_add', requirements: ['id'=> '\d+'])]
    public function add($id, ProductRepository $productRepository, SessionInterface $session): Response
    {
        $product = $productRepository->find($id);

        if (!$product) {
            throw $this->createNotFoundException("Le produit demandé n'existe pas");
        }
        $panier = $session->get('panier', []);
        if (array_key_exists($id, $panier)) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }


        if ($product->getStock() > 0) {
            $this->addFlash('success', "Le produit à bien été ajouté au panier");
            $session->set('panier', $panier);
            $product->setStock($product->getStock() - 1);
        }
        else
            $this->addFlash('warning', "Le produit n'est plus disponible");

//        $request->getSession()->remove('panier');

        return $this->redirectToRoute('app_product', ['product_id' => $id, 'brand_id'=> $product->getBrand()->getId()]);
    }


    #[Route('/panier/show', name: 'app_panier')]
    public function show(SessionInterface $session, ProductRepository $productRepository): Response {
        $detail = [];

        $total = 0;
        foreach ($session->get('panier', []) as $id=> $qty) {
            $product = $productRepository->find($id);
            $detail[] = [
                'product' => $product,
                'qty' => $qty,
            ];
            $total += ($product->getPrice() * $qty);

        }
        return $this->render('panier/index.html.twig', [
            'produits' => $detail,
            'total' => $total
        ]);
    }

}
