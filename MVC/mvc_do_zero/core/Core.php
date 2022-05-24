<?php

//Base do sistema ou fundamento do sistema
class Core
{
    //método para rodar/executar a aplicação
    public function run()
    {
        //echo "URL: " . $_GET['url'];
        $url = '/';
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url); //remove o primeiro registro do array
            $currentController = $url[0] . 'Controller'; //www.meusite.com.br/contato (O contato é o controller da página
            //print_r($url);
            array_shift($url);
            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url); //mostrando somente os parâmetros
            } else {
                $currentAction = 'index';
            }
            print_r($url);
        } else {
            $currentController = 'HomeController';
            $currentAction = 'index';
        }

        /*echo "CONTROLLER: " . $currentController . "</br>";
        echo "ACTION: " . $currentAction . "</br>"; //Action é o método que será criado no controller*/
        $controller = new $currentController(); //Chamando os controllers
        //Para chamar as funções que existem nos controllers, temos uma que iremos usar abaixo..
        call_user_func_array(array($currentController, $currentAction), $params);
        //Quando queremos chamar uma função mas não sabemos o nome dela, usamos essa função (call_user_func)
        /**
         * O primeiro parâmetro é um array, e dentro dele colocamos qual a classe que queremos usar,
         * e o segundo parâmetro do array é o método dessa classe que queremos usar. O segundo
         * parâmetro do call_user_func, são os parâmetros do método.
         */
    }

    /**
     * O que iremos fazer então? Nesse método "run", nós iremos
     * identificar a partir da URL que está sendo acessada, qual
     * o controller e dentro do controller, qual o método que será
     * chamada.
     */
}