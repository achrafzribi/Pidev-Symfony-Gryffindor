<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
             ->add('date_creation')
            ->add('description')
            ->add('date_creation')
            ->add('type', choiceType::Class, [
                //liste deroulante
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'choices' => [
                    'passager' => 'passager',
                    'chauffeur' => 'chauffeur',

                ],
            ])
            ->add('nom')
            ->add('email')
        ;
        $builder->add('description', TextareaType::class, [ //to convert it to text area
            'attr' => ['class' => 'tinymce'],
        ]);
        $builder->get('type')
        ->addModelTransformer(new CallbackTransformer(
            function($typeArray){
                return count($typeArray) ? $typeArray[0] : null;
            },
            function($typeString){
                return [$typeString];
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
