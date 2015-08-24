<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

        if (0 === strpos($pathinfo, '/caddie')) {
            // cart
            if ($pathinfo === '/caddie/ma-commande') {
                return array (  '_controller' => 'AppBundle\\Controller\\CartController::ShowCaddieAction',  '_route' => 'cart',);
            }

            // cart_identification
            if ($pathinfo === '/caddie/identification') {
                return array (  '_controller' => 'AppBundle\\Controller\\CartController::ShowIdentificationAction',  '_route' => 'cart_identification',);
            }

            // addtocart
            if (0 === strpos($pathinfo, '/caddie/addtocart') && preg_match('#^/caddie/addtocart/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addtocart')), array (  '_controller' => 'AppBundle\\Controller\\CartController::AddProductAction',));
            }

            // quantite_cart
            if ($pathinfo === '/caddie/quantite_cart') {
                return array (  '_controller' => 'AppBundle\\Controller\\CartController::UpdateQuantiteAction',  '_route' => 'quantite_cart',);
            }

        }

        // accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'accueil',);
        }

        // menus
        if ($pathinfo === '/menus') {
            return array (  '_controller' => 'AppBundle\\Controller\\MenusController::showCurrentMenuAction',  '_route' => 'menus',);
        }

        // newsletter
        if ($pathinfo === '/newsletter') {
            return array (  '_controller' => 'AppBundle\\Controller\\NewsletterController::newsAction',  '_route' => 'newsletter',);
        }

        if (0 === strpos($pathinfo, '/paniers')) {
            // classique
            if ($pathinfo === '/paniers/classique') {
                return array (  '_controller' => 'AppBundle\\Controller\\PanierController::showCurrentMenuAction',  '_route' => 'classique',);
            }

            // paniers
            if ($pathinfo === '/paniers') {
                return array (  '_controller' => 'AppBundle\\Controller\\PaniersController::indexAction',  '_route' => 'paniers',);
            }

            // app_paniers_index
            if (rtrim($pathinfo, '/') === '/paniers') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'app_paniers_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PaniersController::indexAction',  '_route' => 'app_paniers_index',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
        }

        // checkMail
        if (0 === strpos($pathinfo, '/checkMail') && preg_match('#^/checkMail(?:/(?P<data>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'checkMail')), array (  'data' => '',  '_controller' => 'AppBundle\\Controller\\UserController::checkEmail',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\AdminController::indexAction',  '_route' => 'admin',);
            }

            // edit_admin
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_admin')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\AdminController::editAction',));
            }

            if (0 === strpos($pathinfo, '/admin/blog')) {
                // blog_admin
                if ($pathinfo === '/admin/blog') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogAdminController::indexAction',  '_route' => 'blog_admin',);
                }

                if (0 === strpos($pathinfo, '/admin/blog/e')) {
                    // edit_blog_admin
                    if (0 === strpos($pathinfo, '/admin/blog/edit') && preg_match('#^/admin/blog/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_blog_admin')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogAdminController::editAction',));
                    }

                    // blog_erase
                    if ($pathinfo === '/admin/blog/erase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogAdminController::eraseAction',  '_route' => 'blog_erase',);
                    }

                }

                // categorie_blog_admin
                if ($pathinfo === '/admin/blog/categorie') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\BlogAdminController::categorieAction',  '_route' => 'categorie_blog_admin',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/menu')) {
                // menu_admin
                if ($pathinfo === '/admin/menu') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\MenuAdminController::indexAction',  '_route' => 'menu_admin',);
                }

                if (0 === strpos($pathinfo, '/admin/menu/e')) {
                    // edit_menu_admin
                    if (0 === strpos($pathinfo, '/admin/menu/edit') && preg_match('#^/admin/menu/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_menu_admin')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\MenuAdminController::editAction',));
                    }

                    // menu_erase
                    if ($pathinfo === '/admin/menu/erase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\MenuAdminController::eraseAction',  '_route' => 'menu_erase',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/plat')) {
                // plat_admin
                if ($pathinfo === '/admin/plat') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\PlatAdminController::indexAction',  '_route' => 'plat_admin',);
                }

                if (0 === strpos($pathinfo, '/admin/plat/e')) {
                    // edit_plat_admin
                    if (0 === strpos($pathinfo, '/admin/plat/edit') && preg_match('#^/admin/plat/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_plat_admin')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\PlatAdminController::editAction',));
                    }

                    // plat_erase
                    if ($pathinfo === '/admin/plat/erase') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Admin\\PlatAdminController::eraseAction',  '_route' => 'plat_erase',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
