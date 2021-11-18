<?php
require 'configuration_db.php'; //Pegando as informações da configuração do banco de dados para se ter acesso

//Pegando os itens do formulário

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome'); //Criação de um filtro para pegar os dados de nome e email
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //(FILTER_VALIDATE_EMAIL) Filtro para validar email

//Confirmando a validação
if ($id && $nome && $email) {
    $sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue('id', $id);
    $sql->execute();

    header("Location: index.php");
    exit(); //Outra forma de se usar o exit

} else {
    header("Location: adicionar.php"); //Caso dê errado, voltar à página do formulário
    exit;
}
