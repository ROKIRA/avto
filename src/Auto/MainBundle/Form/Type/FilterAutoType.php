<?php
// src/Auto/MainTBundle/Form/Type/AddAutoType.php

namespace Auto\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class FilterAutoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('new', 'choice', array('choices' => array(
            '1' => 'новые',
            '0' => 'б/у'
        ),
            'expanded' => true ));
        $builder->add('mark', 'entity', array(
            'class'   => 'AutoMainBundle:Marka',
            'property' => 'mark',
            'label' => 'Марка: '
        ));
        $builder->add('model', 'entity', array(
            'class'   => 'AutoMainBundle:Model',
            'property' => 'model',
            'label' => 'Модель: '
        ));
        $builder->add('region', 'entity', array(
            'class'   => 'AutoMainBundle:Region',
            'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.name', 'ASC');
                },
            'label' => 'Регион: '
        ));
        $builder->add('price_from', 'integer', array('label' => 'От: ', 'required' => false ));
        $builder->add('price_to', 'integer', array('label' => 'до: ', 'required' => false));
        $builder->add('year_from', 'integer', array('label' => 'От: ', 'required' => false ));
        $builder->add('year_to', 'integer', array('label' => 'до: ', 'required' => false));
        $builder->add('photo', 'checkbox', array('label' => 'С фото ', 'required' => false));

    }

    public function getName()
    {
        return 'filter_auto';
    }
}