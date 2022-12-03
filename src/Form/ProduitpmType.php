<?php

namespace App\Form;

use App\Entity\Produitpm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitpmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomprod')
            ->add('referencep')
            ->add('quantitep')
            ->add('type')
            ->add('prixpm')
            ->add('dateajoutpm')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produitpm::class,
        ]);
    }
}
