<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Auth::login');
//$routes->get('logout', 'Auth::logout');
$routes->get('register', 'Auth::register');
$routes->get('forgot', 'Auth::forgotPassword');
$routes->get('reset-password', 'Auth::resetPassword');
$routes->get('user', 'User::index');
$routes->get('admin', 'Admin::index');
$routes->get('admin/add-user-to-group', 'Admin::addUserToGroup');
$routes->get('admin/listusers', 'Admin::listUsers');

service('auth')->routes($routes);
