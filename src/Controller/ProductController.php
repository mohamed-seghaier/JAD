<?php

namespace App\Controller;

use App\Repository\BrandRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/{brand_id}/{product_id}', name: 'app_product')]
    public function index($brand_id, $product_id, ProductRepository $productRepository, BrandRepository $brandRepository): Response
    {
        $product = $productRepository->findOneBy(['id'=>$product_id]);
        if (!$product || $product->getBrand()->getId() != $brand_id)
            throw $this->createNotFoundException("Ce produit n'existe pas ou n'appartient pas à cette catégorie.");
        return $this->render('product/index.html.twig', [
            'product' => $product,
        ]);
    }
}
