<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;


class CategorieType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder->add('libelle',TextType::class,array('label' => 'Libellé : ', 'attr' => array('class' => 'form-control', 'placeholder'=>'Catégorie')))
               ->add('valider',SubmitType::class, array('label' => 'Valider', 'attr' => array('class' => 'btn btn-primary btn-block')))
               ->add('annuler',ResetType::class, array('label' => 'Quitter', 'attr' => array('class' => 'btn btn-primary btn-block')));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
