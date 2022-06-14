<?php

namespace App\Panier;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierService
{
    protected $session;

    public function __construct(SessionInterface $session) {
        $this->session = $session;
    }

    public function remove(int $id) {
        $panier = $this->session->get('panier', []);
        unset($panier[$id]);
        $this->session->set('panier', $panier);
    }
}