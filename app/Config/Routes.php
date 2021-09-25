<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');          // $routes->get('/dashboard', 'Dashboard::index');
$routes->get('/login', 'Home::login'); 
$routes->get('/logout', 'Home::logout');

// Items Controller
$routes->get('/item-list', 'ItemsController::index');
$routes->get('/item-inventory', 'ItemsController::inventory'); // for validation
$routes->get('/item-view/(:num)','ItemsController::view/$1');

// Orders Controller
$routes->get('/order-list', 'OrderController::index'); 


// Request Controller
$routes->get('/request-list','RequestController::index');
$routes->get('/add-request','RequestController::AddRequest');
$routes->get('/add-task','RequestController::AddRequestTask');
$routes->get('/task-list','RequestController::TaskList');
$routes->get('/view-request/(:num)','RequestController::view/$1');
$routes->get('/print-request/(:num)','RequestController::print/$1');
$routes->post('/add-request', 'RequestController::save');
$routes->post('/add-task', 'RequestController::save');
$routes->get('/edit-request/(:num)', 'RequestController::EditRequest/$1');
$routes->get('/load-category/(:num)', 'RequestController::LoadCategory/$1');
$routes->post('/edit-request/(:num)', 'RequestController::UpdateRequest');

// Comments Controller
$routes->post('/add-comment', 'CommentsController::add_comment');


// Auth Controller
$routes->post('/login', 'UserAuthController::login');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
