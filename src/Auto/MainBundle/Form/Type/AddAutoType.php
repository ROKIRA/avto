<?php
// src/Auto/MainTBundle/Form/Type/AddAutoType.php

namespace Auto\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class AddAutoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('region', 'entity', array(
            'class'   => 'AutoMainBundle:Region',
            'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.name', 'ASC');
                },
            'label' => 'Регион: '
        ));
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
        $builder->add('year', 'entity', array(
            'class'   => 'AutoMainBundle:CarYear',
            'property' => 'year',
            'label' => 'Год выпуска: '
        ));
        $builder->add('body', 'choice', array(
            'choices'   => array('any' => 'Любой', 'sedan' => 'Седан', 'coupe' => 'Купе', 'crossover' => 'Внедорожник / Кроссовер', 'minivan' => 'Минивэн', 'hatchback' => 'Хэтчбек', 'universal' => 'Универсал', 'furgon' => 'Легкий фургон (до 1.5т)', 'cabriolet' => 'Кабриолет', 'roadster' => 'Родстер', 'pickup' => 'Пикап', 'limousine' => 'Лимузин', 'other' => 'Другой'),
            'label' => 'Тип кузова: '
        ));
        $builder->add('run', 'integer', array('label' => 'Пробег: '));
        $builder->add('color', 'text', array('label' => 'Цвет: '));
        $builder->add('price', 'integer', array('label' => 'Цена: '));
        $builder->add('new', 'checkbox', array('label' => 'Новый: ', 'required' => false ));
        $builder->add('file', 'file', array('label' => 'Изображение: ', 'required' => false ));
        $builder->add('description', 'textarea', array('label' => 'Описание: '));

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Auto\MainBundle\Entity\Auto'
        );
    }

    public function getName()
    {
        return 'add_auto';
    }
}