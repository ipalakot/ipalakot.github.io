<?php

namespace App\Tests\Entity;

use App\Entity\Categorie;
use App\Entity\Article;


use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CategorieUnitTest extends KernelTestCase
{
    public function testSomething(): void
    {
        $kernel = self::bootKernel();

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testIsTrue() // je fais à VRAI
    {

        $categorie = New Categorie();
        
        $categorie ->setTitre('Titre de la categorie')
                    ->setResume('Le resume de la categorie');         
        $this->assertTrue($categorie->getTitre()==='Titre de la categorie');
        $this->assertTrue($categorie->getResume()==='Le resume de la categorie');            
    }

     public function testIsEmpty()
    {
        $categorie = new Categorie();
        $this->assertEmpty($categorie->getTitre());
        $this->assertEmpty($categorie->getResume() );
        $this->assertEmpty($categorie->getId());
    }
     public function testAddremoveSetArticle(){

        $categorie = new Categorie();
        $article = new Article();

        $this->assertEmpty($categorie->getArticles());

        $categorie->addArticle($article);
        $this->assertContains($article, $categorie->getArticles());

        $categorie->removeArticle($article);
        $this->assertEmpty($categorie->getArticles());
        
     }
    
}