<?php

namespace App\Form;

use App\Entity\Commandpm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandpmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idprod')
            ->add('nomprod')
            ->add('referencecm')
            ->add('date')
            ->add('quantitecpm')
            ->add('iduser')
            ->add('type')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commandpm::class,
        ]);
    }
}
