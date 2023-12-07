<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;


use Faker; 
use Faker\Factory;

class UtilisateurFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        
        for ($i=0; $i <=100 ; $i++) {
        
        // $product = new Product();
        $utilisateur = New Utilisateur();

        $utilisateur -> setNoms($faker->lastname())
                    -> setPrenoms($faker->firstname())
                    -> setUsername($faker->username())
                    -> setPhoto($faker->image(null, 360, 360, 'animals', true))
                    -> setDatenaiss($faker->dateTimeBetween('1990-01-01', '2012-12-31'))
                    -> setNationalite($faker->country())
                    -> setAdresse($faker->address())
                    -> setEmail($faker->email());
       
        // $manager->persist($product);
         $manager->persist($utilisateur);
    }
    $manager->flush();
}

public static function getGroups(): array
    {
         return ['group3'];
     }

}