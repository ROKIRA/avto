<?php

namespace Auto\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddCommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array('label' => 'Ваше имя: '));
        $builder->add('email', 'email', array('label' => 'E-mail: '));
        $builder->add('text', 'textarea', array('label' => 'Ваш комментарий: '));
    }

    public function getName()
    {
        return 'comment';
    }
}