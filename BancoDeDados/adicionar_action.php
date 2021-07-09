<?php
require "configuration_db.php";
require "index.php";

$name = filter_input(INPUT_POST, 'name'); //Criação de um filtro para pegar os dados de nome e email
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //(FILTER_VALIDATE_EMAIL) Filtro para validar email

//Confirmando a validação
if ($name && $email) {
    $sql = $pdo->prepare("insert into usuarios (nome, email) values = (:name, :email)"); //Ver mais sobre o (PDO PREPARE)
    $sql->bindValue(":name", $name);
    //$sql->bindParam(":email", $email);
    $sql->bindValue(":email", $email);

    $sql->execute();
    
} else {
    header("Location: adicionar.php"); //Caso dê errado, voltar à página do formulário
    exit;
}
