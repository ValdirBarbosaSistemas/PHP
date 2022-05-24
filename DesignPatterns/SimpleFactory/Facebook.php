<?php

/**
 * SIMPLEFACTORY SERVE PARA CRIAR "FÁBRICA DE CLASSES"
 * É UMA CLASSE PRINCIPAL ONDE SERVE PARA TER OUTRAS
 * FORMAS DE CRIAR OUTRAS CLASSES PARA O USUARIO USAR ELA.
 */
class Facebook
{
    public function createPost() //Criando um método para a instanciação de cada classe
    {
        return new Post(); //Pegando os dados da outra classe
    }
}

class Post
{
    //Essa classe será apenas para modelo... um escopo... não será usada
    private $author;
    private $message;

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message): void
    {
        $this->message = $message;
    }

}