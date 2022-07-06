<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\BrandRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/brand/{brand_id}/product/{product_id}', name: 'app_product')]
    public function index($brand_id, $product_id, ProductRepository $productRepository, BrandRepository $brandRepository, SessionInterface $session): Response
    {
        $product = $productRepository->findOneBy(['id'=>$product_id]);
        if (!$product || $product->getBrand()->getId() != $brand_id)
            throw $this->createNotFoundException("Ce produit n'existe pas ou n'appartient pas à cette catégorie.");
        $panier = $session->get('panier');
        if (is_array($panier) && array_key_exists($product_id, $panier)) $stock = $product->getStock() - $panier[$product_id];
        else $stock = $product->getStock();
        return $this->render('product/index.html.twig', [
            'product' => $product,
            'stock' => $stock
        ]);
    }

    #[Route('/admin/brand/{id}/product/create', name:'app_product_create')]
    public function create($id, EntityManagerInterface $manager, Request $request): \Symfony\Component\HttpFoundation\RedirectResponse|Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $brand = $manager->getRepository(Brand::class)->findOneBy(['id'=>$id]);
            $brand->addProduct($product);
            $product->setActive(true);
            $product->setBrand($brand);
            $manager->persist($product);
            $manager->flush();
            return $this->redirectToRoute('app_product', [
                'product_id' => $product->getId(),
                'brand_id'=>$product->getBrand()->getId(),
                'product' => $product
            ]);
        }
        $data = $form->getData();

        return $this->render('product/create.html.twig', [
            'formView'=>$form->createView()
        ]);
    }

    #[Route('/admin/product/{product_id}/edit', name:'app_product_edit')]
    public function edit($product_id,ProductRepository $productRepository, EntityManagerInterface $manager, Request $request): \Symfony\Component\HttpFoundation\RedirectResponse|Response
    {
        $product = $productRepository->findOneBy(['id'=>$product_id]);
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $manager->persist($product);
            $manager->flush();
            return $this->redirectToRoute('app_product', [
                'product_id' => $product->getId(),
                'brand_id'=>$product->getBrand()->getId()
            ]);
        }
        $data = $form->getData();

        return $this->render('product/edit.html.twig', [
            'formView'=>$form->createView(),
            'product'=> $product
        ]);
    }

    #[Route("/product/all", name: "app_product_all")]
    public function allProducts(ProductRepository $products): Response
    {
        $tmp = $products->findAll();
        return $this->render('product/allProducts.html.twig', [
            'products' => $tmp,
        ]);
    }


}
