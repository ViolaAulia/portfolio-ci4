<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Portfolio::index');
$routes->get('/skill', 'Portfolio::skill');
$routes->get('kontak', 'Portfolio::kontak');
$routes->get('/skill/tambah', 'Portfolio::tambahSkill');
$routes->post('/skill/simpan', 'Portfolio::simpanSkill');
$routes->get('/skill/edit/(:num)', 'Portfolio::editSkill/$1');
$routes->post('/skill/update/(:num)', 'Portfolio::updateSkill/$1');
$routes->get('/skill/delete/(:num)', 'Portfolio::deleteSkill/$1');