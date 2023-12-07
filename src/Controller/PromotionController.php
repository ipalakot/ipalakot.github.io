<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController extends AbstractController
{
    
     //#[Route('/promotion', name: 'app_promotion')]
    public function index(Request $request, $test): Response
    {
        $test = 2555;
        return $this->render('promotion/index.html.twig', [
            'controller_name' => 'PromotionController',
            'test'=>$test

        ]);
    }

    public function test(Request $request, $promotion): Response
    {
       //return new Response("Bonjour, vous êtes de la promotion  $promotion ! "); 
       $promotion= 2023;
       return $this->render('test/index.html.twig', [
        'promotion'=>$promotion,        
    ]);
    }



     /**
     * @Route("/exercices", name="app_exos", methods={"GET", "POST"})
     */ 

    public function exos(): Response
    {
        return $this->render('exos/index.html.twig', [
            //'controller_name' => 'PromotionController',
            //'age'=> $age
        ]);
    }

     /**
     * @Route("/promotion/{promotion<\d+>?0>}", name="app_promotion", methods={"GET", "POST"})

     */
    public function promotion2(Request $request, $promotion): Response
    {
       //return new Response("Bonjour, vous êtes de la promotion  $promotion ! "); 
       return $this->render('promotion/index.html.twig', [
        
    ]);
    }

        /**
         * Hello world, avec Twig cette fois :)
         *
         * @Route("/show/{name}", name="hello")
         */
        public function hello($name)
        {
            $this->render('promotion/show.html.twig', ['name' => $name]);
        }

}
