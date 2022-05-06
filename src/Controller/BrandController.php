<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Client;
use App\Entity\Product;
use App\Form\BrandType;
use App\Form\ProductType;
use App\Repository\BrandRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
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
    #[Route('/admin/user/{id}/brand/create', name:'app_brand_create')]
    public function create($id,EntityManagerInterface $manager, Request $request): \Symfony\Component\HttpFoundation\RedirectResponse|Response
    {
        $user = $manager->getRepository(Client::class)->findOneBy(['id'=>$id]);
        $brand = new Brand();
        $form = $this->createForm(BrandType::class, $brand);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            $brand->setActive(true);
            $user->addBrand($brand);
            $brand->setClient($user);
            $manager->persist($brand);
            $manager->flush();
            return $this->redirectToRoute('app_brand', [
                'brand_id'=> $brand->getId()
            ]);
        }
        $data = $form->getData();

        return $this->render('brand/create.html.twig', [
            'formView'=>$form->createView()
        ]);
    }

    #[Route('/admin/{brand_id}/edit', name:'app_brand_edit')]
    public function edit($brand_id,BrandRepository $brandRepository, EntityManagerInterface $manager,
                         Request $request, Security $security): \Symfony\Component\HttpFoundation\RedirectResponse|Response
    {
        $user =$security->getUser();
        if (!$user->getRoles()) {
            throw new AccessDeniedHttpException("Tu n'as pas le droit d'être ici.");
        }
        $brand = $brandRepository->findOneBy(['id' => $brand_id]);
        $form = $this->createForm(BrandType::class, $brand);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($brand);
            $manager->flush();
            return $this->redirectToRoute('app_brand', [
                'brand_id' => $brand->getId()
            ]);
        }
        $data = $form->getData();

        return $this->render('brand/edit.html.twig', [
            'formView' => $form->createView(),
            'brand' => $brand
        ]);
    }

}
