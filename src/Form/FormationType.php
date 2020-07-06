<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('school', TextType::class, [
                'label' => 'École :'
            ])
            ->add('degree', TextType::class, [
                'label' => 'Diplôme :'
            ])
            ->add('fieldOfStudy', TextType::class, [
                'label' => 'Domaine'
            ])
            ->add('yearOfStart', DateType::class, [
                'label'  => 'Date de Début :',
                'widget' => 'single_text'
            ])
            ->add('endOfStart', DateType::class, [
                'label' => 'Date de fin :',
                'widget' => 'single_text'
            ])
            ->add('logo', TextType::class, [
                'label' => 'Logo :'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
