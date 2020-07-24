<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Team;
use App\Entity\City;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('poster', FileType::class, [
            'label'=>'Poster',
            'mapped'=>false,
            'required'=>true,
            'constraints'=>[
                new File([
                    'maxSize'=>'11000k',
                    'mimeTypes'=>[
                        'image/jpeg',
                        'image/png',
                        'image/jpg'
                    ],
                    'mimeTypesMessage'=>'Veuillez insérer un image en .jpg ou .png'
                ])
                ]
                ])
            ->add('eventDate',DateType::class, [
                'label' => "Temps de l'événement",
                'widget' => 'single_text',
            ])
            ->add('description', TextType::class, [
                'label'=>'Description'
            ])
            ->add('title', TextType::class, [
                'label'=>'Titre'
            ])
            ->add('teams',EntityType::class,[
                'class' => Team::class,
                'expanded'=>'true',
                'multiple'=>'true',
                'choice_label' => 'name'
            ])
            ->add('city', TextType::class, [
                'label'=>'Ville'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
