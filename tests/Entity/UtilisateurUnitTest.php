<?php
namespace App\Tests;

use App\Entity\utilisateur;
use App\Entity\Utilisateur as EntityUtilisateur;
use PHPUnit\Framework\TestCase;

class UtilisateurUnitTest extends TestCase

{
        public function testValide(): void
        {
            $utilisateur = new EntityUtilisateur();
            $utilisateur->setNoms('toto')
                                ->setPrenoms('tata')
                                ->setUsername('tototata') 
                                -> setPhoto("photo")
                               // -> setDatenaiss(new \DateTime())
                                -> setNationalite('usparis')
                                ->setAdresse('Rue Chastenet de Gery')
                                ->setEmail('dwwm2@mail.com') ;  
                    
                $this->assertTrue($utilisateur->getNoms()==='toto');
                $this->assertTrue($utilisateur->getPrenoms()==='tata');
                $this->assertTrue($utilisateur->getUsername()==='tototata');
                $this->assertTrue($utilisateur->getPhoto()==='photo');
                //$this->assertTrue($utilisateur->getDatenaiss()===(''));
                $this->assertTrue($utilisateur->getNationalite()==='usparis');
                $this->assertTrue($utilisateur->getAdresse()==='Rue Chastenet de Gery');
                $this->assertTrue($utilisateur->getEmail()==='dwwm2@mail.com');
    }


            public function testNonValide(): void
        {
            $utilisateur = new EntityUtilisateur();
            $utilisateur->setNoms('toto')
                                ->setPrenoms('Marwann')
                                ->setUsername('Sekkai') 
                                -> setPhoto("photo")
                               // -> setDatenaiss(new \DateTime())
                                -> setNationalite('French')
                                ->setAdresse('Rue Chastenet de Gery')
                                ->setEmail('msekkai@mail.com') ;  
                    
                $this->assertFalse($utilisateur->getNoms()==='azerty');
                $this->assertFalse($utilisateur->getPrenoms()==='tata');
                $this->assertFalse($utilisateur->getUsername()==='tototata');
                $this->assertFalse($utilisateur->getPhoto()==='image');
                //$this->assertFalse($utilisateur->getDatenaiss()===(''));
                $this->assertFalse($utilisateur->getNationalite()==='usparis');
                $this->assertFalse($utilisateur->getAdresse()==='235 Rue Chastenet de Gery');
                $this->assertFalse($utilisateur->getEmail()==='dwwm2@mail.com');
    }

      public function testVide(): void
    {
        //$dateTime = New DateTime();
        
        $utilisateur = new utilisateur();

        $this->assertEmpty($utilisateur->getId());
        $this->assertEmpty($utilisateur->getNoms());
        $this->assertEmpty($utilisateur->getPrenoms());
        $this->assertEmpty($utilisateur->getUsername());
        $this->assertEmpty($utilisateur->getPhoto());
        $this->assertEmpty($utilisateur->getDatenaiss());
        $this->assertEmpty($utilisateur->getAdresse());
        $this->assertEmpty($utilisateur->getNationalite());
        $this->assertEmpty($utilisateur->getEmail());
    }

}
              