<?php

namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuariosController extends Controller
{
    //(add) que foi criado no arquivo de ROTAS
    public function add()
    {
        $this->render('add');//arquivo criado na view
    }

    public function addAction()
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            $data = Usuario::select()->where('email', $email)->execute();

            if (count($data) === 0) {
                //insere
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email
                ])->execute();
                $this->redirect('/');
            }
        }
        $this->redirect('/novo');
    }

    public function edit($args)
    {
        //echo "Editando o:" . $args ['nome'];
        //$usuario = Usuario::select()->where('nome', $args['nome'])->execute(); UMA FORMA DE FAZER
        $usuario = Usuario::select()->find($args['nome']); //Forma mais enxuta
        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }

    public function editAction($args)
    {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if ($name && $email) {
            Usuario::update()->set('name', $name)->set('email', $email)->where('nome', $args['nome'])->execute();

            $this->redirect('/');
        }

        $this->redirect('/usuario/' . $args['nome'] . '/editar');
    }

    public function delete($args)
    {
        Usuario::delete()->where('nome', $args['nome'])->execute();

        $this->redirect('/');
    }
}