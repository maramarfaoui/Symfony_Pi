<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id')
            ->add('mdp')
            ->add('nom')
            ->add('prenom')
            ->add('mail')
            ->add('adresse')
            ->add('tel')
            ->add('rolename',EntityType::class,[
                'class'=>Role::class,
                'choice_label' => 'name' ])
            //            ->add('role_id')

            ->add('role_id',EntityType::class,[
                'class'=>Role::class,
                'choice_label' => 'id' ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
