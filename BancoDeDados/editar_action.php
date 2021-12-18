<?php
require 'configuration_db.php'; //Pegando as informações da configuração do banco de dados para se ter acesso
require '../DAOPHP/dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

//Pegando os itens do formulário

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome'); //Criação de um filtro para pegar os dados de nome e email
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //(FILTER_VALIDATE_EMAIL) Filtro para validar email

//Confirmando a validação
if ($id && $nome && $email) {

    $usuario = $usuarioDao->findById($id);
    $usuario->setNome($nome);
    $usuario->setEmail($email);

    $usuarioDao->udpate($usuario);

    /*$sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue('id', $id);
    $sql->execute();*/

    header("Location: index.php");
    exit(); //Outra forma de se usar o exit

} else {
    header("Location: editar.php?id=" . $id); //Caso dê errado, voltar à página do formulário
    exit;
}
