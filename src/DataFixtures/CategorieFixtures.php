<?php

namespace App\DataFixtures;
use App\Entity\Categorie;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

use Faker; 
use Faker\Factory;

/** 
 * @codeCoverageIgnore
 * 
*/
class CategorieFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
// $product = new Product();
        // $manager->persist($product);

            $faker = Faker\Factory::create('fr_FR');
            
            for ($i = 0; $i < 10; $i++) 
            {
                $categorie = new Categorie();

                $categorie->setTitre($faker->sentence(5))
                           ->setResume($faker->sentence(10));

                $manager->persist($categorie);
            }
            $manager->flush();
    }
    public static function getGroups(): array
     {
        return ['group2'];
     }
}