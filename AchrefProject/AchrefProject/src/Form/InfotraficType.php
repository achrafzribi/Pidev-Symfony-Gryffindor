<?php

namespace App\Form;

use App\Entity\Infotrafic;
use App\Entity\Chauffeur;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InfotraficType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type')
            ->add('description')
            ->add('chauffeur', EntityType::class, [
                'class' => Chauffeur::class,
                'choice_label' => function (Chauffeur $chauffeur) {
                    return sprintf('nom du chauffeur : %s  / prénom du chauffeur  : %s / numéro du chauffeur  : %s / adresse du chauffeur  : %s / email du chauffeur  : %s ',$chauffeur->getNomc(), $chauffeur->getPrenomc(),$chauffeur->getNumc(),
                    $chauffeur->getAdressec(),$chauffeur->getEmailc());
                },
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Infotrafic::class,
        ]);
    }
}
