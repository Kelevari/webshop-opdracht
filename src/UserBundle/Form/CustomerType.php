<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CustomerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', 'text', array('label' => false, 'attr' => array('class' => 'form-control input-md')))
            ->add('lastname', 'text', array('label' => false, 'attr' => array('class' => 'form-control input-md')))
            ->add('address_line_1', 'text', array('label' => false, 'attr' => array('class' => 'form-control input-md')))
            ->add('address_line_2', 'text', array('label' => false,'required' => false, 'attr' => array('class' => 'form-control input-md')))
            ->add('phone', new PhoneType(), array('label' => false))
            ->add('email', new EmailType(), array('label' => false))
            ->add('city', new CityType(), array('label' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Customer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'userbundle_customer';
    }
}
