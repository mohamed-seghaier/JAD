<?php

namespace App\Controller;

use App\Form\PanierConfirmationType;
use App\Panier\PanierItem;
use App\Panier\PanierService;
use App\Repository\ProductRepository;
use phpDocumentor\Reflection\Types\This;
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
    public function add($id, ProductRepository $productRepository, SessionInterface $session, Request $request): Response
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
//        $session->remove('panier');

        if ($panier[$id] <= $product->getStock()) {
            $this->addFlash('success', "Le produit à bien été ajouté au panier");
            $session->set('panier', $panier);
        }
        else
            $this->addFlash('warning', "Le produit n'est plus disponible, vérifiez votre panier.");


        if ($request->query->get('returnToPanier'))
            return $this->redirectToRoute('app_panier', []);
        return $this->redirectToRoute('app_product', ['product_id' => $id, 'brand_id'=> $product->getBrand()->getId()]);
    }


    #[Route('/panier/show', name: 'app_panier')]
    public function show(SessionInterface $session, ProductRepository $productRepository): Response {
        $form = $this->createForm(PanierConfirmationType::class);
        $detail = [];

        $total = 0;
        foreach ($session->get('panier', []) as $id=> $qty) {
            $product = $productRepository->find($id);
            if (!$product) continue;
            $detail[] = new PanierItem($product, $qty);
            $total += ($product->getPrice() * $qty);

        }
        return $this->render('panier/index.html.twig', [
            'produits' => $detail,
            'total' => $total,
            'formview' => $form->createView()
        ]);
    }


    #[Route("/panier/delete/{id}", name: "app_panier_del", requirements: ['id'=>'\d+'])]
    public function delete($id, ProductRepository $repository, SessionInterface $session) {
        $product = $repository->find($id);
        if (!$product) {
            throw $this->createNotFoundException("Le produit n'existe pas.");
        }
        $panier = $session->get('panier', []);
        unset($panier[$id]);
        $session->set('panier', $panier);
        $this->addFlash("success", "Le produit à bien été effacé du panier.");

        return $this->redirectToRoute('app_panier');
    }

    #[Route("/panier/decrement/{id}", name: "app_panier_decrement", requirements: ['id'=>'\d+'])]
    public function decrement($id, ProductRepository $repository, SessionInterface $session) {
        $product = $repository->find($id);

        if (!$product) throw $this->createNotFoundException("Le produit n'existe pas.");

        $panier = $session->get('panier', []);

        if (!array_key_exists($id, $panier))
            return $this->redirectToRoute('app_panier');

        if ($panier[$id] == 1) return $this->redirectToRoute('app_panier_del', ['id'=>$id]);

        $panier[$id] -= 1;
        $session->set('panier', $panier);
        $this->addFlash("success", "Le produit à bien été retiré du panier.");
        return $this->redirectToRoute('app_panier');
    }

}
