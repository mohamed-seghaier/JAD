<?php

namespace App\Fixtures;

use App\Entity\Brand;
use App\Entity\Ips;
use App\Entity\Product;
use App\Entity\User;
use App\Entity\UserType;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class FakerFactory {

    public function load(ObjectManager $manager) {
        $faker = Factory::create('fr_FR');
        $faker->addProvider(new \Liior\Faker\Prices($faker));
        $faker->addProvider(new \Bluemmb\Faker\PicsumPhotosProvider($faker));
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

        $usertype = new UserType();
        $usertype->setName("Vendeur");

        for ($i = 0; $i < 100; $i += 1) {
            $user = new User();
            $user->setFirstName($faker->firstName())
                ->setLastName($faker->lastName())
                ->setPhone($faker->phoneNumber())
                ->setMail($faker->email())
                ->setUserType($usertype);
            $usertype->addUsers($user);
            $ip = new Ips();
            $ip->addUser($user)
                ->setAddress($faker->ipv6());
            $user->addIp($ip);
            $brand = new Brand();
            $brand->setName($faker->company())
                ->setActive(true)
                ->setDescription($faker->paragraph());
            for ($p = 0; $p < 5; $p += 1) {
                $product = new Product();
                $product->setName($faker->sentence(1))
                    ->setDescription($faker->paragraph())
                    ->setActive(true)
                    ->setPrice(mt_rand(9, 399))
                    ->setPicture($faker->imageUrl(400,400, true))
                    ->setBrand($brand);
                dd("toto", $product);
                $brand->addProduct($product);
                $manager->persist($product);
            }
            $manager->persist($brand);
            $manager->persist($user);
            $manager->persist($usertype);

        }
        $manager->flush();
    }
}