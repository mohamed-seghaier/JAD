<?php

namespace App\Panier;

use App\Entity\Product;

class PanierItem
{
    public Product $product;
    public int $qty;

    public function __construct(Product $product, int $qty) {
        $this->product = $product;
        $this->qty = $qty;
    }

    public function getTotal() {
        return $this->product->getPrice() * $this->qty;
    }
}