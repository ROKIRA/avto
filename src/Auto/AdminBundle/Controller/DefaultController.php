<?php

namespace Auto\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AutoAdminBundle:Default:index.html.twig');
    }
}
