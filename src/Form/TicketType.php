<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Ticket;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('PrixTicket')
            ->add('NomEvent', EntityType::class, [
                'class' => Evenement::class,
                'choice_label' => function ($event) {
                    return $event->getNomevent();
                }
            ])
            ->add('Type_Ticket',ChoiceType::class, [
                'choices' => [
                    '1er Choix' => '1er Choix',
                    '2ème Choix' => '2ème Choix',
                    '3ème Choix' => '3ème Choix',
                ],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
