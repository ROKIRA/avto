<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // auto_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'auto_admin_homepage');
                }

                return array (  '_controller' => 'Auto\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'auto_admin_homepage',);
            }

            // add
            if ($pathinfo === '/admin/add') {
                return array (  '_controller' => 'AutoAdminBundle:Add:new',  '_route' => 'add',);
            }

        }

        // auto_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'auto_main_homepage');
            }

            return array (  '_controller' => 'Auto\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'auto_main_homepage',);
        }

        if (0 === strpos($pathinfo, '/cars')) {
            // cars
            if (rtrim($pathinfo, '/') === '/cars') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cars');
                }

                return array (  '_controller' => 'Auto\\MainBundle\\Controller\\CarsController::indexAction',  'page' => 1,  '_route' => 'cars',);
            }

            // cars_loop
            if (0 === strpos($pathinfo, '/cars/page') && preg_match('#^/cars/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cars_loop')), array (  '_controller' => 'Auto\\MainBundle\\Controller\\CarsController::indexAction',  'page' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/add-')) {
                // auto_new
                if ($pathinfo === '/add-auto') {
                    return array (  '_controller' => 'Auto\\MainBundle\\Controller\\AddController::newAutoAction',  '_route' => 'auto_new',);
                }

                // detail_new
                if ($pathinfo === '/add-detail') {
                    return array (  '_controller' => 'Auto\\MainBundle\\Controller\\AddController::newDetailAction',  '_route' => 'detail_new',);
                }

            }

            // auto_about
            if (0 === strpos($pathinfo, '/auto') && preg_match('#^/auto/(?P<id>[^/]++)/(?P<car>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'auto_about');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'auto_about')), array (  '_controller' => 'Auto\\MainBundle\\Controller\\AboutAutoController::indexAction',));
            }

        }

        // filter_auto
        if (rtrim($pathinfo, '/') === '/search') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'filter_auto');
            }

            return array (  '_controller' => 'Auto\\MainBundle\\Controller\\FilterAutoController::indexAction',  '_route' => 'filter_auto',);
        }

        // reg
        if ($pathinfo === '/reg') {
            return array (  '_controller' => 'Auto\\MainBundle\\Controller\\UserController::newAction',  '_route' => 'reg',);
        }

        if (0 === strpos($pathinfo, '/update/data/from/ajax/call')) {
            // AutoMainBundle_ajax_update_mydata_model
            if ($pathinfo === '/update/data/from/ajax/call/model') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_AutoMainBundle_ajax_update_mydata_model;
                }

                return array (  '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getModelsAction',  '_route' => 'AutoMainBundle_ajax_update_mydata_model',);
            }
            not_AutoMainBundle_ajax_update_mydata_model:

            // zayavka_new
            if ($pathinfo === '/update/data/from/ajax/call/newZayavka') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_zayavka_new;
                }

                return array (  '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::newZayavkaAction',  '_route' => 'zayavka_new',);
            }
            not_zayavka_new:

            if (0 === strpos($pathinfo, '/update/data/from/ajax/call/c')) {
                // AutoMainBundle_ajax_update_mydata_year
                if ($pathinfo === '/update/data/from/ajax/call/car_year') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_AutoMainBundle_ajax_update_mydata_year;
                    }

                    return array (  '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getCarYearAction',  '_route' => 'AutoMainBundle_ajax_update_mydata_year',);
                }
                not_AutoMainBundle_ajax_update_mydata_year:

                // AutoMainBundle_ajax_update_mydata_city
                if ($pathinfo === '/update/data/from/ajax/call/city') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_AutoMainBundle_ajax_update_mydata_city;
                    }

                    return array (  '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getCityAction',  '_route' => 'AutoMainBundle_ajax_update_mydata_city',);
                }
                not_AutoMainBundle_ajax_update_mydata_city:

            }

            if (0 === strpos($pathinfo, '/update/data/from/ajax/call/slider')) {
                // AutoMainBundle_ajax_update_mydata_slider_new
                if ($pathinfo === '/update/data/from/ajax/call/slider/new') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_AutoMainBundle_ajax_update_mydata_slider_new;
                    }

                    return array (  '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getSlideNewAction',  '_route' => 'AutoMainBundle_ajax_update_mydata_slider_new',);
                }
                not_AutoMainBundle_ajax_update_mydata_slider_new:

                // AutoMainBundle_ajax_update_mydata_slider_bu
                if ($pathinfo === '/update/data/from/ajax/call/slider/bu') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_AutoMainBundle_ajax_update_mydata_slider_bu;
                    }

                    return array (  '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::getSlideBUAction',  '_route' => 'AutoMainBundle_ajax_update_mydata_slider_bu',);
                }
                not_AutoMainBundle_ajax_update_mydata_slider_bu:

            }

            // add_comment
            if ($pathinfo === '/update/data/from/ajax/call/add_comment') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_comment;
                }

                return array (  '_controller' => 'Auto\\MainBundle\\Controller\\MyAjaxController::addCommentAction',  '_route' => 'add_comment',);
            }
            not_add_comment:

        }

        // auth
        if ($pathinfo === '/auth') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_auth;
            }

            return array (  '_controller' => 'Auto\\MainBundle\\Controller\\AuthController::authAction',  '_route' => 'auth',);
        }
        not_auth:

        // logout
        if ($pathinfo === '/logout') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_logout;
            }

            return array (  '_controller' => 'Auto\\MainBundle\\Controller\\AuthController::logoutAction',  '_route' => 'logout',);
        }
        not_logout:

        // cabinet
        if ($pathinfo === '/cabinet') {
            return array (  '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::indexAction',  '_route' => 'cabinet',);
        }

        // change_profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::profileAction',  '_route' => 'change_profile',);
        }

        // auto_edit
        if (0 === strpos($pathinfo, '/auto-edit') && preg_match('#^/auto\\-edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'auto_edit')), array (  '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::editAutoAction',));
        }

        if (0 === strpos($pathinfo, '/zayavka-')) {
            // zayavka_list
            if ($pathinfo === '/zayavka-list') {
                return array (  '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::zayavkaListAction',  '_route' => 'zayavka_list',);
            }

            // zayavka_edit
            if (0 === strpos($pathinfo, '/zayavka-edit') && preg_match('#^/zayavka\\-edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'zayavka_edit')), array (  '_controller' => 'Auto\\MainBundle\\Controller\\CabinetController::editZayavkaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Auto\\MainBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // admin_panel
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Auto\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_panel',);
        }

        if (0 === strpos($pathinfo, '/h')) {
            // acme_hello_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_hello_homepage')), array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',));
            }

            // hi
            if (0 === strpos($pathinfo, '/hi') && preg_match('#^/hi/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hi')), array (  '_controller' => 'Acme\\HelloBundle\\Controller\\HelloController::indexAction',));
            }

            // demos_blog_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demos_blog_homepage')), array (  '_controller' => 'Demos\\BlogBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
