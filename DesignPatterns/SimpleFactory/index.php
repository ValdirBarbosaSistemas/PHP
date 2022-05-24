<?php
require "facebook.php";

$fb = new Facebook(); //Instanciando a classe criada
$post = $fb->createPost(); //Criando a classe através do método e atribuindo à uma variável
$post->setAuthor("Valdir"); //Modificando os dados da classe através da variável criada
$post->setMessage("Essa é a mensagem da minha postagem");

echo "Autor: " . $post->getAuthor(); //Pegando os dados do "Author" através da variável criada