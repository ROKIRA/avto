<?php

namespace Auto\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AuthAutoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email', array('label' => 'E-mail: '));
        $builder->add('password', 'password', array('label' => 'Пароль: '));

    }

    public function getName()
    {
        return 'user_name';
    }
}