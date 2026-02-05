<?php

namespace App\Form;

use App\Entity\User;
<<<<<<< feature/adminAcess
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
=======
use Doctrine\DBAL\Types\TextType;
>>>>>>> master
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< feature/adminAcess
            ->add('email')
            ->add('roles', ChoiceType::class, [

                'choices' => [
                    'Administrateur' => 'ROLE_ADMIN',
                ],

                'multiple' => true,
                'expanded' => true, // des cases à cocher

            ])
            ->add('password', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank(message: 'Please enter a password',),
                    new Length(min: 6, minMessage: 'Your password should be at least {{ limit }} characters', max: 4096),
                ],
            ])
            ->add('name')
=======
            
            
        ->add('name', TextType::class, [
            'label' => 'Nom complet'
        ])
        ->add('email', EmailType::class, [
            'label' => 'Adresse email'
        ])
        ->add('password', PasswordType::class, [
            'label' => 'Mot de passe'
        ])
        ->add('roles')
>>>>>>> master
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
