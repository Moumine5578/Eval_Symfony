<?php

namespace App\Form;

use App\Entity\Lieu;
use App\Entity\Releves;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RelevesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('releveBrut', TextType::class, [
                'label' => 'Relevé Brut (Chiffres séparés par des slashes)',
                'attr' => [
                    'class' => 'even-filter',
                ],
            ])
            ->add('lieu', EntityType::class, [
                'class' => Lieu::class,
                'choice_label' => 'nom',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Releves::class,
        ]);
    }
}
