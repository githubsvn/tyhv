<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'sm_acl_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AclBundle\\Controller\\AclController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/acl',    ),  ),),
        'sm_admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        'sm_admin_login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),),
        'sm_admin_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),),
        'sm_admin_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),),
        'admin_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/',    ),  ),),
        'admin_user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),),
        'admin_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/new',    ),  ),),
        'admin_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/create',    ),  ),),
        'admin_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),),
        'admin_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),),
        'admin_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),),
        'admin_role' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/role/',    ),  ),),
        'admin_role_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/role',    ),  ),),
        'admin_role_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/role/new',    ),  ),),
        'admin_role_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/role/create',    ),  ),),
        'admin_role_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/role',    ),  ),),
        'admin_role_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/role',    ),  ),),
        'admin_role_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\RoleController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/role',    ),  ),),
        'admin_group' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/group/',    ),  ),),
        'admin_group_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/group',    ),  ),),
        'admin_group_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/group/new',    ),  ),),
        'admin_group_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/group/create',    ),  ),),
        'admin_group_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/group',    ),  ),),
        'admin_group_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/group',    ),  ),),
        'admin_group_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\GroupController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/group',    ),  ),),
        'admin_language' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::indexAction',    'page' => '1',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/language',    ),  ),),
        'admin_language_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/language/show',    ),  ),),
        'admin_language_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/language/new',    ),  ),),
        'admin_language_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/language/create',    ),  ),),
        'admin_language_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/language/edit',    ),  ),),
        'admin_language_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/language/update',    ),  ),),
        'admin_language_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::deleteAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/language/delete',    ),  ),),
        'admin_language_set_default' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\LanguageController::setDefaultAction',  ),  2 =>   array (    '_method' => 'get',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/language/set-default',    ),  ),),
        'admin_companytype' => array (  0 =>   array (    0 => 'page',    1 => 'lang',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::indexAction',    'page' => '1',    'lang' => NULL,  ),  2 =>   array (    'page' => '\\d+',    'lang' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'lang',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    2 =>     array (      0 => 'text',      1 => '/admin/companytype',    ),  ),),
        'admin_companytype_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/companytype',    ),  ),),
        'admin_companytype_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/companytype/new',    ),  ),),
        'admin_companytype_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/companytype/create',    ),  ),),
        'admin_companytype_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/companytype',    ),  ),),
        'admin_companytype_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/companytype',    ),  ),),
        'admin_companytype_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyTypeController::deleteAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/companytype',    ),  ),),
        'admin_company' => array (  0 =>   array (    0 => 'page',    1 => 'lang',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::indexAction',    'page' => '1',    'lang' => NULL,  ),  2 =>   array (    'page' => '\\d+',    'lang' => '\\d+',    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'lang',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    2 =>     array (      0 => 'text',      1 => '/admin/company',    ),  ),),
        'admin_company_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/company',    ),  ),),
        'admin_company_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/company/new',    ),  ),),
        'admin_company_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/company/create',    ),  ),),
        'admin_company_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/company',    ),  ),),
        'admin_company_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/company',    ),  ),),
        'admin_company_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\CompanyController::deleteAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/company',    ),  ),),
        'admin_branch' => array (  0 =>   array (    0 => 'page',    1 => 'lang',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::indexAction',    'page' => '1',    'lang' => NULL,  ),  2 =>   array (    'page' => '\\d+',    'lang' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'lang',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    2 =>     array (      0 => 'text',      1 => '/admin/branch',    ),  ),),
        'admin_branch_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/branch',    ),  ),),
        'admin_branch_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/branch/new',    ),  ),),
        'admin_branch_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/branch/create',    ),  ),),
        'admin_branch_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/branch',    ),  ),),
        'admin_branch_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/branch',    ),  ),),
        'admin_branch_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\BranchController::deleteAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/branch',    ),  ),),
        'admin_productgroup' => array (  0 =>   array (    0 => 'page',    1 => 'lang',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductGroupController::indexAction',    'page' => '1',    'lang' => NULL,  ),  2 =>   array (    'page' => '\\d+',    'lang' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'lang',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    2 =>     array (      0 => 'text',      1 => '/admin/productgroup',    ),  ),),
        'admin_productgroup_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductGroupController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/productgroup',    ),  ),),
        'admin_productgroup_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductGroupController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/productgroup/new',    ),  ),),
        'admin_productgroup_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductGroupController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/productgroup/create',    ),  ),),
        'admin_productgroup_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductGroupController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/productgroup',    ),  ),),
        'admin_productgroup_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductGroupController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/productgroup',    ),  ),),
        'admin_productgroup_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductGroupController::deleteAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/productgroup',    ),  ),),
        'admin_mediacategory' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::indexAction',    'page' => '1',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/mediacategory',    ),  ),),
        'admin_mediacategory_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/mediacategory',    ),  ),),
        'admin_mediacategory_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/mediacategory/new',    ),  ),),
        'admin_mediacategory_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/mediacategory/create',    ),  ),),
        'admin_mediacategory_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/mediacategory',    ),  ),),
        'admin_mediacategory_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/mediacategory',    ),  ),),
        'admin_mediacategory_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaCategoryController::deleteAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/mediacategory',    ),  ),),
        'admin_media' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::indexAction',    'page' => '1',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/admin/media',    ),  ),),
        'admin_media_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/media',    ),  ),),
        'admin_media_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/media/new',    ),  ),),
        'admin_media_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/media/create',    ),  ),),
        'admin_media_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/media',    ),  ),),
        'admin_media_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/media',    ),  ),),
        'admin_media_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\MediaController::deleteAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/media',    ),  ),),
        'admin_products' => array (  0 =>   array (    0 => 'page',    1 => 'lang',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::indexAction',    'page' => '1',    'lang' => NULL,  ),  2 =>   array (    'page' => '\\d+',    'lang' => '\\d+',    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'lang',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    2 =>     array (      0 => 'text',      1 => '/admin/products',    ),  ),),
        'admin_products_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/products',    ),  ),),
        'admin_products_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/products/new',    ),  ),),
        'admin_products_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/products/create',    ),  ),),
        'admin_products_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/products',    ),  ),),
        'admin_products_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/products',    ),  ),),
        'admin_products_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SM\\Bundle\\AdminBundle\\Controller\\ProductsController::deleteAction',  ),  2 =>   array (    '_method' => 'post|get',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/products',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
