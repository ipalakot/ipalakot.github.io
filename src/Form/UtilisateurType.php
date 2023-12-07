<?php

namespace App\Form;

use App\Entity\Utilisateur;
    
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;


class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('noms')
            ->add('prenoms')
            ->add('username')
            ->add('imageFile', VichImageType::class)
            ->add('datenaiss',
                   DateType::class, 
                ['label'=> 'Date'])
            ->add('adresse')
            ->add('photo')
            ->add('email')
            ->add('nationalite')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
