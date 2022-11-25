<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomprod')
            ->add('prixprod')
            ->add('localisationprod')
            ->add('typeprod',ChoiceType::class,array (
                'choices'  => array (
                    'Theatrale' =>  'Theatrale',
                    'art' =>   'art',
                    'Musicale' => 'Musicale',
                )))
            ->add('typestatue',ChoiceType::class,array (
                'choices'  => array (
                    'Disponible' => 'Disponible' ,
                    'Non disponible' =>  'Non disponible',

                ))
            )
            ->add('imagem1',FileType::class,['required' => false,
                'mapped'=>false
            ])
            ->add('ajouter',type: SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
