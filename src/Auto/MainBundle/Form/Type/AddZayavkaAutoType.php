<?php
// src/Auto/MainTBundle/Form/Type/AddAutoType.php

namespace Auto\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class AddZayavkaAutoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('region', 'entity', array(
            'class'   => 'AutoMainBundle:Region',
            'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.name', 'ASC');
                },
            'label' => 'Регион: ',
            'required' => false
        ));
        $builder->add('mark', 'entity', array(
            'class'   => 'AutoMainBundle:Marka',
            'property' => 'mark',
            'label' => 'Марка: '
        ));
        $builder->add('model', 'entity', array(
            'class'   => 'AutoMainBundle:Model',
            'property' => 'model',
            'label' => 'Модель: ',
            'required' => false
        ));
        $builder->add('year', 'entity', array(
            'class'   => 'AutoMainBundle:CarYear',
            'property' => 'year',
            'label' => 'Год выпуска: ',
            'required' => false
        ));
        $builder->add('body', 'choice', array(
            'choices'   => array('any' => 'Любой', 'sedan' => 'Седан', 'coupe' => 'Купе', 'crossover' => 'Внедорожник / Кроссовер', 'minivan' => 'Минивэн', 'hatchback' => 'Хэтчбек', 'universal' => 'Универсал', 'furgon' => 'Легкий фургон (до 1.5т)', 'cabriolet' => 'Кабриолет', 'roadster' => 'Родстер', 'pickup' => 'Пикап', 'limousine' => 'Лимузин', 'other' => 'Другой'),
            'label' => 'Тип кузова: '
        ));
        $builder->add('run', 'integer', array('label' => 'Пробег: ', 'required' => false));
        $builder->add('color', 'text', array('label' => 'Цвет: ', 'required' => false));
        $builder->add('price', 'integer', array('label' => 'Цена: ', 'required' => false));
        $builder->add('new', 'checkbox', array('label' => 'Новый: ', 'required' => false ));
        $builder->add('description', 'textarea', array('label' => 'Описание: ', 'required' => false));

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Auto\MainBundle\Entity\ZayavkaAuto'
        );
    }

    public function getName()
    {
        return 'add_zayavka_auto';
    }
}