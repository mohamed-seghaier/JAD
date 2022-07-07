<?php

namespace App\Panier;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierService
{
//    protected $session;
    protected ProductRepository $repo;
//SessionInterface $session,
    public function __construct(ProductRepository $repository) {
//        $this->session = $session;
        $this->repo = $repository;
    }

    /**
     * @param $panier
     * @return PanierItem[]
     */
    public function getDetailPanier($panier): array
    {
        $detailed = [];

        foreach ($panier as $id => $qty) {
            $product = $this->repo->find($id);

            if (!$product) {
                continue;
            }

            $detailed[] = new PanierItem($product, $qty);
        }
        return $detailed;
    }
    public function remove(int $id) {
        $panier = $this->session->get('panier', []);
        unset($panier[$id]);
        $this->session->set('panier', $panier);
    }

}