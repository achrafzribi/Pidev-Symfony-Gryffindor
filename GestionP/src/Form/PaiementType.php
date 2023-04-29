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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Validator\Constraints\LuhnValidator;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Event\PostSubmitEvent;


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

            
                
          
           
    /*      ->add('cardNumber', TextType::class, [
                'label' => 'Card Number',
                'required' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Please enter your card number']),
                    new Assert\Length([
                        'min' => 16, 
                        'max' => 16, 
                        'exactMessage' => 'Card number should be 16 digits long'
                    ]),
                    
                ]
            ])
            ->add('expirationDate', DateType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Expiration date should not be blank']),
                    new Assert\GreaterThan(['value' => 'today', 'message' => 'Expiration date invalid'])
                ]
            ])
            
            ->add('cvc', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'CVC should not be blank']),
                    new Assert\Length(['min' => 3, 'max' => 4, 'exactMessage' => 'CVC should be between {{ limit }} and {{ limit }} digits']),
                ]
            ]); */
          

        
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
            
        ]);
    }
}
