<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'auto_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AutoAdminBundle:Add:new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'auto_main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cars' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\CarsController::indexAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cars/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cars_loop' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\CarsController::indexAction',    'page' => 1,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/cars/page',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'auto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\AddController::newAutoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-auto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detail_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\AddController::newDetailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'auto_about' => array (  0 =>   array (    0 => 'id',    1 => 'car',  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\AboutAutoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'car',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/auto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'filter_auto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\FilterAutoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AutoMainBundle_ajax_update_mydata_model' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getModelsAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update/data/from/ajax/call/model',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zayavka_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::newZayavkaAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update/data/from/ajax/call/newZayavka',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AutoMainBundle_ajax_update_mydata_year' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getCarYearAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update/data/from/ajax/call/car_year',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AutoMainBundle_ajax_update_mydata_city' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getCityAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update/data/from/ajax/call/city',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AutoMainBundle_ajax_update_mydata_slider_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getSlideNewAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update/data/from/ajax/call/slider/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AutoMainBundle_ajax_update_mydata_slider_bu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getSlideBUAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update/data/from/ajax/call/slider/bu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_comment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::addCommentAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update/data/from/ajax/call/add_comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'auth' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\AuthController::authAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/auth',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\AuthController::logoutAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cabinet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cabinet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'change_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'auto_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::editAutoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/auto-edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zayavka_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::zayavkaListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zayavka-list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'zayavka_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::editZayavkaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zayavka-edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\MainBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_panel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Auto\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_hello_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hi' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\HelloBundle\\Controller\\HelloController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'demos_blog_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Demos\\BlogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
