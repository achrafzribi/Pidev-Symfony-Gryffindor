<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('FirstName')
            ->add('LastName')
            ->add('roles', choiceType::Class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'passager' => 'passager',
                    'chauffeur' => 'chauffeur',

                ],
            ])
            ->add('email')
            ->add('password',RepeatedType::class, [
                'type'=>PasswordType::class,
                'first_options'=>['label'=>'Password'],
                'second_options'=>['label'=>'Confirm Password']
            ])
            ->add('telephone')
            ->add('birthdate', BirthdayType::class, [
                'placeholder' => [
                    'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
                ],
            ])
            ->add('gender', ChoiceType::class, [
                'multiple' => false,
                'expanded' => true,
                'choices' => [
                    'Male' => 'male',
                    'Female' => 'female',
                ],
            ])
        ;
        $builder->get('roles')
        ->addModelTransformer(new CallbackTransformer(
            function($rolesArray){
                return count($rolesArray) ? $rolesArray[0] : null;
            },
            function($rolesString){
                return [$rolesString];
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
    
}
