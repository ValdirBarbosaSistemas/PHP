<?php

use core\Router;

$router = new Router();

/*$router->get('/', 'HomeController@index');
$router->get('/fotos/{id}','HomeController@fotos');
$router->get('/sobre/{nome}', 'HomeController@sobreP'); //rotas dinamicas
$router->get('/sobre', 'HomeController@sobre');*/

/*
 * É aqui onde as rotas são criadas (também é onde são vistas as requisições http).
 * O primeiro parametro é onde será o caminho e o segundo é o nome do arquivo controller
 * juntamente com o nome do método que foi criado no arquivo controller
 */

//CRIANDO NOSSO CRUD EM MVC

$router->get('/', 'HomeController@index'); //Aqui será o READ do CRUD

$router->get('/novo', 'UsuariosController@add'); //CREATE
$router->post('/novo', 'UsuariosController@addAction');
$router->get('/usuario/{nome}/editar', 'UsuariosController@edit');
$router->post('/usuario/{nome}/editar', 'UsuariosController@editAction');
$router->get('/usuario/{nome}/excluir', 'UsuariosController@delete');
$router->post('/usuario/{nome}/excluir', 'UsuariosController@deleteAction');
