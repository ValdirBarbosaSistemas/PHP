<?php

//Definindo uma classe em PHP
class Post
{
    //Atributos
    public int $likes = 0; //modificadores de acesso (public, private, protected)
    public array $comments = [];
    private string $author; //Modificando para privado para ser acessado pelo get e set

    //Construtor
    public function __construct($qtdLikes)
    {
        $this->likes = $qtdLikes;
    }

    //Declaração de métodos
    public function aumentarLike()
    {
        $this->likes++;
    }

    //Métodos Getters e Setters
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($auth)
    {
        $this->author = $auth;
    }
}
$post1 = new Post(5); //Declaração de um objeto
//$post1->likes = 3; //chamando o atributo/propriedade criado
$post1->aumentarLike(); //Chamando o método criado
$post1->setAuthor('Valdir');

$post2 = new Post($qtdLikes = 0); //Pode-se colocar o valor do parâmetro zerado/padrão
//$post2->likes = 10;
$post2->setAuthor('Barbosa');

echo "POST1: " . $post1->likes . "likes" . $post1->getAuthor() . "<br/>"; //Acessando a propriedade
echo "POST2: " . $post2->likes . "likes" . $post2->getAuthor() . "<br/>"; //Acessando a propriedade
