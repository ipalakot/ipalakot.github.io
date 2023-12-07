<?php

namespace App\Controller;
use App\Entity\Auteur;
use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Entity\PropertySearch;

use App\Form\PropertySearchType;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DefaultController extends AbstractController
{
    
    
    
    public function index(Request $request, ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository ->findAll();
        
        return $this->render('default/index.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $articles
        ]);
    }

    

    
    
    public function aboutus(): Response
    {
        return $this->render('default/about.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}