<?php

//Definindo uma classe em PHP
class Post
{
    //Atributos
    public int $likes = 0; //modificadores de acesso (public, private, protected)
    public array $comments = [];
    public string $author;

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
}
$post1 = new Post(5); //Declaração de um objeto
//$post1->likes = 3; //chamando o atributo/propriedade criado
$post1->aumentarLike(); //Chamando o método criado

$post2 = new Post($qtdLikes = 0); //Pode-se colocar o valor do parâmetro zerado/padrão
//$post2->likes = 10;

echo "POST1: " . $post1->likes . "<br/>"; //Acessando a propriedade
echo "POST2: " . $post2->likes . "<br/>"; //Acessando a propriedade
