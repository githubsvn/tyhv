<?php

namespace SM\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SM\Bundle\AdminBundle\Repository\MenuRepository;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $container = \SM\Bundle\AdminBundle\SMAdminBundle::getContainer();
        $repMenu = $container->get("doctrine")->getRepository('SMAdminBundle:Menu');
        $options = $repMenu->buildMenuType();

        $builder
            ->add('parent', 'entity', array(
                'required' => false,
                'class' => 'SMAdminBundle:Menu',
                'query_builder' => function (MenuRepository $pRe) {
                    return $pRe->createQueryBuilder('c')
                        ->orderBy('c.lft', 'ASC')
                        ->where('c.status = 1');
                }
            ))
            ->add('type', 'choice', array(
                'required' => true,
                'mapped' => false,      //This option will be created field on the form but no need to define property in entity
                'data' => 0,
                'choices' => $options
            ))
            ->add('param', 'choice', array(
                'required' => true,
                'mapped' => false,
                'choices' => array()
            ))
            ->add('status', 'checkbox', array(
            ))
            ->add('menu_languages', 'collection', array('type' => new MenuLanguageType()))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SM\Bundle\AdminBundle\Entity\Menu'
        ));
    }

    public function getName()
    {
        return 'sm_bundle_adminbundle_menutype';
    }
}
