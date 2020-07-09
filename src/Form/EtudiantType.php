<?php

namespace App\Form;

use App\Entity\Etudiant;
use App\Entity\TypeBourse;
use App\Entity\Chambre;
use App\Entity\AddressType;
use App\Entity\TypeEtudiant;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('prenom',TextType::class)
            ->add('nom',TextType::class)
            ->add('email',EmailType::class)
            ->add('tel')
            ->add('dateNaiss', DateType::class,[
                // renders it as a single text box
                'widget' => 'single_text',
            ])
          
            ->add('etre',null,[
                'class' => TypeEtudiant::class,
                'choice_label' => function($etre){
                    return $etre->getOptions();
                },
            ])
            ->add('loger',TextType::class)
            ->add('habite',null,[
                'class' =>Chambre::class,
                'choice_label' => function($loger){
                    return $loger->getNchambre();
                },
            ])
            ->add('boursier',null,[
                'class' =>TypeBourse::class,
                'choice_label' => function($boursier){
                    return $boursier->getMontant();
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Etudiant::class,
        ]);
    }
}
//https://www.youtube.com/watch?v=A8JxqOG2wi4&list=PLlxQJeQRaKDRs9WlWQiXNqWU0blyaZBzo
