<?php

namespace App\Form;

use App\Entity\Brand;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label'=> 'Nom du produit : ',
                'attr'=>['placeholder'=>'Entrez le nom du produit'],
//                'constraints'=>new NotBlank(message: "Le nom doit être renseigné")
            ])
            ->add('Description', TextareaType::class, [
                'label'=> 'Description : ',
                'attr'=>['placeholder'=>'Entrez une description'],
            ])
            ->add('price', MoneyType::class, [
                'label'=> 'Prix : ',
                'attr'=>[ 'placeholder'=>'Entrez le prix du produit'],
                'divisor'=>100,
            ])
            ->add('stock', NumberType::class, [
                'label'=>'Quantité',
                'attr'=> ['placeholder'=> 'Entrez une quantité'],
            ])
            ->add('Picture', FileType::class, [
                'label'=>'Photo du produit',
                'attr'=> ['placeholder'=> 'Téléchargez '],
            ])

            ->add('brand', EntityType::class, [
                'label'=> 'Marque : ',
                'placeholder'=>'-- Sélectionnez une marque --',
                'class' => Brand::class,
                'choice_label' => 'name'
            ]);
        //$builder->get('price')->addModelTransformer(new CentimesTansformer());
        /*        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                    $form = $event->getForm();

                     @var  Product
                    $product = $event->getData();

                    if ($product->getPrice()) {
                        $product->setPrice($product->getPrice() / 100);
                    }

        //            if ($product->getId()===null) {
        //
        //                $form->add('category', EntityType::class, [
        //                    'label'=> 'Catégorie',
        //                    'placeholder'=>'-- Sélectionnez une catégorie --',
        //                    'class' => Category::class,
        //                    'choice_label' => 'name'
        //                ]);
        //            }

                });
                $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {

                    * @var  Product
                    $product = $event->getData();

                    if ($product->getPrice()) {
                        $product->setPrice($product->getPrice() * 100);
                    }
                });*/
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
