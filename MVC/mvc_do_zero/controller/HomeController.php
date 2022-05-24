<?php

class HomeController extends Controller
{
    //Controlador da página inicial
    public function index()
    {
        //echo "Olá mundo!";
        $anuncios = new Anuncios(); //Pegando as informações do model
        $usuario = new Usuario();

        $dados = array(
            'quantidade' => $anuncios->getQuantidade(),
            'nome' => $usuario->getNome(),
            'idade' => $usuario->getIdade()
        );

        $this->loadView('home', $dados); //Chamando o view
    }

    /*public function teste()
    {
        echo "Isso é um teste";
    }*/

}