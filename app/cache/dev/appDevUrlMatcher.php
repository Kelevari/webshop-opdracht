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

        if (0 === strpos($pathinfo, '/css/1534868')) {
            // _assetic_1534868
            if ($pathinfo === '/css/1534868.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 1534868,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1534868',);
            }

            // _assetic_1534868_0
            if ($pathinfo === '/css/1534868_shop-homepage_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 1534868,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1534868_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/c4fef24')) {
            // _assetic_c4fef24
            if ($pathinfo === '/js/c4fef24.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c4fef24',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c4fef24',);
            }

            if (0 === strpos($pathinfo, '/js/c4fef24_')) {
                // _assetic_c4fef24_0
                if ($pathinfo === '/js/c4fef24_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c4fef24',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c4fef24_0',);
                }

                // _assetic_c4fef24_1
                if ($pathinfo === '/js/c4fef24_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c4fef24',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_c4fef24_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/d09ef00')) {
                // _assetic_d09ef00
                if ($pathinfo === '/css/d09ef00.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09ef00',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d09ef00',);
                }

                // _assetic_d09ef00_0
                if ($pathinfo === '/css/d09ef00_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09ef00',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d09ef00_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/8d45170')) {
                // _assetic_8d45170
                if ($pathinfo === '/css/8d45170.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8d45170',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8d45170',);
                }

                // _assetic_8d45170_0
                if ($pathinfo === '/css/8d45170_1-col-portfolio_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8d45170',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8d45170_0',);
                }

            }

        }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // site_home_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site_home_index');
            }

            return array (  '_controller' => 'SiteBundle\\Controller\\HomeController::indexAction',  '_route' => 'site_home_index',);
        }

        // site_home_cart
        if ($pathinfo === '/cart') {
            return array (  '_controller' => 'SiteBundle\\Controller\\HomeController::cartAction',  '_route' => 'site_home_cart',);
        }

        if (0 === strpos($pathinfo, '/b')) {
            // site_home_bill
            if ($pathinfo === '/bill/bill') {
                return array (  '_controller' => 'SiteBundle\\Controller\\HomeController::billAction',  '_route' => 'site_home_bill',);
            }

            if (0 === strpos($pathinfo, '/bla')) {
                // bill
                if (rtrim($pathinfo, '/') === '/bla') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bill;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bill');
                    }

                    return array (  '_controller' => 'BillingBundle\\Controller\\BillController::indexAction',  '_route' => 'bill',);
                }
                not_bill:

                // bill_create
                if ($pathinfo === '/bla/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_bill_create;
                    }

                    return array (  '_controller' => 'BillingBundle\\Controller\\BillController::createAction',  '_route' => 'bill_create',);
                }
                not_bill_create:

                // bill_new
                if ($pathinfo === '/bla/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bill_new;
                    }

                    return array (  '_controller' => 'BillingBundle\\Controller\\BillController::newAction',  '_route' => 'bill_new',);
                }
                not_bill_new:

                // bill_show
                if (preg_match('#^/bla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bill_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_show')), array (  '_controller' => 'BillingBundle\\Controller\\BillController::showAction',));
                }
                not_bill_show:

                // bill_edit
                if (preg_match('#^/bla/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_bill_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_edit')), array (  '_controller' => 'BillingBundle\\Controller\\BillController::editAction',));
                }
                not_bill_edit:

                // bill_update
                if (preg_match('#^/bla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_bill_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_update')), array (  '_controller' => 'BillingBundle\\Controller\\BillController::updateAction',));
                }
                not_bill_update:

                // bill_delete
                if (preg_match('#^/bla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_bill_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bill_delete')), array (  '_controller' => 'BillingBundle\\Controller\\BillController::deleteAction',));
                }
                not_bill_delete:

            }

            if (0 === strpos($pathinfo, '/billorder')) {
                // billorder
                if (rtrim($pathinfo, '/') === '/billorder') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_billorder;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'billorder');
                    }

                    return array (  '_controller' => 'BillingBundle\\Controller\\BillOrderController::indexAction',  '_route' => 'billorder',);
                }
                not_billorder:

                // billorder_create
                if ($pathinfo === '/billorder/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_billorder_create;
                    }

                    return array (  '_controller' => 'BillingBundle\\Controller\\BillOrderController::createAction',  '_route' => 'billorder_create',);
                }
                not_billorder_create:

                // billorder_new
                if ($pathinfo === '/billorder/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_billorder_new;
                    }

                    return array (  '_controller' => 'BillingBundle\\Controller\\BillOrderController::newAction',  '_route' => 'billorder_new',);
                }
                not_billorder_new:

                // billorder_show
                if (preg_match('#^/billorder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_billorder_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'billorder_show')), array (  '_controller' => 'BillingBundle\\Controller\\BillOrderController::showAction',));
                }
                not_billorder_show:

                // billorder_edit
                if (preg_match('#^/billorder/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_billorder_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'billorder_edit')), array (  '_controller' => 'BillingBundle\\Controller\\BillOrderController::editAction',));
                }
                not_billorder_edit:

                // billorder_update
                if (preg_match('#^/billorder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_billorder_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'billorder_update')), array (  '_controller' => 'BillingBundle\\Controller\\BillOrderController::updateAction',));
                }
                not_billorder_update:

                // billorder_delete
                if (preg_match('#^/billorder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_billorder_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'billorder_delete')), array (  '_controller' => 'BillingBundle\\Controller\\BillOrderController::deleteAction',));
                }
                not_billorder_delete:

            }

        }

        // billing_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'billing_default_index')), array (  '_controller' => 'BillingBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/order')) {
            // order
            if (rtrim($pathinfo, '/') === '/order') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'order');
                }

                return array (  '_controller' => 'BillingBundle\\Controller\\OrderController::indexAction',  '_route' => 'order',);
            }
            not_order:

            // order_create
            if ($pathinfo === '/order/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_order_create;
                }

                return array (  '_controller' => 'BillingBundle\\Controller\\OrderController::createAction',  '_route' => 'order_create',);
            }
            not_order_create:

            // order_new
            if ($pathinfo === '/order/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order_new;
                }

                return array (  '_controller' => 'BillingBundle\\Controller\\OrderController::newAction',  '_route' => 'order_new',);
            }
            not_order_new:

            // order_show
            if (preg_match('#^/order/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_show')), array (  '_controller' => 'BillingBundle\\Controller\\OrderController::showAction',));
            }
            not_order_show:

            // order_edit
            if (preg_match('#^/order/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_order_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_edit')), array (  '_controller' => 'BillingBundle\\Controller\\OrderController::editAction',));
            }
            not_order_edit:

            // order_update
            if (preg_match('#^/order/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_order_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_update')), array (  '_controller' => 'BillingBundle\\Controller\\OrderController::updateAction',));
            }
            not_order_update:

            // order_delete
            if (preg_match('#^/order/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_order_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_delete')), array (  '_controller' => 'BillingBundle\\Controller\\OrderController::deleteAction',));
            }
            not_order_delete:

        }

        // product_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_default_index')), array (  '_controller' => 'ProductBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/drinks')) {
            // drinks
            if (rtrim($pathinfo, '/') === '/drinks') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_drinks;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'drinks');
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\DrinksController::indexAction',  '_route' => 'drinks',);
            }
            not_drinks:

            // drinks_create
            if ($pathinfo === '/drinks/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_drinks_create;
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\DrinksController::createAction',  '_route' => 'drinks_create',);
            }
            not_drinks_create:

            // drinks_new
            if ($pathinfo === '/drinks/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_drinks_new;
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\DrinksController::newAction',  '_route' => 'drinks_new',);
            }
            not_drinks_new:

            // drinks_show
            if (preg_match('#^/drinks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_drinks_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drinks_show')), array (  '_controller' => 'ProductBundle\\Controller\\DrinksController::showAction',));
            }
            not_drinks_show:

            // drinks_edit
            if (preg_match('#^/drinks/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_drinks_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drinks_edit')), array (  '_controller' => 'ProductBundle\\Controller\\DrinksController::editAction',));
            }
            not_drinks_edit:

            // drinks_update
            if (preg_match('#^/drinks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_drinks_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drinks_update')), array (  '_controller' => 'ProductBundle\\Controller\\DrinksController::updateAction',));
            }
            not_drinks_update:

            // drinks_delete
            if (preg_match('#^/drinks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_drinks_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drinks_delete')), array (  '_controller' => 'ProductBundle\\Controller\\DrinksController::deleteAction',));
            }
            not_drinks_delete:

        }

        if (0 === strpos($pathinfo, '/fries')) {
            // fries
            if (rtrim($pathinfo, '/') === '/fries') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fries;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fries');
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\FriesController::indexAction',  '_route' => 'fries',);
            }
            not_fries:

            // fries_create
            if ($pathinfo === '/fries/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fries_create;
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\FriesController::createAction',  '_route' => 'fries_create',);
            }
            not_fries_create:

            // fries_new
            if ($pathinfo === '/fries/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fries_new;
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\FriesController::newAction',  '_route' => 'fries_new',);
            }
            not_fries_new:

            // fries_show
            if (preg_match('#^/fries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fries_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fries_show')), array (  '_controller' => 'ProductBundle\\Controller\\FriesController::showAction',));
            }
            not_fries_show:

            // fries_edit
            if (preg_match('#^/fries/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fries_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fries_edit')), array (  '_controller' => 'ProductBundle\\Controller\\FriesController::editAction',));
            }
            not_fries_edit:

            // fries_update
            if (preg_match('#^/fries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_fries_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fries_update')), array (  '_controller' => 'ProductBundle\\Controller\\FriesController::updateAction',));
            }
            not_fries_update:

            // fries_delete
            if (preg_match('#^/fries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_fries_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fries_delete')), array (  '_controller' => 'ProductBundle\\Controller\\FriesController::deleteAction',));
            }
            not_fries_delete:

        }

        if (0 === strpos($pathinfo, '/menu')) {
            // menu
            if (rtrim($pathinfo, '/') === '/menu') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_menu;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'menu');
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\MenuController::indexAction',  '_route' => 'menu',);
            }
            not_menu:

            // menu_create
            if ($pathinfo === '/menu/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_menu_create;
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\MenuController::createAction',  '_route' => 'menu_create',);
            }
            not_menu_create:

            // menu_new
            if ($pathinfo === '/menu/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_menu_new;
                }

                return array (  '_controller' => 'ProductBundle\\Controller\\MenuController::newAction',  '_route' => 'menu_new',);
            }
            not_menu_new:

            // menu_show
            if (preg_match('#^/menu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_menu_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_show')), array (  '_controller' => 'ProductBundle\\Controller\\MenuController::showAction',));
            }
            not_menu_show:

            // menu_edit
            if (preg_match('#^/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_menu_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_edit')), array (  '_controller' => 'ProductBundle\\Controller\\MenuController::editAction',));
            }
            not_menu_edit:

            // menu_update
            if (preg_match('#^/menu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_menu_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_update')), array (  '_controller' => 'ProductBundle\\Controller\\MenuController::updateAction',));
            }
            not_menu_update:

            // menu_delete
            if (preg_match('#^/menu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_menu_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'menu_delete')), array (  '_controller' => 'ProductBundle\\Controller\\MenuController::deleteAction',));
            }
            not_menu_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/saus')) {
                if (0 === strpos($pathinfo, '/sauscold')) {
                    // sauscold
                    if (rtrim($pathinfo, '/') === '/sauscold') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sauscold;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sauscold');
                        }

                        return array (  '_controller' => 'ProductBundle\\Controller\\SausColdController::indexAction',  '_route' => 'sauscold',);
                    }
                    not_sauscold:

                    // sauscold_create
                    if ($pathinfo === '/sauscold/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sauscold_create;
                        }

                        return array (  '_controller' => 'ProductBundle\\Controller\\SausColdController::createAction',  '_route' => 'sauscold_create',);
                    }
                    not_sauscold_create:

                    // sauscold_new
                    if ($pathinfo === '/sauscold/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sauscold_new;
                        }

                        return array (  '_controller' => 'ProductBundle\\Controller\\SausColdController::newAction',  '_route' => 'sauscold_new',);
                    }
                    not_sauscold_new:

                    // sauscold_show
                    if (preg_match('#^/sauscold/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sauscold_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sauscold_show')), array (  '_controller' => 'ProductBundle\\Controller\\SausColdController::showAction',));
                    }
                    not_sauscold_show:

                    // sauscold_edit
                    if (preg_match('#^/sauscold/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sauscold_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sauscold_edit')), array (  '_controller' => 'ProductBundle\\Controller\\SausColdController::editAction',));
                    }
                    not_sauscold_edit:

                    // sauscold_update
                    if (preg_match('#^/sauscold/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_sauscold_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sauscold_update')), array (  '_controller' => 'ProductBundle\\Controller\\SausColdController::updateAction',));
                    }
                    not_sauscold_update:

                    // sauscold_delete
                    if (preg_match('#^/sauscold/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_sauscold_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sauscold_delete')), array (  '_controller' => 'ProductBundle\\Controller\\SausColdController::deleteAction',));
                    }
                    not_sauscold_delete:

                }

                if (0 === strpos($pathinfo, '/saushot')) {
                    // saushot
                    if (rtrim($pathinfo, '/') === '/saushot') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_saushot;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'saushot');
                        }

                        return array (  '_controller' => 'ProductBundle\\Controller\\SausHotController::indexAction',  '_route' => 'saushot',);
                    }
                    not_saushot:

                    // saushot_create
                    if ($pathinfo === '/saushot/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_saushot_create;
                        }

                        return array (  '_controller' => 'ProductBundle\\Controller\\SausHotController::createAction',  '_route' => 'saushot_create',);
                    }
                    not_saushot_create:

                    // saushot_new
                    if ($pathinfo === '/saushot/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_saushot_new;
                        }

                        return array (  '_controller' => 'ProductBundle\\Controller\\SausHotController::newAction',  '_route' => 'saushot_new',);
                    }
                    not_saushot_new:

                    // saushot_show
                    if (preg_match('#^/saushot/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_saushot_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'saushot_show')), array (  '_controller' => 'ProductBundle\\Controller\\SausHotController::showAction',));
                    }
                    not_saushot_show:

                    // saushot_edit
                    if (preg_match('#^/saushot/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_saushot_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'saushot_edit')), array (  '_controller' => 'ProductBundle\\Controller\\SausHotController::editAction',));
                    }
                    not_saushot_edit:

                    // saushot_update
                    if (preg_match('#^/saushot/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_saushot_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'saushot_update')), array (  '_controller' => 'ProductBundle\\Controller\\SausHotController::updateAction',));
                    }
                    not_saushot_update:

                    // saushot_delete
                    if (preg_match('#^/saushot/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_saushot_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'saushot_delete')), array (  '_controller' => 'ProductBundle\\Controller\\SausHotController::deleteAction',));
                    }
                    not_saushot_delete:

                }

            }

            if (0 === strpos($pathinfo, '/size')) {
                // size
                if (rtrim($pathinfo, '/') === '/size') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_size;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'size');
                    }

                    return array (  '_controller' => 'ProductBundle\\Controller\\SizeController::indexAction',  '_route' => 'size',);
                }
                not_size:

                // size_create
                if ($pathinfo === '/size/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_size_create;
                    }

                    return array (  '_controller' => 'ProductBundle\\Controller\\SizeController::createAction',  '_route' => 'size_create',);
                }
                not_size_create:

                // size_new
                if ($pathinfo === '/size/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_size_new;
                    }

                    return array (  '_controller' => 'ProductBundle\\Controller\\SizeController::newAction',  '_route' => 'size_new',);
                }
                not_size_new:

                // size_show
                if (preg_match('#^/size/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_size_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_show')), array (  '_controller' => 'ProductBundle\\Controller\\SizeController::showAction',));
                }
                not_size_show:

                // size_edit
                if (preg_match('#^/size/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_size_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_edit')), array (  '_controller' => 'ProductBundle\\Controller\\SizeController::editAction',));
                }
                not_size_edit:

                // size_update
                if (preg_match('#^/size/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_size_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_update')), array (  '_controller' => 'ProductBundle\\Controller\\SizeController::updateAction',));
                }
                not_size_update:

                // size_delete
                if (preg_match('#^/size/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_size_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'size_delete')), array (  '_controller' => 'ProductBundle\\Controller\\SizeController::deleteAction',));
                }
                not_size_delete:

            }

            if (0 === strpos($pathinfo, '/snacks')) {
                // snacks
                if (rtrim($pathinfo, '/') === '/snacks') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_snacks;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'snacks');
                    }

                    return array (  '_controller' => 'ProductBundle\\Controller\\SnacksController::indexAction',  '_route' => 'snacks',);
                }
                not_snacks:

                // snacks_create
                if ($pathinfo === '/snacks/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_snacks_create;
                    }

                    return array (  '_controller' => 'ProductBundle\\Controller\\SnacksController::createAction',  '_route' => 'snacks_create',);
                }
                not_snacks_create:

                // snacks_new
                if ($pathinfo === '/snacks/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_snacks_new;
                    }

                    return array (  '_controller' => 'ProductBundle\\Controller\\SnacksController::newAction',  '_route' => 'snacks_new',);
                }
                not_snacks_new:

                // snacks_show
                if (preg_match('#^/snacks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_snacks_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'snacks_show')), array (  '_controller' => 'ProductBundle\\Controller\\SnacksController::showAction',));
                }
                not_snacks_show:

                // snacks_edit
                if (preg_match('#^/snacks/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_snacks_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'snacks_edit')), array (  '_controller' => 'ProductBundle\\Controller\\SnacksController::editAction',));
                }
                not_snacks_edit:

                // snacks_update
                if (preg_match('#^/snacks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_snacks_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'snacks_update')), array (  '_controller' => 'ProductBundle\\Controller\\SnacksController::updateAction',));
                }
                not_snacks_update:

                // snacks_delete
                if (preg_match('#^/snacks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_snacks_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'snacks_delete')), array (  '_controller' => 'ProductBundle\\Controller\\SnacksController::deleteAction',));
                }
                not_snacks_delete:

            }

        }

        if (0 === strpos($pathinfo, '/city')) {
            // city
            if (rtrim($pathinfo, '/') === '/city') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_city;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'city');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\CityController::indexAction',  '_route' => 'city',);
            }
            not_city:

            // city_create
            if ($pathinfo === '/city/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_city_create;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\CityController::createAction',  '_route' => 'city_create',);
            }
            not_city_create:

            // city_new
            if ($pathinfo === '/city/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_city_new;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\CityController::newAction',  '_route' => 'city_new',);
            }
            not_city_new:

            // city_show
            if (preg_match('#^/city/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_city_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_show')), array (  '_controller' => 'UserBundle\\Controller\\CityController::showAction',));
            }
            not_city_show:

            // city_edit
            if (preg_match('#^/city/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_city_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_edit')), array (  '_controller' => 'UserBundle\\Controller\\CityController::editAction',));
            }
            not_city_edit:

            // city_update
            if (preg_match('#^/city/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_city_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_update')), array (  '_controller' => 'UserBundle\\Controller\\CityController::updateAction',));
            }
            not_city_update:

            // city_delete
            if (preg_match('#^/city/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_city_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'city_delete')), array (  '_controller' => 'UserBundle\\Controller\\CityController::deleteAction',));
            }
            not_city_delete:

        }

        // customer
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_customer;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'customer');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\CustomerController::indexAction',  '_route' => 'customer',);
        }
        not_customer:

        if (0 === strpos($pathinfo, '/to')) {
            // customer_create
            if ($pathinfo === '/to') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_customer_create;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\CustomerController::createAction',  '_route' => 'customer_create',);
            }
            not_customer_create:

            // customer_new
            if ($pathinfo === '/to') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_customer_new;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\CustomerController::newAction',  '_route' => 'customer_new',);
            }
            not_customer_new:

        }

        // customer_show
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_customer_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_show')), array (  '_controller' => 'UserBundle\\Controller\\CustomerController::showAction',));
        }
        not_customer_show:

        // customer_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_customer_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_edit')), array (  '_controller' => 'UserBundle\\Controller\\CustomerController::editAction',));
        }
        not_customer_edit:

        // customer_update
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_customer_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_update')), array (  '_controller' => 'UserBundle\\Controller\\CustomerController::updateAction',));
        }
        not_customer_update:

        // customer_delete
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_customer_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'customer_delete')), array (  '_controller' => 'UserBundle\\Controller\\CustomerController::deleteAction',));
        }
        not_customer_delete:

        // user_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_default_index')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/email')) {
            // email
            if (rtrim($pathinfo, '/') === '/email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_email;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'email');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\EmailController::indexAction',  '_route' => 'email',);
            }
            not_email:

            // email_create
            if ($pathinfo === '/email/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_email_create;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\EmailController::createAction',  '_route' => 'email_create',);
            }
            not_email_create:

            // email_new
            if ($pathinfo === '/email/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_email_new;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\EmailController::newAction',  '_route' => 'email_new',);
            }
            not_email_new:

            // email_show
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_email_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_show')), array (  '_controller' => 'UserBundle\\Controller\\EmailController::showAction',));
            }
            not_email_show:

            // email_edit
            if (preg_match('#^/email/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_email_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_edit')), array (  '_controller' => 'UserBundle\\Controller\\EmailController::editAction',));
            }
            not_email_edit:

            // email_update
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_email_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_update')), array (  '_controller' => 'UserBundle\\Controller\\EmailController::updateAction',));
            }
            not_email_update:

            // email_delete
            if (preg_match('#^/email/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_email_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'email_delete')), array (  '_controller' => 'UserBundle\\Controller\\EmailController::deleteAction',));
            }
            not_email_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/phone')) {
                // phone
                if (rtrim($pathinfo, '/') === '/phone') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phone;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'phone');
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\PhoneController::indexAction',  '_route' => 'phone',);
                }
                not_phone:

                // phone_create
                if ($pathinfo === '/phone/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_phone_create;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\PhoneController::createAction',  '_route' => 'phone_create',);
                }
                not_phone_create:

                // phone_new
                if ($pathinfo === '/phone/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phone_new;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\PhoneController::newAction',  '_route' => 'phone_new',);
                }
                not_phone_new:

                // phone_show
                if (preg_match('#^/phone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phone_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_show')), array (  '_controller' => 'UserBundle\\Controller\\PhoneController::showAction',));
                }
                not_phone_show:

                // phone_edit
                if (preg_match('#^/phone/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_phone_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_edit')), array (  '_controller' => 'UserBundle\\Controller\\PhoneController::editAction',));
                }
                not_phone_edit:

                // phone_update
                if (preg_match('#^/phone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_phone_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_update')), array (  '_controller' => 'UserBundle\\Controller\\PhoneController::updateAction',));
                }
                not_phone_update:

                // phone_delete
                if (preg_match('#^/phone/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_phone_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phone_delete')), array (  '_controller' => 'UserBundle\\Controller\\PhoneController::deleteAction',));
                }
                not_phone_delete:

            }

            if (0 === strpos($pathinfo, '/profile')) {
                // profile
                if (rtrim($pathinfo, '/') === '/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_profile;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'profile');
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ProfileController::indexAction',  '_route' => 'profile',);
                }
                not_profile:

                // profile_create
                if ($pathinfo === '/profile/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_profile_create;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ProfileController::createAction',  '_route' => 'profile_create',);
                }
                not_profile_create:

                // profile_new
                if ($pathinfo === '/profile/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_profile_new;
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\ProfileController::newAction',  '_route' => 'profile_new',);
                }
                not_profile_new:

                // profile_show
                if (preg_match('#^/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_profile_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_show')), array (  '_controller' => 'UserBundle\\Controller\\ProfileController::showAction',));
                }
                not_profile_show:

                // profile_edit
                if (preg_match('#^/profile/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_profile_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_edit')), array (  '_controller' => 'UserBundle\\Controller\\ProfileController::editAction',));
                }
                not_profile_edit:

                // profile_update
                if (preg_match('#^/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_profile_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_update')), array (  '_controller' => 'UserBundle\\Controller\\ProfileController::updateAction',));
                }
                not_profile_update:

                // profile_delete
                if (preg_match('#^/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_profile_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_delete')), array (  '_controller' => 'UserBundle\\Controller\\ProfileController::deleteAction',));
                }
                not_profile_delete:

            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
