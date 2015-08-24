<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', array('label' => 'Adresse e-mail:', 'invalid_message' => 'Cet Email est déjà utilisé.'))
            ->add('password', 'repeated', array(
                        'type' => 'password',
                        'invalid_message' => 'Les mots de passe doivent correspondre.',
                        'options' => array('required' => true),
                        'first_options'  => array('label' => 'Mot de passe:'),
                        'second_options' => array('label' => 'Confirmer ce mot de passe:'),
                        ))
            ->add('civilite', 'choice', array(
                            'choices' => array(
                                'Mademoiselle' => 'Mademoiselle', 
                                'Madame' => 'Madame',
                                'Monsieur' => 'Monsieur'
                                ),
                            'multiple' => false,
                            'expanded' => true,
                            'label' => 'Civilité:'))
            ->add('prenom', 'text', array('label' => 'Prénom:'))
            ->add('nom', 'text', array('label' => 'Nom:'))
            ->add('birthdate' ,'birthday', array( 'widget' => 'choice', 'label' => 'Date de naissance:', 'format' => 'dd MMMM yyyy', 'years' => range(date('Y'),1920)))
            ->add('adresses', 'collection', array(  'type' => new AdresseType(),
                                                    'allow_add'    => true,
                                                    'allow_delete' => true,
                                                    'by_reference' => false,
                                                    'label' => false
                                                    ))
            ->add('VALIDER', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User',
            'cascade_validation' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_user';
    }
}
