<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomprod')
            ->add('prixprod')
            ->add('localisationprod')
            ->add('typeprod')
            ->add('typestatue')
            ->add('imagem1',FileType::class,[
                'label'=>'Image de votre oeuvre',
                'mapped' =>false,
                'required' =>false,
                'constraints'=>[
                    new File([
                        'mimeTypes'=>[
                            'image/gif',
                            'image/jpg',
                            'image/ppeg',
                        ],
                        'mimeTypesMessage'=>'telecharger une image valide',
                    ])
                ],

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
