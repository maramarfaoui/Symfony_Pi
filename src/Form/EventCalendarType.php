<?php

namespace App\Form;

use App\Entity\EventCalendar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventCalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('start',DateTimeType::class,[
                'date_widget' => 'single_text'
            ])
            ->add('end',DateTimeType::class,[
                'date_widget' => 'single_text'
            ])
            ->add('description')
            ->add('backgroundColor',ColorType::class)
            ->add('borderColor',ColorType::class)
            ->add('textColor',ColorType::class)
            ->add('journee_entiere')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EventCalendar::class,
        ]);
    }
}
