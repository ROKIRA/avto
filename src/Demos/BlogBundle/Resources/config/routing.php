<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('demos_blog_homepage', new Route('/hello/{name}', array(
    '_controller' => 'DemosBlogBundle:Default:index',
)));

return $collection;
