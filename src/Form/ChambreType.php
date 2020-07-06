<?php

namespace App\Form;

use App\Entity\Chambre;
use App\Entity\Batiment;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nchambre')
            ->add('typeChambre')
            ->add('batiment',EntityType::class, [
                'class' => Batiment::class,
                'choice_label' => function($batiment){
                    return '00'.$batiment->getNbatiment();
                }
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
