<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BranchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('status', 'checkbox', array(
                    'attr' => array('checked' => 'checked')
            ))
            ->add('branch_languages', 'collection', array('type' => new BranchLanguageType()))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\Branch'
        ));
    }

    public function getName()
    {
        return 'sm_bundle_adminbundle_branchtype';
    }
}
