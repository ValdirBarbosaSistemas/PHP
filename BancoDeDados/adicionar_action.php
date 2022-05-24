<?php
require 'configuration_db.php'; //Pegando as informações da configuração do banco de dados para se ter acesso
require '../DAOPHP/dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

//Pegando os itens do formulário

$nome = filter_input(INPUT_POST, 'nome'); //Criação de um filtro para pegar os dados de nome e email
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //(FILTER_VALIDATE_EMAIL) Filtro para validar email

//Confirmando a validação
if ($nome && $email) {

    if ($usuarioDao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($nome);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header("Location: index.php");
        exit();
    } else {
        header("Location: adicionar.php");
        exit();
    }

    //VERIFICANDO O EMAIL...
    /* $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        //PDO STATEMENT (montando aos poucos nossa query) PROCEDIMENTO DIVIDIDO EM VÁRIAS ETAPAS
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)"); //Ver mais sobre o (PDO PREPARE = serve para deixar as entradas dos dados mais protegidas)
        //O SINAL DE ':NOME' É QUE ELE CRIA UM 'TEMPLATE' QUE DEPOIS VAI SUBS. PELO VALOR ESPECIFICO
        // Aqui ele ta associando o valor que voce colocou
        $sql->bindValue(':nome', $nome);
        // o (bindValue) por padrão recebe 2 parâmetros, o primeiro é o que eu quero modificar/alterar e o segundo é a variável que vai receber (ELE ASSOCIA O VALOR QUE VOCE MANDOU) 
        //$sql->bindParam(":email", $email); //VAI TRANSFORMAR NO VALOR QUE FOI DECLARADA A VARIÁVEL (MESMA COISA DA EXPLICAÇÃO ANTERIOR, PORÉM FAZ ASSOCIAÇÃO COM A VARIÁVEL)
        $sql->bindValue(':email', $email);

        $sql->execute(); //Executando a query (FIM DA INSERÇÃO DOS DADOS)

        header("Location: index.php"); //CHAMANDO O INDEX PARA QUE A QUERY SEJA EXECUTADA LÁ
        exit; //(FIM DO PDO STATEMENT)
    } else {
        header("Location: adicionar.php"); //Caso dê errado, voltar à página do formulário
        exit;
    }
    /**
     * Quando estamos trabalhando com consultas no PHP, utilizamos no PDO a palavra reservada (QUERY). PORÉM, quando vamos fazer inserção de dados,
     * utilizamos a palavra chave (PREPARE) devido a segurança e boas práticas
     */
} else {
    header("Location: adicionar.php"); //Caso dê errado, voltar à página do formulário
    exit; 

}
