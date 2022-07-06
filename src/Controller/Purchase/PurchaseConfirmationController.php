<?php

namespace App\Controller\Purchase;

use App\Entity\Client;
use App\Entity\Purchase;
use App\Entity\PurchaseItem;
use App\Form\PanierConfirmationType;
use App\Panier\PanierService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class PurchaseConfirmationController extends AbstractController
{
    protected PanierService $panierService;
    protected EntityManagerInterface $em;

    public function __construct(PanierService $panierService, EntityManagerInterface $em)
    {
        $this->panierService = $panierService;
        $this->em = $em;
    }

//    #[Route('/panier/confirm', name: 'app_panier_confirm')]
    #[Route('/panier/confirm', name: 'app_panier_confirm')]
    public function confirm(Request $request, SessionInterface $session) :Response {
        $form = $this->createForm(PanierConfirmationType::class);

        $form->handleRequest($request);

        if (!$form->isSubmitted()) {
            $this->addFlash("warning", "Le panier n'est pas confirmé, informations manquantes");
            return $this->redirectToRoute('app_panier');
        }
        /** @var Client $user */
        $user = $this->getUser();
        if (!$user)
            throw new AccessDeniedException("Vous devez êtres connectés");



        if (count($this->panierService->getDetailPanier($session->get('panier', []))) === 0) {
            $this->addFlash("warning", "Panier vide");
            return $this->redirectToRoute('app_panier');
        }
        /** @var Purchase $purchase */
        $purchase = $form->getData();

        $purchase->setClient($user)
            ->setPurchasedAt(new \DateTimeImmutable());

        $total = 0;
        foreach ($this->panierService->getDetailPanier($session->get('panier', [])) as $item) {
            $purchaseItem = new PurchaseItem();
            $purchaseItem->setPurchase($purchase)
                ->setProduct($item->product)
                ->setProductName($item->product->getName())
                ->setQuantity($item->qty)
                ->setTotal($item->getTotal())
                ->setProductPrice($item->product->getPrice());
            $total += $item->getTotal();
            $this->em->persist($purchaseItem);

        }
        $purchase->setTotal($total);
        $this->em->persist($purchase);
        $this->em->flush();
//        $this->addFlash("success", "Commande confirmée");
//        $session->remove('panier');
        return $this->redirectToRoute('app_payment_card', [
            'id' => $purchase->getId()
        ]);
    }
}