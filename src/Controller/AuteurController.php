<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Repository\AuteurRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class AuteurController extends AbstractController
{
    #[Route('/auteur', name: 'auteur_index')]
    public function index(AuteurRepository $auteurRepository): Response
    {
        return $this->render('auteur/index.html.twig', [
            'auteurs' => $auteurRepository->findAll(),
        ]);
    }

   
    #[Route('/auteur/nouveau', name: 'auteur.nouveau')]
    public function nouvelAuteur(Request $request, EntityManagerInterface $manager)
    {
        $auteur = new Auteur(); 
        $form = $this->createFormBuilder($auteur)  
            ->add('noms')
            ->add('prenoms')
            ->add('email')

            ->getForm();                       
        $form->handleRequest($request);         
        if ($form->isSubMitted() && $form->isValid()) 
        {
            $manager->persist($auteur); 
            $manager->flush(); 
            return $this->redirectToRoute('auteur.affichage', ['id' => $auteur->getId()]); // Redirection vers l'article
        }
        return $this->render('auteur/nouveau.html.twig', [
            'formAuteur' => $form->createView()
        ]); 
    }

    #[Route('/auteur/{id}', name: 'auteur.affichage')]
    public function affichage(Auteur $auteur): Response
    {
        return $this->render('auteur/affichage.html.twig', [
            'auteur' => $auteur
        ]);
    }
    

}
