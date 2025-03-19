<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'TestController::instruction');
$routes->get('instruction', 'TestController::instruction');


$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->resource('students');
});


$routes->get('test/students', 'TestController::listStudents');
$routes->get('test/students/(:num)', 'TestController::studentDetails/$1');
$routes->get('test/add-student', 'TestController::addStudent');
$routes->get('test/update-student/(:num)', 'TestController::updateStudent/$1');
$routes->get('test/delete-student/(:num)', 'TestController::deleteStudent/$1');
