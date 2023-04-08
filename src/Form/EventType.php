<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\EventCategorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('nb_placeMax')
            ->add('date_beg')
            ->add('date_end')
            ->add('image')
            ->add('categorie',EntityType::class,
            ['class'=>EventCategorie::class,
            'choice_label'=>'nom'])
            ->add('save',SubmitType::class)
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
