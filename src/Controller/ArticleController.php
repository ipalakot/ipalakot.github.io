<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Article;
use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\CategorieRech;
use App\Entity\Commentaire;
use App\Entity\Images;
use App\Entity\PrixRecherche;
use App\Entity\PropertySearch;
use App\Form\ArticleType;
use App\Form\CategorieRechType;
use App\Form\CommentaireType;
use App\Form\PrixRechercheType;
use App\Form\PropertySearchType;
use App\Form\SearchForm;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    public function home(Request $request)
    {
        $propertySearch = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $propertySearch);
        $form->handleRequest($request);

        # Tableau des articles vide,
        $articles = [];

        if ($form->isSubmitted() && $form->isValid()) {

            # recupération des titres d'article saisis par l'utilisateur
            $titre = $propertySearch->getTitre();
            if ($titre != "")

            #Affichage des articles ayant ce titre
            {
                $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(['titre' => $titre]);
            } else
            # Lorsqu'il y pas de titre fourni, lister tous les articles
            {
                $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
            }

        }
        return $this->render('article/articlesParTitre.html.twig', [
            'form' => $form->createView(),
            'articles' => $articles]);
    }

    # findAll()
    #[Route('/article', name: 'article_index')]
    public function index(Request $request, ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $articles,
        ]);
    }

    /**
     * find() / find($id)
     * Afficher 1 Article à partir de son ID
     * @Route("/articleaffid/{id}", name="article_find")
     * @param [type] $id
     * @param ArticleRepository $articleRepository
     * @return Response
     */
    public function affichByID($id, ArticleRepository $artrepo)
    {
        $articles = $artrepo->find($id);
        return $this->render('article/affichagefind.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * findBy()
     * Afficher tous les Article avec des critères
     * @Route("/affichageByFindBy", name="app_article_All", methods={"GET"})
     * @return Response
     */
    public function affichageByFindBy(Request $request, ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findBy(
            ["titre" => 'Tout JavaScript - 3e édition'],
            ['id' => 'ASC']
        );

        return $this->render('article/affichagefindby.html.twig', [

            'articles' => $articles,
        ]);
    }

    /**
     * findOneBy()
     * Afficher 1 Article à partir de son Titre
     * @Route("/articleaffindOne/test", name="app_article_affichage3")
     * @param ArticleRepository $articleRepository
     * @return Response
     */
    public function getArticleTitle(ArticleRepository $artrepo)
    {
        $articles = $artrepo->findOneBy(array('titre' => 'programmation'));
        return $this->render('article/affichageoneby.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * findBy$Valeur
     * @Route("/articlefbc", name="article_findBy")
     * @param ArticleRepository $articleRepository
     * @return Response
     */
    public function articlefbc(ArticleRepository $artrepo)
    {
        $articles = $artrepo->findByTitre(array('tprogrammation'));
        return $this->render('article/aarticlefbc.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/article/nouveau', name: 'article.nouveau')]
    public function nouvelArticle(Request $request, EntityManagerInterface $manager)
    {
        $article = new Article();

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubMitted() && $form->isValid()) {
            //$article->setDate(new \DateTime()); // Création de la date de l'article

            # Gestion des images pour un article
            # Je récupère les images transmises depuis le formulaire à travers 1 articles et je vais chercher les données(getData)
            $images = $form->get('images')->getData();

            // On boucle sur les images (lorsque j'ai plusieurs images)
            foreach ($images as $image) {

                # On génère un nouveau nom de fichier pour eviter que 2 fichiers aient le meme nom
                $fichier = md5(uniqid()) . '.' . $image->guessExtension(); // guessExtension recupère l'extension du fichier

                # On passe le fichier dans le dossier uploads
                # Stockage de l'image sur le disque (l'image physique)
                $image->move(
                    $this->getParameter('images_directory'), // n'oublie le parametrage au niveau de Services.yaml
                    $fichier
                );

                # On va alors stocker (le nomde l'image) dans la base de données
                $img = new Images();
                $img->setName($fichier);
                $article->addImage($img);
            }
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('article.affichage', ['id' => $article->getId()]); // Redirection vers l'article
        }
        return $this->render('article/nouveau.html.twig', [
            'formArticle' => $form->createView(),
        ]);
    }

    /*public function upload( KernelInterface $kernel): Response
    {

    $imagesDir = $kernel->getProjectDir().'/public/uploads/images'; // equivalent à $this->getParameter('images_directory')
    dump($imagesDir) ;
    return $this->render(...);
    }*/

    /**
     * @Route("article/{id}/edit", name="article.edit" )
     */
    public function articleEditer(Article $article, Request $request, EntityManagerInterface $manager)
    {
        $form = $this->createFormBuilder($article)
            ->add('titre')
            ->add('categorie', EntityType::class, [
                'label' => 'Categorie',
                'placeholder' => 'Categorie',
                'class' => Categorie::class,
                'choice_label' => 'titre',
            ])
            ->add('auteur', EntityType::class, [
                'label' => 'Auteur',
                'placeholder' => 'Auteur',
                'class' => Auteur::class,
                'choice_label' => 'noms'])
            ->add('resume')
            ->add('contenu')
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubMitted() && $form->isValid()) {
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/edition.html.twig', [
            'formArticle' => $form->createView(),
        ]);
    }

    /**
     * @Route("/supprime/image/{id}", name="annonces_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        // On vérifie si le token est valide
        if ($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])) {
            // On récupère le nom de l'image
            $nom = $image->getName();
            // On supprime le fichier
            unlink($this->getParameter('images_directory') . '/' . $nom);

            // On supprime l'entrée de la base
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            // On répond en json
            return new JsonResponse(['success' => 1]);
        } else {
            return new JsonResponse(['error' => 'Token Invalide'], 400);
        }
    }

    // Affichage d'un seul article
    //Affichage des commentaires liés à cet article,
    #[Route('/article/{id}', name: 'article.affichage')]
    public function affichage(Request $request, Article $article, EntityManagerInterface $manager): Response
    {
        $commentaire = new Commentaire();
        $commentaireForm = $this->createForm(CommentaireType::class, $commentaire);

        $commentaireForm->handleRequest($request);

        if ($commentaireForm->isSubmitted() && $commentaireForm->isValid()) {
            //$commentaire->setDate(new \DateTime())
            $commentaire->setArticle($article);
            $manager->persist($commentaire);
            $manager->flush();

            return $this->redirectToRoute('article.affichage', [
                'id' => $article->getId(),
            ]);
        }

        return $this->render('article/affichage.html.twig', [
            'article' => $article,
            'commentaireForm' => $commentaireForm->createView(),
        ]);
    }

    # Afficher les articles / Titre ASC
    #[Route('/article-titreAsc', name: 'article.titre.asc')]
    public function indexTitreASC(): Response
    {
        $articleRepository = $this->getDoctrine()->getRepository(article::class);
        $article = $articleRepository->findBy(array(), array('titre' => 'ASC'));
        return $this->render('article/index.html.twig', [
            'controller_name' => 'articleController',
            'articles' => $article,
        ]);
    }

    # Afficher les articles / Categorie DESC
    #[Route('/article-categorieAsc', name: 'article.categorie.asc')]
    public function indexCategorieASC(): Response
    {
        $articleRepository = $this->getDoctrine()->getRepository(article::class);
        $article = $articleRepository->findBy(array(), array('categorie' => 'DESC'));
        return $this->render('article/index.html.twig', [
            'controller_name' => 'articleController',
            'articles' => $article,
        ]);
    }

    # Afficher les articles / Auteurs DESC
    #[Route('/article-auteurAsc', name: 'article.auteur.asc')]
    public function indexAuteurASC(ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->findBy(array(), array('auteur' => 'ASC'));
        return $this->render('article/index.html.twig', [
            'controller_name' => 'articleController',
            'articles' => $article,
        ]);
    }

    # Afficher les articles / Date DESC
    #[Route('/article-dateAsc', name: 'article.date.asc')]
    public function indexDateASC(ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->findBy(array(), array('createdAt' => 'ASC'));
        return $this->render('article/index.html.twig', [
            'controller_name' => 'articleController',
            'articles' => $article,
        ]);
    }

    # Affiche des articles par Prix [Max & Min]
    #[Route('/articles-prix', name: 'article.rech.prix', methods: ['GET', 'POST'])]

    public function articlesParPrix(Request $request)
    {

        $prixRecherche = new PrixRecherche();
        $form = $this->createForm(PrixRechercheType::class, $prixRecherche);
        $form->handleRequest($request);

        $articles = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $minPrix = $prixRecherche->getMinPrix();
            $maxPrix = $prixRecherche->getMaxPrix();

            $articles = $this->getDoctrine()->getRepository(Article::class)->findByPrixRange($minPrix, $maxPrix);
        }

        return $this->render('article/articlesPrix.html.twig', [
            'form' => $form->createView(),
            'articles' => $articles]);
    }

    //Affichage des articles par categorie
    #[Route('/articles-categories', name: 'article.categories', methods: ['GET', 'POST'])]
    public function articlesParCategorie(Request $request)
    {
        $categorieRech = new CategorieRech();
        $form = $this->createForm(CategorieRechType::class, $categorieRech);
        $form->handleRequest($request);

        $articles = [];

        if ($form->isSubmitted() && $form->isValid()) {
            $categorie = $categorieRech->getCategorie();

            if ($categorie != "") {

                $articles = $categorie->getArticles();
                // ou bien
                //$articles= $this->getDoctrine()->getRepository(Article::class)->findBy(['categorie' => $categorie] );
            } else {
                $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();
            }

        }

        return $this->render('article/articleCategories.html.twig', [
            'form' => $form->createView(),
            'articles' => $articles]);
    }

    # Afficher les articles de la Categorie Sport
    #[Route('/article-categorie-sport', name: 'article.categorie.sport')]
    public function indexArticlesgategorie(ArticleRepository $articleRepository, Request $request)
    {
        $articles = $articleRepository->findByCategorieSport();
        // Appel de la page pour affichage
        return $this->render('article/index.html.twig', [
            // passage du contenu de $location
            'articles' => $articles,
        ]);
    }

    # Afficher les articles de la  Categorie Jouets
    #[Route('/article-categorie-jouets', name: 'article.categorie.jouets')]
    public function indexArticlescategorie_jouets(ArticleRepository $articleRepository, Request $request)
    {
        $articles = $articleRepository->findByCategorieJouets();
        // Appel de la page pour affichage
        return $this->render('article/index.html.twig', [
            // passage du contenu de $location
            'articles' => $articles,
        ]);
    }

    # Afficher les articles de la categorie informatique
    #[Route('/article-categorie-informatique', name: 'article.categorie.informatique')]
    public function indexArticlescategorie_informatique(ArticleRepository $articleRepository, Request $request)
    {
        $articles = $articleRepository->findByCategorieinformatique();
        // Appel de la page pour affichage
        return $this->render('article/index.html.twig', [
            // passage du contenu de $location
            'articles' => $articles,
        ]);
    }

    # Afficher les articles de la categorie electromenager
    #[Route('/article-categorie-electromenager', name: 'article.categorie.electromenager')]
    public function indexArticlescategorie_Electromenager(ArticleRepository $articleRepository, Request $request)
    {
        $articles = $articleRepository->findByCategorielectrom();
        // Appel de la page pour affichage
        return $this->render('article/index.html.twig', [
            // passage du contenu de $location
            'articles' => $articles,
        ]);
    }

    # Afficher les articles de la  Categorie Meubles
    #[Route('/article-categorie-meubles', name: 'article.categorie.meubles')]
    public function indexArticlescategorie_meubles(ArticleRepository $articleRepository, Request $request)
    {
        $articles = $articleRepository->findByCategorieMeubles();
        // Appel de la page pour affichage
        return $this->render('article/index.html.twig', [
            // passage du contenu de $location
            'articles' => $articles,
        ]);
    }

    //Affichage des articles par categorie & prix
    #[Route('/articles-categories-prix', name: 'article.categories.price', methods: ['GET', 'POST'])]
    public function articlesParCategoriePrix(Request $request, ArticleRepository $repository)
    {
        $data = new SearchData();

        $form = $this->createForm(SearchForm::class, $data);

        $articles = $repository->findSearch($data);

        // Appel de la page pour affichage
        return $this->render('article/index.html.twig', [
            // passage du contenu de $location
            'articles' => $articles,
            'form' => $form->createView(),
        ]);
    }

}
