<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use App\Form\UtilisateurType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager;
//use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\Cast\String_;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class UtilisateurController extends AbstractController
{
    #[Route('/utilisateur', name: 'utilisateur_index')]
    public function index(): Response
    {
        $UtilisateurRepository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateur = $UtilisateurRepository->findAll();
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
            'utilisateurs' => $utilisateur,
        ]);
    }

    #[Route('/utilisateur-nameAsc', name: 'utilisateur.lname.asc')]
    public function indexASC(): Response
    {
        $UtilisateurRepository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateur = $UtilisateurRepository->findBy(array(), array('noms' => 'ASC'));
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
            'utilisateurs' => $utilisateur,
        ]);
    }

    #[Route('/utilisateur-fnameAsc', name: 'utilisateur.fname.asc')]
    public function fNameASC(): Response
    {
        $UtilisateurRepository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateur = $UtilisateurRepository->findBy(array(), array('prenoms' => 'ASC'));
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
            'utilisateurs' => $utilisateur,
        ]);
    }

    #[Route('/utilisateur-dateAsc', name: 'utilisateur.date.asc')]
    public function dateASC(): Response
    {
        $UtilisateurRepository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $utilisateur = $UtilisateurRepository->findBy(array(), array('datenaiss' => 'DESC'));
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
            'utilisateurs' => $utilisateur,
        ]);
    }
    

    #[Route('/utilisateur/nouv', name: 'utilisateur.nouv')]
    public function nouvelUtilisateur(Request $request, EntityManagerInterface $manager)
    {
        $utilisateur = new Utilisateur(); // article vide pret à etre rempli
        $form = $this->createForm(UtilisateurType::class, $utilisateur);  // Creation du Form qui est lié à mon article

        $form->handleRequest($request);         // Le Request

        if ($form->isSubMitted() && $form->isValid()) // Soumission du Formulaire & le Formulaire est valide
        {
            $manager->persist($utilisateur); // Persistancede mon article
            $manager->flush(); // Enregistrement de l'article dans la BD 
            return $this->redirectToRoute('utilisateur_affiche', ['id' => $utilisateur->getId()]); // Redirection vers l'article
        }

        return $this->render('utilisateur/nouveau.html.twig', [
            'formUtilisateur' => $form->createView()
        ]); // On ne va pas passer à Twig $form parce que tres lourd et difficile 
        //On passe ici à twig une variable facile à Afficher
        // Twig va donc avoir le resultat de la Function CreateView du formulaire. C'est l'asspect Affichage que nou spassons au formulaire
    }

    /** 
     * @Route("utilisateur/{id}/edit", name="utilisateur.edit" )
     */
    public function editUlisateur(Utilisateur $utilisateur, Request $request, EntityManagerInterface $manager)
    {
        //$utilisateur = new Utilisateur(); // article vide pret à etre rempli
        $form = $this->createFormBuilder($utilisateur)  // Creation du Form qui est lié à mon article
            //$form = $this->createForm(ArticleType::class, $article);
            // Creer 1 formulaire lié à mon article;
            // utilisons la fonction ADD qui permet d'ajouter des champs au formulaire
            ->add('noms')
            ->add('prenoms')
            ->add('datenaiss')
            ->add('adresse')
            ->add('photo')
            ->add('email')
            ->getForm();                        // Demande de resultat Final

        $form->handleRequest($request);         // Le Request

        if ($form->isSubMitted() && $form->isValid()) // Soumission du Formulaire & le Formulaire est valide
        {
            $manager->persist($utilisateur); // Persistancede mon article
            $manager->flush(); // Enregistrement de l'article dans la BD 
            return $this->redirectToRoute('utilisateur_affiche', ['id' => $utilisateur->getId()]); // Redirection vers l'article
        }

        return $this->render('utilisateur/edition.html.twig', [
            'formUtilisateur' => $form->createView()
        ]); // On ne va pas passer à Twig $form parce que tres lourd et difficile 
        //On passe ici à twig une variable facile à Afficher
        // Twig va donc avoir le resultat de la Function CreateView du formulaire. C'est l'asspect Affichage que nou spassons au formulaire
    }

    #[Route('/utilisateur/{id}', name: 'utilisateur_affiche')]
    public function affichage(Utilisateur $utilisateur): Response
    {
        //$UtilisateurRepository = $this->getDoctrine()->getRepository(Utilisateur::class);
        //$utilisateur = $UtilisateurRepository->findAll();
        return $this->render('utilisateur/affichage.html.twig', [
            'controller_name' => 'UtilisateurController',
            'utilisateur' => $utilisateur
        ]);
    }

    
    # Afficher les Utilisateurss entre une tranche d'age
     #[Route('/utilisateur2', name: 'utilisateur_affiche2')]
    public function listAgeBetween(Request $request, UtilisateurRepository $utilisateurs)
    {
        $utilisateurs = $utilisateurs->rechUtilAge(16/07/2007, 01/07/2020);

    return $this->render('utilisateur/index2.html.twig', [
           'utilisateurs' => $utilisateurs,
        ]);
    }
}