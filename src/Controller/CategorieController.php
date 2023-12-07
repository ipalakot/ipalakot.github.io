<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Form\CategorieType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'categorie_index')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }


    
    #[Route('/categorie/nouveau', name: 'categorie.nouveau')]
    public function nouvelleCategorie(Request $request, EntityManagerInterface $manager)
    {
        $categorie = new Categorie; 
        $form = $this->createForm(CategorieType::class, $categorie);                     
        $form->handleRequest($request);         
        if ($form->isSubMitted() && $form->isValid()) 
        {
            $manager->persist($categorie); 
            $manager->flush(); 
           return $this->redirectToRoute('categorie.affichage', ['id' => $categorie->getId()]); // Redirection vers l'article
        }
        return $this->render('categorie/nouveau.html.twig', [
            'formCategorie' => $form->createView()
        ]); 
    }

    
    #[Route('/categorie/{id}', name: 'categorie.affichage')]
    public function affichage(Categorie $categorie): Response
    {
        return $this->render('categorie/affichage.html.twig', [
            'categorie' => $categorie
        ]);
    }
}
