<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', 'text', array('attr' => array('pattern' => '.{6,}', 'title' => 'Plus de 2 caractères.')))
            ->add('nom', 'text')
            ->add('email', 'email')
            ->add('password', 'repeated', array(
                        'type' => 'password',
                        'invalid_message' => 'Les mots de passe doivent correspondre',
                        'options' => array('required' => true),
                        'first_options'  => array('label' => 'Mot de passe'),
                        'second_options' => array('label' => 'Validation du Mot de passe'),
                        ))
            ->add('birthdate', 'birthday', array( 'widget' => 'choice', 'label' => 'Date de naissance'))
            ->add('Inscription', 'submit')    
           
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
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
