<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Auteur;
use App\Entity\Images;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')

            ->add('categorie', EntityType::class, [
                // Label du champ    
                'label'  => 'Categorie',
                'placeholder' => 'Categorie',
        
                // looks for choices from this entity
                'class' => Categorie::class,
            
                // Sur quelle propriete je fais le choix
                'choice_label' => 'titre',
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                //'expanded' => true,
            ])
            ->add('auteur', EntityType::class, [
                // Label du champ    
                'label'  => 'Auteur',
                'placeholder' => 'Auteur',
        
                // looks for choices from this entity
                'class' => Auteur::class,
            
                // Sur quelle propriete je fais le choix
                'choice_label' => 'noms',
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                //'expanded' => true,
            ])
            # Ajout du champ "images" dans le formulaire
            # ce champs n'est pas lié à la base de données (mapped à false)
            ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                //'class' => Images::class,
                'required' => false
            ])

            
            ->add('resume')
            ->add('contenu')
            ->add('prix')
            ->add('localite')
            ->add('prix')
            ->add('disponibilite')
            ->add('une')



            ->add('createdAt',            
                DateType::class, 
                ['label'=> 'Date'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
