<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('NomEvent',TextType::class,[

                'attr' => [
                    'placeholder' => 'Nom Evènement'
                ]])
            ->add('AdresseEvent',TextType::class,[

                'attr' => [
                    'placeholder' => 'Adresse de Evènement'
                ]])
            ->add('CapaciteEvent',TextType::class,[

                'attr' => [
                    'placeholder' => 'Capacité Evènement'
                ]])
            ->add('nbrTicketAchete',TextType::class,[

                'attr' => [
                    'placeholder' => 'Nombre Tickets achetés'
                ]])
            ->add
            ('Date_Debut_Event',DateTimeType::class,[
                'date_widget' => 'single_text'
            ])



            ->add('Date_Fin_Event',DateTimeType::class,[
                'date_widget' => 'single_text'
            ])
            ->add('Type_Event',  ChoiceType::class, [
                'choices' => [
                    'Présentiel' => 'Présentiel' ,
                    'Distanciel' => 'Distanciel' ,

                ],])

            ->add('CategorieEvent',ChoiceType::class, [
                'choices' => [
                    'Peintural' => 'Peintural',
                    'Musical' => 'Musical',
                    'Théatral' => 'Théatral',
                ],])

            ->add('PrixEntre',TextType::class,[

                'attr' => [
                    'placeholder' => 'Prix Entrée'
                ]])
            ->add('image1', FileType::class, [
                'label' => 'Image Evènement',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '2004800',
                        'mimeTypes' => [
                            'image/gif',
                            'image/jpeg',
                            'image/jpg',

                        ],
                        'mimeTypesMessage' => 'Importez Une Image Valide SVP',
                    ])
                ],
            ]);


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
