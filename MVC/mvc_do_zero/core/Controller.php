<?php

class Controller
{
    public function loadView($viewName, $viewData = array())
    {
        extract($viewData); //extract pega o valor da chave do array e transforma em variável para "puxar" as informações dos dados do array
        require 'view/' . $viewName . '.php'; //Chamando a view criada
    }

    //CONCEITO DE TEMPLATE
    public function loadTemplate($viewName, $viewData = array())
    {
        require 'view/template.php';
    }
}