<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'SMFrontBundle:Default:index',  '_route' => '_welcome',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // sm_soap_server
        if ($pathinfo === '/soap/server') {
            return array (  '_controller' => 'SM\\Bundle\\SoapBundle\\Controller\\DefaultController::serverAction',  '_route' => 'sm_soap_server',);
        }

        // sm_soap_wsdl
        if ($pathinfo === '/soap/wsdl') {
            return array (  '_controller' => 'SM\\Bundle\\SoapBundle\\Controller\\DefaultController::wsdlAction',  '_route' => 'sm_soap_wsdl',);
        }

        // sm_acl_homepage
        if ($pathinfo === '/admin/acl') {
            return array (  '_controller' => 'SM\\Bundle\\AclBundle\\Controller\\AclController::indexAction',  '_route' => 'sm_acl_homepage',);
        }

        // sm_admin_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'sm_admin_login',);
        }

        // sm_admin_login_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::checkAction',  '_route' => 'sm_admin_login_check',);
        }

        // sm_admin_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'sm_admin_logout',);
        }

        // sm_admin_home
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sm_admin_home',);
        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // admin_user
            if (rtrim($pathinfo, '/') === '/admin/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_user');
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
            }

            // admin_user_show
            if (preg_match('#^/admin/user/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::showAction',)), array('_route' => 'admin_user_show'));
            }

            // admin_user_new
            if ($pathinfo === '/admin/user/new') {
                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
            }

            // admin_user_create
            if ($pathinfo === '/admin/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_create;
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
            }
            not_admin_user_create:

            // admin_user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::editAction',)), array('_route' => 'admin_user_edit'));
            }

            // admin_user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::updateAction',)), array('_route' => 'admin_user_update'));
            }
            not_admin_user_update:

            // admin_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'admin_user_delete'));
            }
            not_admin_user_delete:

        }

        if (0 === strpos($pathinfo, '/admin/role')) {
            // admin_role
            if (rtrim($pathinfo, '/') === '/admin/role') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_role');
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::indexAction',  '_route' => 'admin_role',);
            }

            // admin_role_show
            if (preg_match('#^/admin/role/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::showAction',)), array('_route' => 'admin_role_show'));
            }

            // admin_role_new
            if ($pathinfo === '/admin/role/new') {
                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::newAction',  '_route' => 'admin_role_new',);
            }

            // admin_role_create
            if ($pathinfo === '/admin/role/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_role_create;
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::createAction',  '_route' => 'admin_role_create',);
            }
            not_admin_role_create:

            // admin_role_edit
            if (preg_match('#^/admin/role/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::editAction',)), array('_route' => 'admin_role_edit'));
            }

            // admin_role_update
            if (preg_match('#^/admin/role/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_role_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::updateAction',)), array('_route' => 'admin_role_update'));
            }
            not_admin_role_update:

            // admin_role_delete
            if (preg_match('#^/admin/role/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_role_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::deleteAction',)), array('_route' => 'admin_role_delete'));
            }
            not_admin_role_delete:

        }

        if (0 === strpos($pathinfo, '/admin/group')) {
            // admin_group
            if (rtrim($pathinfo, '/') === '/admin/group') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_group');
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::indexAction',  '_route' => 'admin_group',);
            }

            // admin_group_show
            if (preg_match('#^/admin/group/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::showAction',)), array('_route' => 'admin_group_show'));
            }

            // admin_group_new
            if ($pathinfo === '/admin/group/new') {
                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::newAction',  '_route' => 'admin_group_new',);
            }

            // admin_group_create
            if ($pathinfo === '/admin/group/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_group_create;
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::createAction',  '_route' => 'admin_group_create',);
            }
            not_admin_group_create:

            // admin_group_edit
            if (preg_match('#^/admin/group/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::editAction',)), array('_route' => 'admin_group_edit'));
            }

            // admin_group_update
            if (preg_match('#^/admin/group/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_group_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::updateAction',)), array('_route' => 'admin_group_update'));
            }
            not_admin_group_update:

            // admin_group_delete
            if (preg_match('#^/admin/group/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_group_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::deleteAction',)), array('_route' => 'admin_group_delete'));
            }
            not_admin_group_delete:

        }

        if (0 === strpos($pathinfo, '/admin/language')) {
            // admin_language
            if (preg_match('#^/admin/language(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::indexAction',  'page' => '1',)), array('_route' => 'admin_language'));
            }

            // admin_language_show
            if (0 === strpos($pathinfo, '/admin/language/show') && preg_match('#^/admin/language/show/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::showAction',)), array('_route' => 'admin_language_show'));
            }

            // admin_language_new
            if ($pathinfo === '/admin/language/new') {
                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::newAction',  '_route' => 'admin_language_new',);
            }

            // admin_language_create
            if ($pathinfo === '/admin/language/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_language_create;
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::createAction',  '_route' => 'admin_language_create',);
            }
            not_admin_language_create:

            // admin_language_edit
            if (0 === strpos($pathinfo, '/admin/language/edit') && preg_match('#^/admin/language/edit/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::editAction',)), array('_route' => 'admin_language_edit'));
            }

            // admin_language_update
            if (0 === strpos($pathinfo, '/admin/language/update') && preg_match('#^/admin/language/update/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_language_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::updateAction',)), array('_route' => 'admin_language_update'));
            }
            not_admin_language_update:

            // admin_language_delete
            if (0 === strpos($pathinfo, '/admin/language/delete') && preg_match('#^/admin/language/delete/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_admin_language_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::deleteAction',)), array('_route' => 'admin_language_delete'));
            }
            not_admin_language_delete:

            // admin_language_set_default
            if (0 === strpos($pathinfo, '/admin/language/set-default') && preg_match('#^/admin/language/set\\-default/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_language_set_default;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::setDefaultAction',)), array('_route' => 'admin_language_set_default'));
            }
            not_admin_language_set_default:

        }

        if (0 === strpos($pathinfo, '/admin/companytype')) {
            // admin_companytype
            if (preg_match('#^/admin/companytype(?:/(?P<page>\\d+)(?:/(?P<lang>\\d+))?)?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::indexAction',  'page' => '1',  'lang' => NULL,)), array('_route' => 'admin_companytype'));
            }

            // admin_companytype_show
            if (preg_match('#^/admin/companytype/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::showAction',)), array('_route' => 'admin_companytype_show'));
            }

            // admin_companytype_new
            if ($pathinfo === '/admin/companytype/new') {
                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::newAction',  '_route' => 'admin_companytype_new',);
            }

            // admin_companytype_create
            if ($pathinfo === '/admin/companytype/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_companytype_create;
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::createAction',  '_route' => 'admin_companytype_create',);
            }
            not_admin_companytype_create:

            // admin_companytype_edit
            if (preg_match('#^/admin/companytype/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::editAction',)), array('_route' => 'admin_companytype_edit'));
            }

            // admin_companytype_update
            if (preg_match('#^/admin/companytype/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_companytype_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::updateAction',)), array('_route' => 'admin_companytype_update'));
            }
            not_admin_companytype_update:

            // admin_companytype_delete
            if (preg_match('#^/admin/companytype/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_admin_companytype_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::deleteAction',)), array('_route' => 'admin_companytype_delete'));
            }
            not_admin_companytype_delete:

        }

        if (0 === strpos($pathinfo, '/admin/company')) {
            // admin_company
            if (rtrim($pathinfo, '/') === '/admin/company') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_company');
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::indexAction',  '_route' => 'admin_company',);
            }

            // admin_company_show
            if (preg_match('#^/admin/company/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::showAction',)), array('_route' => 'admin_company_show'));
            }

            // admin_company_new
            if ($pathinfo === '/admin/company/new') {
                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::newAction',  '_route' => 'admin_company_new',);
            }

            // admin_company_create
            if ($pathinfo === '/admin/company/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_company_create;
                }

                return array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::createAction',  '_route' => 'admin_company_create',);
            }
            not_admin_company_create:

            // admin_company_edit
            if (preg_match('#^/admin/company/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::editAction',)), array('_route' => 'admin_company_edit'));
            }

            // admin_company_update
            if (preg_match('#^/admin/company/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_company_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::updateAction',)), array('_route' => 'admin_company_update'));
            }
            not_admin_company_update:

            // admin_company_delete
            if (preg_match('#^/admin/company/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_company_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::deleteAction',)), array('_route' => 'admin_company_delete'));
            }
            not_admin_company_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
