<?php

namespace Auto\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Doctrine\ORM\EntityRepository;

class RegUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', array('label' => 'E-mail: '));
        $builder->add('password', 'password', array('label' => 'Пароль: '));
        $builder->add('password2', 'password', array('label' => 'Повторите пароль: '));
        $builder->add('name', 'text', array('label' => 'Имя: '));
        $builder->add('phone', 'text', array('label' => 'Телефон: '));
        $builder->add('region', 'entity', array(
            'class'   => 'AutoMainBundle:Region',
            'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.name', 'ASC');
                },
            'label' => 'Область: '
        ));
        $builder->add('city', 'entity', array(
            'class'   => 'AutoMainBundle:City',
            'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                },
            'label' => 'Город: '
        ));

    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Auto\MainBundle\Entity\User'
        );
    }

    public function getName()
    {
        return 'user_name';
    }
}