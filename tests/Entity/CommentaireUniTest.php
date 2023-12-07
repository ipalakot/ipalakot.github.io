<?php

namespace App\Tests\Entity;

use App\Entity\Commentaire;
use App\Entity\Article;

use DateTime;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CommentaireUniTest extends KernelTestCase
{
    public function testSomething(): void
    {
        $kernel = self::bootKernel();

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

     public function testCommentaireValide(): void
    {
        $dateTime = new DateTime();
        $artcile = new Article();
        

        $commentaire = new Commentaire();

        $commentaire->setAuteur('Nom_Auteur')
                    ->setContenu('Contenu')
                    ->setArticle($artcile);
        $this->assertTrue($commentaire->getAuteur()==='Nom_Auteur');
        $this->assertTrue($commentaire->getContenu()==='Contenu');
        $this->assertTrue($commentaire->getArticle()===$artcile);
    }

    public function testCommentaireFals(): void
    {
        $dateTime = new DateTime();
        $artcle = new Article();
        $commentaire = new Commentaire();

        $commentaire->setAuteur('Nom_Auteur')
                    ->setContenu('Contenu')
                    ->setArticle($artcle);

        $this->assertFalse($commentaire->getAuteur() !=='Nom_Auteur');
        $this->assertFalse($commentaire->getContenu() !=='Contenu');
        $this->assertFalse($commentaire->getArticle() !== $artcle);
    }

    public function testCommentairevide(): void
    {
        $dateTime = new DateTime();
        $artcle = new Article();
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getArticle());
         $this->assertEmpty($commentaire->getId());
    }
}