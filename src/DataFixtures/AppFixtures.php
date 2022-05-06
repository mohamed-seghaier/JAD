<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use App\Entity\Client;
use App\Entity\Ips;
use App\Entity\Product;
use App\Entity\User;
use App\Entity\UserType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    protected UserPasswordHasherInterface $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $faker->addProvider(new \Liior\Faker\Prices($faker));
        $faker->addProvider(new \Bluemmb\Faker\PicsumPhotosProvider($faker));
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

        $usertype = new UserType();
        $usertype->setName('USER_CLIENT');

        for ($us = 0; $us <= 5; $us += 1) {
            $usertype->setName("Client");
            $user = new Client();
            $user->setFirstName($faker->firstName())
                ->setLastName($faker->lastName())
                ->setPhone($faker->phoneNumber())
                ->setEmail($faker->email())
                ->setPassword($this->encoder->hashPassword($user, $faker->password()))
                ->setToken($faker->linuxPlatformToken())
                ->setCreationDate(new \DateTime())
                ->setActive(true)
                ->setUserType($usertype)
                ->setRoles(['ROLE_CLIENT']);
            $usertype->addClient($user);
            $manager->persist($usertype);
            $manager->persist($user);
        }
        $usertype = new UserType();
        $usertype->setName("Admin");
        $user = new Client();
        $user->setFirstName($faker->firstName())
            ->setLastName($faker->lastName())
            ->setPhone($faker->phoneNumber())
            ->setEmail($faker->email())
            ->setPassword($this->encoder->hashPassword($user, "password"))
            ->setToken($faker->linuxPlatformToken())
            ->setCreationDate(new \DateTime())
            ->setActive(true)
            ->setUserType($usertype)
            ->setRoles(['ROLE_ADMIN']);
        $usertype->addClient($user);
        $manager->persist($usertype);
        $manager->persist($user);

        $usertype = new UserType();
        $usertype->setName("Vendeur");

        for ($i = 0; $i < 100; $i += 1) {
            $user = new Client();
            $user->setFirstName($faker->firstName())
                ->setLastName($faker->lastName())
                ->setPhone($faker->phoneNumber())
                ->setEmail($faker->email())
                ->setPassword($faker->password())
                ->setToken($faker->linuxPlatformToken())
                ->setCreationDate(new \DateTime())
                ->setActive(true)
                ->setUserType($usertype);
            $usertype->addClient($user);
            $ip = new Ips();
            $ip->addClient($user)
                ->setAddress($faker->ipv6())
                ->setBlackList(false);
            $user->addIp($ip);
            $brand = new Brand();
            $brand->setName($faker->company())
                ->setActive(true)
                ->setClient($user)
                ->setDescription($faker->paragraph());
            for ($p = 0; $p < 5; $p += 1) {
                $product = new Product();
                $product->setName($faker->sentence(1))
                    ->setDescription($faker->paragraph())
                    ->setActive(true)
                    ->setPrice(intval($faker->price()))
                    ->setPicture($faker->imageUrl(400,400, true))
                    ->setBrand($brand)
                    ->setStock(mt_rand(1, 50));
                $brand->addProduct($product);
                $manager->persist($product);
            }
            $manager->persist($brand);
            $manager->persist($user);
            $manager->persist($ip);
            $manager->persist($usertype);

        }
        $manager->flush();
    }
}
