<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Entity\Images;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // Creer 3 Categories de Fake

        $faker = Faker\Factory::create('fr_FR');

        // Créer des occurences des auteurs
        for ($k = 0; $k < 4; $k++) {
            $auteur = new Auteur();
            $auteur->setNoms($faker->lastName())
                ->setPrenoms($faker->firstName())
                ->setAge($faker->numberBetween(18, 90))
                ->setEmail($faker->safeEmail());
            $manager->persist($auteur);

            // Creer occurence de 10 Categories
            for ($i = 0; $i < 4; $i++) {
                $categorie = new Categorie();
                $categorie->setTitre($faker->sentence(5))
                    ->setResume($faker->sentence(10));
                $manager->persist($categorie);

                // Creer occurence de 10 articles par Categorie
                for ($j = 0; $j <= 5; $j++) {
                    $article = new Article();
                    $article->setTitre($faker->sentence(2))
                        ->setCategorie($categorie)
                        ->setAuteur($auteur)
                        ->setCreatedAt($faker->dateTimeBetween('1990-01-01', '2012-12-31'))
                        ->setResume($faker->paragraph(3))
                        ->setContenu($faker->paragraph(5))
                        ->setPrix($faker->randomDigit())
                        ->setLocalite($faker->city())
                        ->setDisponibilite($faker->numberBetween(0, 10))
                        ->setUne($faker->boolean());
                    //->setCommentaires($faker->text(50));

                    for ($image = 1; $image <= 3; $image++) {
                        // $img = $faker->image('public/uploads/images');

                        $nomImg = "image.png";
                        $imageArticle = new Images();
                        $imageArticle->setName($nomImg);
                        $article->addImage($imageArticle);

                        $manager->persist($article);

                        // Creons des commentaires pour les articles
                        for ($l = 1; $l <= mt_rand(4, 5); $l++) {
                            $commentaire = new Commentaire();
                            $days = (new \DateTime());
                            //     $minimum = '-'.$days.'days';

                            $commentaire->setAuteur($faker->name())
                                ->setContenu($faker->realText($maxNbChars = 200, $indexSize = 2))
                                ->setArticle($article);
                            $manager->persist($commentaire);
                        }}
                }
            }
        }
        $manager->flush();
    }

}
