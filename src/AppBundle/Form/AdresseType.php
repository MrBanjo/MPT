<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdresseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('voie', 'text', array('label' => 'N°, nom de la voie:'))
            ->add('complement', 'text', array('label' => "Bâtiment, code d'accès:", 'required' => false))
            ->add('postal', 'text', array('label' => 'Code Postal:'))
            ->add('ville', 'text', array('label' => 'Ville:'))
            ->add('titre', 'text', array('label' => 'Donnez un titre à cette adresse :'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Adresse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_adresse';
    }
}
