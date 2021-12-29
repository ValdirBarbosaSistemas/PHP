<?php

namespace src\controllers;

use \core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $posts = [
            ['título' => 'Título de teste 1', 'corpo' => 'Corpo de teste 1'],
            ['título' => 'Título de teste 2', 'corpo' => 'Corpo de teste 2'],
            ['título' => 'Título de teste 3', 'corpo' => 'Corpo de teste 3'],
            ['título' => 'Título de teste 4', 'corpo' => 'Corpo de teste 4'],
            ['título' => 'Título de teste 5', 'corpo' => 'Corpo de teste 5'],
        ];

        //colocando valores na view de maneira dinâmica
        $nome = "Valdir";
        $this->render('home', [
            'nome' => $nome, //colocando a variável na view através do 2 parâmetro OBS: ELE TA COLOCANDO A CHAVE DO ARRAY E NÃO A VARIÁVEL PROPRIAMENTE DITA
            'idade' => 90, //Ele coloca como VARIÁVEL A CHAVE DO ARRAY
            'posts' => $posts
        ]);//carregando uma view
        //echo "Olá Valdir";
    }

    public function fotos($parametros)
    {
        echo "Acessando a foto: " . $parametros['id'];
        //$this->render('fotos');
        //echo "Opa fotos?";
    }

    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        print_r($args);
    }

}