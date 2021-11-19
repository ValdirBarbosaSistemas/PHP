<?php
require_once 'models/Usuario.php'; //Puxando a classe e interface Usuario

class UsuarioDAOMySql implements UsuarioDAO
{
    //injeção de dependência
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(Usuario $usuarioAdd)
    {

    }

    public function findAll()
    {
        $array = [];
        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if ($sql->rowCount() > 0) {
            $lista = $sql->fetchAll();

            foreach ($lista as $item) {
                $usuario = new Usuario();
                $usuario->setId($item['id']);
                $usuario->setNome($item['nome']);
                $usuario->setEmail($item['email']);

                $array = $usuario;
            }
        }
        return $array;
    }

    public function findById($id)
    {

    }

    public function udpate(Usuario $usuarioUpdate)
    {

    }

    public function delete($id)
    {

    }
}