<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class UtilisateurFunctionalTest extends WebTestCase
{
    /**
     * Utilisateur / Liste
     *
     * @return void
     */
    public function testIndexUtilisateur(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateur');

        $this->assertResponseIsSuccessful();
    //  $this->assertSelectorTextContains('h1', 'Hello World');
    }


    /**
     * Utilisateur / utilisateur-nameAsc
     *
     * @return void
     */
    public function indexASC(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateur-nameAsc');

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    //  $this->assertSelectorTextContains('h1', 'Hello World');
    }

}