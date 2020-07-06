<?php

namespace App\Form;

use App\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('poste', TextType::class, [
                'label' => 'Poste :'
            ])
            ->add('typeJob', TextType::class, [
                'label' => 'Type d\'emploi :'
            ])
            ->add('company', TextType::class, [
                'label' => 'Entreprise :'
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville :'
            ])
            ->add('startDate', DateType::class, [
                'label' => 'début :',
                'widget' => 'single_text'
            ])
            ->add('endDate', DateType::class, [
                'label' => 'Fin :',
                'widget' => 'single_text'
            ])
            ->add('description', TextType::class, [
                'label' => 'Description :'
            ])
            ->add('logo', TextType::class, [
                'label' => 'Logo :'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Job::class,
        ]);
    }
}
