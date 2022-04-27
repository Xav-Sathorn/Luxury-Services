<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('userGender', ChoiceType::class, [
                'choices' => [
                    'Masculin' => true,
                    'Féminin' => true,
                    'restons discret, je préfère ne pas en parler' => true,
                ]
            ])
            ->add('userFirstName')
            ->add('userLastName')
            ->add('userAddress')
            ->add('userCountry', ChoiceType::class, [
                'choices' => [
                    'France' => true,
                    'Suisse' => true,
                    'Belgique' => true,
                ]
            ])
            ->add('userNationality')
            ->add('userPassportFile')
            ->add('userCurrentLocation')
            ->add('userExperience', ChoiceType::class, [
                'choices' => [
                    '+ 5 ans' => true,
                    '+ 3 ans' => true,
                    '+ 1 ans' => true,
                    '+ 6 mois' => true,
                ]
            ])
            ->add('userDescription', TextareaType::class, [
                'attr' => ['class' => 'tinymce'],
            ])
            ->add('userDateOfBirth')
            ->add('userPlaceOfBirth')
            ->add('userTelephone', TelType::class)
            ->add('userEmail', EmailType::class)
            ->add('userPwd')
            ->add('getNewPwd')
            ->add('userCategory', ChoiceType::class, [
                'choices' => [
                    'Informatique' => true,
                    'Relations Humaines' => true,
                    'Chanson Internationale' => true,
                    'Psychologie Animalière' => true,
                ]
            ])
            ->add('isAdmin')
            ->add('addUserNotes')
            ->add('profileCreatedAt')
            ->add('profileUpdatedAt')
            ->add('profileDeletedAt')
            ->add('userCv')
            ->add('userPp');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
