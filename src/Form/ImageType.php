<?php

namespace App\Form;

use App\Entity\Image;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lienImage')
            ->add('altImage')
            ->add('titreImage')
            ->add('numplaceImage')
            ->add('valeurxRecDebut')
            ->add('valeuryRecDebut')
            ->add('valeurxRecFin')
            ->add('valeuryRecFin')
            ->add('hauteurRecDebut')
            ->add('hauteurRecFin')
            ->add('idSlide')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Image::class,
        ]);
    }
}
