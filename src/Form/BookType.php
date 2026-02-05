<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isbnID', TextType::class, [
            'label' => 'Code ISBN du livre'
        ])
            ->add('title', TextType::class, [
            'label' => 'Titre du livre'
        ])
            ->add('author', TextType::class, [
            'label' => 'Auteur du livre'
        ]) 
            ->add('is_avaiable', ChoiceType::class, [
            'label' => 'Disponible'
        ])
            ->add('category', EntityType::class, [
                'label' => 'Categorie',
                'class' => Category::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
