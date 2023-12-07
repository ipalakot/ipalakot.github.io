<?php

namespace App\Tests\Entity;

use App\Entity\Article;
use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Commentaire;

use dateTime;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ArticleUnitTest extends KernelTestCase
{
    public function testEntityValide(): void
    {
        $auteur = new Auteur();
        $categorie = new Categorie();
        $dateTime = New DateTime();
        
        $article = new Article();
                    
        $article->setTitre('Titre de larticle')
                // ->setImageName('imageName')
                 ->setResume('resume')
                 ->setContenu('contenu') 
                 ->setCreatedAt($dateTime)
                 ->setCategorie($categorie)
                 ->setAuteur($auteur)
                 ->setPrix('1222') 
                 ->setLocalite('region') 
                 ->setDisponibilite('1') 
                 ->setUne('0');

        $this->assertTrue($article->getTitre()==='Titre de larticle');
        $this->assertTrue($article->getResume()==='resume');
        $this->assertTrue($article->getContenu()==='contenu'); 
        $this->assertFalse($article->getPrix()==='1222');
        $this->assertTrue($article->getLocalite()==='region');
        $this->assertFalse($article->getDisponibilite()==='1'); 
        $this->assertFalse($article->isUne()==='0'); 
        $this->assertTrue($article->getCreatedAt()===$dateTime);
        $this->assertTrue($article->getCategorie()===$categorie);
        $this->assertTrue($article->getAuteur()===$auteur);
    }

    public function testAddCommentaire(){
      $article = new Article();
      $commentaire = new Commentaire();

      $this->assertEmpty($article->getCommentaires());

      $article->addCommentaire($commentaire);
      $this->assertContains($commentaire, $article->getCommentaires());

      $article->RemoveCommentaire($commentaire);
      $this->assertEmpty($article->getCommentaires());

  }
    
}