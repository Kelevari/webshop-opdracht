<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password',
                  'repeated', 
                  array(
                    'type' => 'password',
                    'invalid_message' => 'The passwords must match.',
                    'required' => false,
                    'first_options' => array('label' => false, 'attr' => array('class' => 'form-control input-md')),
                    'second_options' => array('label' => false, 'attr' => array('class' => 'form-control input-md'))
                    ))
            ->add('salt', 'hidden', array('required' => false, 'attr' => array('value' => 'sfgdfgsdfgsegserghsdghsdg')))
            ->add('created_at', 'hidden', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Profile'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'userbundle_profile';
    }
}
