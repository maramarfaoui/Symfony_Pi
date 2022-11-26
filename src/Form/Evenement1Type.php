<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Evenement1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NomEvent')
            ->add('AdresseEvent')
            ->add('CapaciteEvent')
            ->add('nbrTicketAchete')
            ->add('DateDebutEvent')
            ->add('DateFinEvent')
            ->add('TypeEvent')
            ->add('CategorieEvent')
            ->add('PrixEntre')
            ->add('image1')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
