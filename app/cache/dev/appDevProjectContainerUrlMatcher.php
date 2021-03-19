<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if ('/_configurator' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__configurator_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }
                not__configurator_home:

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ('/_configurator/final' === $pathinfo) {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // util_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'util_homepage')), array (  '_controller' => 'ControlacFIEC\\UtilBundle\\Controller\\DefaultController::indexAction',));
        }

        // todo_homepage
        if (0 === strpos($pathinfo, '/root/hello') && preg_match('#^/root/hello/(?P<name>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo_homepage')), array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::indexAction',));
        }

        // pagina_estatica
        if (0 === strpos($pathinfo, '/sitio') && preg_match('#^/sitio/(?P<pagina>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina_estatica')), array (  '_controller' => 'ControlacFIEC\\UtilBundle\\Controller\\SitioController::estaticaAction',));
        }

        if (0 === strpos($pathinfo, '/backend')) {
            // pagina_index
            if (0 === strpos($pathinfo, '/backend/inicio') && preg_match('#^/backend/inicio/(?P<action>[^/]++)/?$#sD', $pathinfo, $matches)) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_pagina_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'pagina_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina_index')), array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::indexAction',));
            }
            not_pagina_index:

            // pagina_listado_asistencia
            if (0 === strpos($pathinfo, '/backend/listado_asistencia') && preg_match('#^/backend/listado_asistencia/(?P<action>[^/]++)/(?P<id_curso>[^/]++)/(?P<fecha>[^/]++)/(?P<boolAnterior>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina_listado_asistencia')), array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::listado_asistenciaAction',));
            }

            // pagina_ajax_asistencia
            if ('/backend/ajax_asistencia' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_pagina_ajax_asistencia;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'pagina_ajax_asistencia');
                }

                return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::ajax_asistenciaAction',  '_route' => 'pagina_ajax_asistencia',);
            }
            not_pagina_ajax_asistencia:

            // pagina_anteriores_curso
            if (0 === strpos($pathinfo, '/backend/pagina_anteriores_curso') && preg_match('#^/backend/pagina_anteriores_curso/(?P<semestre>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina_anteriores_curso')), array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::pagina_anteriores_cursoAction',));
            }

            // login
            if ('/backend/login' === $pathinfo) {
                return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::CASLoginAction',  '_route' => 'login',);
            }

        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::CASLoginAction',  '_route' => 'homepage',);
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/backend')) {
            if (0 === strpos($pathinfo, '/backend/log')) {
                // login_check
                if ('/backend/login_check' === $pathinfo) {
                    return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::loginCheckAction',  '_route' => 'login_check',);
                }

                // logout
                if ('/backend/logout' === $pathinfo) {
                    return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
                }

            }

            // static_file
            if (0 === strpos($pathinfo, '/backend/manual') && preg_match('#^/backend/manual/(?P<archivo>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'static_file')), array (  '_controller' => 'ControlacFIEC\\UtilBundle\\Controller\\SitioController::archivoAction',));
            }

            if (0 === strpos($pathinfo, '/backend/test')) {
                // testingCas
                if ('/backend/testing' === $pathinfo) {
                    return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::testingCasAction',  '_route' => 'testingCas',);
                }

                // testingLogin
                if ('/backend/testLogin' === $pathinfo) {
                    return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::testingLoginAction',  '_route' => 'testingLogin',);
                }

            }

        }

        // testingforce
        if ('/force' === $pathinfo) {
            return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::forceAction',  '_route' => 'testingforce',);
        }

        // hello
        if ('/hello' === $pathinfo) {
            return array (  '_controller' => 'ControlacFIEC\\TodoBundle\\Controller\\DefaultController::testingAction',  '_route' => 'hello',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
