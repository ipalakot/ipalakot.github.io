<?php

namespace App\Tests\Entity;

use App\Entity\Auteur;
use App\Entity\Article;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AuteurUnitTest extends KernelTestCase
{
    public function testSomething(): void
    {
        $kernel = self::bootKernel();

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

     public function testAuteurValid(): void
    {
        $auteur = new Auteur();
        $article = new Article();

        $auteur->setNoms('noms')
                ->setPrenoms('prenoms')
                ->setEmail('iplkt@mail.com')
                ->setAge(55);          
        $this->assertTrue($auteur->getNoms()==='noms');
        $this->assertTrue($auteur->getPrenoms()==='prenoms');
        $this->assertTrue($auteur->getEmail()==='iplkt@mail.com');
        $this->assertTrue($auteur->getAge()===55);
    }

    public function testAuteurFalse(): void
    {
        $auteur = new Auteur();
        $article = new Article();

        $auteur->setNoms('noms')
                ->setPrenoms('prenoms');
                     
        $this->assertFalse($auteur->getNoms()!=='noms');
        $this->assertFalse($auteur->getPrenoms()!=='prenoms');
    }

    public function testAuteurVide(): void
    {
        $auteur = new Auteur();
        $this->assertEmpty($auteur->getNoms());
        $this->assertEmpty($auteur->getPrenoms());
        $this->assertEmpty($auteur->getId());
        
    }

    public function testAddremoveSetarticle()
    {        
        $auteur = new Auteur();
        $article = new Article();

        $this->assertEmpty($auteur-> getArticles());

        $auteur->addArticle($article);
        $this->assertContains($article, $auteur-> getArticles());

        $auteur->removeArticle($article);
        $this->assertEmpty($auteur-> getArticles());
    }

    
}