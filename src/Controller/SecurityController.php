<?php

namespace App\Controller;

use App\Entity\User;

use App\Form\RegistrationType;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    #[Route('/security', name: 'app_security')]
    public function index(): Response
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
  * @Route("/registration", name="security_registration")
 */
   
public function registration(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
{
    $user= new User();
    $form = $this->createForm(RegistrationType::class, $user);

    $form->handleRequest($request);
   
    if ($form->isSubmitted() && $form->isValid()){

        $hash = $encoder->encodePassword($user, $user->getPassword());

       $user->setPassword($hash);

       $manager->persist($user);
       $manager->flush();

       return $this->RedirectToRoute('security-login');

    }

      
    return $this->render('security/registration.html.twig', [
        'form' => $form->createView()
    ]);
}

#[Route('/login', name:'security-login')]
public function login(){
    
    return $this->render('security/login.html.twig');
}

#[Route('/logout', name:'security-logout')]
public function logout(){
    
}

}
