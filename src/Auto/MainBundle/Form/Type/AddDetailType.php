<?php

namespace Auto\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class AddDetailType extends AbstractType
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
        $builder->add('name', 'text', array('label' => 'Наименование: '));
        $builder->add('price', 'integer', array('label' => 'Цена: '));
        $builder->add('file', 'file', array('label' => 'Изображение: ', 'required' => false ));
        $builder->add('description', 'textarea', array('label' => 'Описание: '));

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Auto\MainBundle\Entity\Detail'
        );
    }

    public function getName()
    {
        return 'add_auto';
    }
}