<?php

namespace App\Form;

use App\Entity\PaiementMethod;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class PaiementMethodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Type should not be blank :P']),
                ]
            ]) ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PaiementMethod::class,
        ]);
    }
}
