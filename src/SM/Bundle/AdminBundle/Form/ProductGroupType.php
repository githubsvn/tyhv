<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SM\Bundle\AdminBundle\Repository\BranchRepository;

class ProductGroupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', 'checkbox', array(
                'required' => false
            ))
            ->add('branch', 'entity', array(
                'required' => true,
                'class' => 'SMAdminBundle:Branch',
                'query_builder' => function (BranchRepository $pRe) {
                    return $pRe->createQueryBuilder('c')
                        ->where('c.status = 1');
                }
            ))
            ->add('productgroup_languages', 'collection', array('type' => new ProductGroupLanguageType()))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\ProductGroup'
        ));
    }

    public function getName()
    {
        return 'sm_bundle_adminbundle_productgrouptype';
    }
}
