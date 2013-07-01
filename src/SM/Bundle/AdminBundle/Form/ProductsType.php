<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductsType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('branch')
                ->add('productgroup')
                ->add('price', null, array(
                    'required' => false,
                    'data' => 0
                ))
                ->add('unit', null, array('required' => false))
                ->add('discount', null, array(
                    'required' => false,
                    'data' => 0
                ))
                ->add('thumb', 'file', array(
                    'required' => false,
                    'data_class' => null
                ))
                ->add('amount', null, array(
                    'required' => false,
                    'data' => 0
                ))
                ->add('status', 'checkbox', array(
                    'required' => false
                ))
                ->add('product_languages', 'collection', array('type' => new ProductLanguageType()))
                ->add('media_id', null, array(
                    'required' => false,
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\Products'
        ));
    }

    public function getName()
    {
        return 'sm_bundle_adminbundle_productstype';
    }

}
