<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Product;
use App\Form\BrandType;
use App\Form\ProductType;
use App\Repository\BrandRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Config\TwigConfig;

class BrandController extends AbstractController
{


    #[Route('/brand/{brand_id}', name: 'app_brand')]
    public function index($brand_id ,BrandRepository $brandRepository): Response
    {
        $brand = $brandRepository->findOneBy([
            'id' => $brand_id
        ]);

        if (!$brand)
            throw $this->createNotFoundException("Cette catégorie n'existe pas.");
        return $this->render('brand/index.html.twig', [
            'brand' => $brand,
        ]);
    }
    #[Route('/admin/brand/create', name:'app_brand_create')]
    public function create(EntityManagerInterface $manager, Request $request): \Symfony\Component\HttpFoundation\RedirectResponse|Response
    {
        $brand = new Brand();
        $form = $this->createForm(BrandType::class, $brand);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $brand->setActive(true);
            $manager->persist($brand);
            $manager->flush();
            return $this->redirectToRoute('app_brand', [
                'brandId'=> $brand->getId()
            ]);
        }
        $data = $form->getData();

        return $this->render('brand/create.html.twig', [
            'formView'=>$form->createView()
        ]);
    }

}
