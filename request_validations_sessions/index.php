<?php
require('header.php');

session_start(); //Iniciando a seção (SEMPRE COLOCAR ANTES DA PÁGINA)

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso']; //Chamando a variável criada 'aviso'
    $_SESSION['aviso'] = ''; //Zerando o aviso na tela
}
?>

<!-- Link para apagar o cookie criado -->
<a href="apagar.php">Apagar Cookie</a>

<form method="POST" action="recebedor.php">
    <label>Nome: <br />
        <input type="text" name="nome" />
    </label>
    <br />
    <br />

    <label>Email: <br />
        <input type="text" name="email" />
    </label>
    <br />
    <br />

    <label>
        Idade: <br />
        <input type="text" name="idade" />
    </label>
    <br />
    <br />

    <input type="submit" value="Enviar" />
</form>