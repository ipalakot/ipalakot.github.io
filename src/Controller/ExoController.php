<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExoController extends AbstractController
{
    /*
    #[Route('/', name: 'app_exo')]
    public function index(): Response
    {
        return $this->render('exo/index.html.twig', [
            'controller_name' => 'ExoController',
        ]);
    }*/

// Utilisation de la commande {{ }} / {% %} / {# #}
    #[Route('/commande', name: 'app_exocom')]
       public function affichage(): Response
    {
        return $this->render('exo/1_affichage.html.twig', [
            'controller_name' => 'ExoController',
        ]);
    }

// Afichage avec des filtre
    #[Route('/filtre', name: 'app_exofilt')]
    public function affichagefiltre(): Response
    {
        return $this->render('exo/1_affichage_filtre.html.twig', [
            'controller_name' => 'ExoController',
        ]);
    }

//  Les variables
    #[Route('/variables', name: 'app_exovar')]
    public function affichagetable(): Response
    {
        return $this->render('exo/2.variables.html.twig', [
            'controller_name' => 'ExoController',
        ]);
    }

//  Les Condiations
#[Route('/conditions', name: 'app_conditions')]
public function condito(): Response
{
    return $this->render('exo/3.conditions.html.twig', [
        'controller_name' => 'ExoController',
    ]);
}

//  Les Boucles

#[Route('/boucl', name: 'app_boucl')]
public function boucles(): Response
{
    return $this->render('exo/4.boucles.html.twig', [
        'controller_name' => 'ExoController',
    ]);
}

//  Les Filtres
#[Route('/filstre2', name: 'app_boucles')]
public function filtre2(): Response
{
    return $this->render('exo/5.filtres2.html.twig', [
        'controller_name' => 'ExoController',
    ]);
}

    
}