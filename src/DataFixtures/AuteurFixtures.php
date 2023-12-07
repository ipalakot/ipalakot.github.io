<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;


class AuteurFixtures extends Fixture  implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        $faker = \Faker\Factory::create('fr_FR');

        // Creation de mes auteurs
            for ($k=0; $k<100; $k++) {
                $auteur = new Auteur();
                $auteur ->setNoms($faker->lastname)
                        ->setPrenoms($faker->firstname)
                        ->setAge($faker->numberBetween(18, 90))
                        ->setEmail($faker->email);

                $manager->persist($auteur);
        }

        $manager->flush();
    }

    public static function getGroups(): array
     {
        return ['group1'];
     }
}