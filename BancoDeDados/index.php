<?php

/** No php, para se ter acesso ao banco, temos que criá-lo, ou seja,
 * instanciar um objeto de nome PDO com os dados abaixo...
 */
$pdo = new PDO("pgsql: dbname = Banco_PHP;host = 127.0.0.1", "postgres", "V@ldir"); // Qual o tipo do banco, o nome do banco, onde ta o banco e a senha dele
$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll();

echo '<pre>';
print_r($dados);
