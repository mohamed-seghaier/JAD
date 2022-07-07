<?php

namespace App\Controller\Purchase;

use App\Entity\Purchase;
use App\Repository\PurchaseRepository;
use Doctrine\ORM\EntityManagerInterface;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Service\Attribute\Required;

class PurchasePaymentController extends AbstractController
{
    protected string $secretKey;
    protected string $publicKey;

    public function __construct(string $secretKey, string $publicKey) {
        $this->secretKey = $secretKey;
        $this->publicKey = $publicKey;
    }

    #[Route("/purchase/pay/{id}",name: 'app_payment_card')]
    public function showCardForm($id, PurchaseRepository $repository): \Symfony\Component\HttpFoundation\Response
    {
        $purchase = $repository->find($id);
        \Stripe\Stripe::setApiKey('sk_test_51LHy5HKNEiTGJQKoUNYRrfn2oFKygf8pUFRQamanG1RFLTNvyhG3tvPAhR1f8D6V7HepU8gyDtG3sFg4JLtRotHF000eZbl1Or');

        if (!$purchase) {
            $this->addFlash('warning', "Veuillez compléter votre commande");
            $this->redirectToRoute('app_panier');
        }
        $paymentIntent = \Stripe\PaymentIntent::create([
            'amount' => $purchase->getTotal(),
            'currency' => 'eur',
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
        ]);

        return $this->render('/purchase/payment.html.twig', [
            'purchaseId' => $purchase->getId(),
            'clientSecret' => $paymentIntent->client_secret
        ]);
    }

    #[Route("/purchase/pay/success/{id}",name: 'app_payment_success')]
    public function paymentSuccess($id, PurchaseRepository $purchaseRepository, SessionInterface $session, EntityManagerInterface $em): \Symfony\Component\HttpFoundation\RedirectResponse
    {

        $purchase = $purchaseRepository->find($id);

        if (!$purchase ||
            ($purchase && $purchase->getClient() !== $this->getUser()) ||
            ($purchase && $purchase->getStatus() == Purchase::STATUS_PAID)
        ) {
            $this->addFlash("warning", "Commande inexistante");
            return $this->redirectToRoute("app_purchases");
            }
        $purchase->setStatus(Purchase::STATUS_PAID);
        $session->remove('panier');
        $this->addFlash("success", "Commande confirmée !");
        $em->persist($purchase);
        $em->flush($purchase);
        return $this->redirectToRoute("app_purchases");
    }

}