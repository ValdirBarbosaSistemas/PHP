<?php

//Nesse momento utilizaremos o DAO -> Data Access Object e iremos criar a classe com a mesma nomenclatura do banco
class Usuario
{
    //Atributos
    private $id;
    private $nome;
    private $email;

    //Getters e Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = trim($id); //'Trim' serve para tirar espaços em branco de uma palavra
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = ucwords(trim($nome)); //'ucWords' serve para deixar a primeira letra de cada palavra MAIUSCULA
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = strtolower(trim($email));
    }
}

interface UsuarioDAO
{
    //Praticamente a criação de um CRUD no banco de dados

    public function add(Usuario $usuarioAdd);

    public function findAll();

    public function findById($id);

    public function udpate(Usuario $usuarioUpdate);

    public function delete($id);
}