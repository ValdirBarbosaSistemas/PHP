<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP'); //rotas dinamicas
$router->get('/sobre', 'HomeController@sobre');

/*
 * É aqui onde as rotas são criadas (também é onde são vistas as requisições http).
 * O primeiro parametro é onde será o caminho e o segundo é o nome do arquivo controller
 * juntamente com o nome do método que foi criado no arquivo controller
 */