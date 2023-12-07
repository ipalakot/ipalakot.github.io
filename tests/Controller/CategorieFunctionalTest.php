<?php

namespace App\Tests\Controller;

use App\Entity\Categorie;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class CategorieFunctionalTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/categorie');
        $this->assertResponseIsSuccessful();
       // $this->assertSelectorTextContains('h1', 'Hello World');
    }






}
