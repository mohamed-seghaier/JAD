<?php

namespace App\Form;

use App\Entity\Purchase;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PanierConfirmationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullName', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder'=>'Nom pour la livraison'
                ]
            ])
            ->add('address', TextareaType::class, [
                'label'=> 'Adresse de la livraison',
                'attr'=> [
                    'placeholder'=>'Adresse de livraison'
                ]
            ])
            ->add('postalCode', TextType::class, [
                'label'=>'Code Postal',
                'attr'=> [
                    'placeholder'=>'Code Postal de la livraison'
                ]
            ])
            ->add('city', TextType::class, [
                'label'=>'Ville',
                'attr' => [
                    'placeholder'=>'Ville de la livraison'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Purchase::class
            // Configure your form options here
        ]);
    }
}
