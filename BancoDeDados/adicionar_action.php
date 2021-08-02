<?php
require "configuration_db.php"; //Pegando as informações da configuração do banco de dados para se ter acesso

//Pegando os itens do formulário

$name = filter_input(INPUT_POST, 'name'); //Criação de um filtro para pegar os dados de nome e email
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //(FILTER_VALIDATE_EMAIL) Filtro para validar email

//Confirmando a validação
if ($name && $email) {
    $sql = $pdo->prepare("select * from usuarios"); //Ver mais sobre o (PDO PREPARE)

    // Aqui ele ta associando o valor que voce colocou
    $sql->bindValue(':name', $name); // o (bindValue) por padrão recebe 2 parâmetros, o primeiro é o que eu quero modificar/alterar e o segundo é a variável que vai receber 
    //$sql->bindParam(":email", $email);
    $sql->bindValue(':email', $email);

    $dados = $sql->execute();
    print_r($dados);
    header("Location: index.php");
    exit;
    
    /**
     * Quando estamos trabalhando com consultas no PHP, utilizamos no PDO a palavra reservada (QUERY). PORÉM, quando vamos fazer inserção de dados,
     * utilizamos a palavra chave (PREPARE) devido a segurança e boas práticas
     */
} else {
    header("Location: adicionar.php"); //Caso dê errado, voltar à página do formulário
    exit;
}
