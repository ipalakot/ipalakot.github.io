<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
public function index()
    {
        return new Response("BINEVENUE SUR CE PORTAIL");
    }


public function liste(Request $request)
    {

        return new Response("TOUS NOS ARTICLES ! ");


    }

    /**
     * @Route("/liste/{liste}", name="authors_index", methods={"GET"})
     */
    public function listen(Request $request)
    {
        // dd("Tous les Articles");
        // //die(); 
        //dd($request);
        $liste = $request ->attributes->get('liste');
    // return new Response("Vous êtes le N° $liste / de la liste! ");
    return $this->render('promotion/index.html.twig', [
        "liste" => $liste,
    ]);
     }

public function article(Request $request, $article)
    {
       // $liste = $request ->attributes->get('liste'); // Cette partie va sauter
        return new Response("Details N° $article ! ");
    }

public function connexion()
    {
        dd("se connecter");
        //die(); 
    }

public function deconnexion()
    {
        dd("se déconnecter");
        //die(); 
    }

public function name(Request $request): Response
    {
        $greet = '';
        if ($name = $request->query->get('hello')) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response($greet);
    }

public function name2(string $name = ''): Response
    {
        $greet = '';
        if ($name = $request->query->get('hello')) {
        if ($name) {
             $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
    }
}
}