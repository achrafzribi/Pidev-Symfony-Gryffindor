<?php

namespace App\Form;

use App\Entity\Paiement;
use App\Entity\PaiementMethod;
use App\Repository\PaiementMethodRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\PositiveOrZero;





class PaiementType extends AbstractType
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $choices = [
            'Credit Card' => PaiementMethod::CREDIT_CARD,
            'Cash' => PaiementMethod::CASH,
            'Bank Transfer' => PaiementMethod::BANK_TRANSFER,
        ];
        $builder
            ->add('Amount', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Type should not be blank :P']),
                    new PositiveOrZero(['message' => 'Amount should be a positive number or zero']),
                ]
            ])
            ->add('PaiementDate', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Choose a paiement Date']),
                ]
            ]) 
            ->add('Description', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Description should not be blank']),
                ]
            ])
            ->add('paymentMethod', EntityType::class, [
                'class' => PaiementMethod::class,
                'choice_label' => 'Type',
            ] );
          

        
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
            
        ]);
    }
}
