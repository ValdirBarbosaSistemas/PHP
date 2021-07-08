<?php
require 'configuration_db.php'; //chamando as configurações criadas do banco de dados

/** No php, para se ter acesso ao banco, temos que criá-lo, ou seja,
 * instanciar um objeto de nome PDO com os dados abaixo...
 */
$pdo = new PDO("pgsql: dbname =" . $banco . ";host =" . $servidor . ";port =" . $porta, $usuario, $senha); // Qual o tipo do banco, o nome do banco, onde ta o banco e a senha dele
$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll(pdo::FETCH_ASSOC);

echo '<pre>';
print_r($dados);
?>

<a href="adicionar.php">ADICIONAR USUARIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>ACOES</th>
    </tr>
    
</table>