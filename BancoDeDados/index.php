<?php
require '../BancoDeDados/configuration_db.php';
require '../DAOPHP/dao/UsuarioDaoMysql.php';//utilizando o DAO criado

$usuarioDao = new UsuarioDaoMysql($pdo);
$dados = $usuarioDao->findAll();

/*$lista = [];
//pegando os usuários no banco
$sql = $pdo->query("SELECT * FROM usuarios"); //Como não vai haver nenhuma modificacao/enviar dado, pode-se colocar como (query)
if ($sql->rowCount() > 0) { //Se no sql tiver registro...
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}*/

?>

<a href="adicionar.php">ADICIONAR USUARIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>ACOES</th>
    </tr>

    <?php foreach ($dados as $usuario) : ?> <!--Forma mais avançada de se criar o foreach, pois fazendo isso se pode colocar código html logo abaixo do foreach-->
<!--        <tr>-->
<!--            <td>--><?php //echo $usuario['id'];  ?><!-- </td>-->
<!--            <td>--><?php //echo $usuario['nome'];  ?><!--</td>-->
<!--            <td>--><?php //echo $usuario['email'];  ?><!--</td>-->
<!--            <td>-->
<!--                <a href="editar.php?id=--><?php //echo $usuario['id']; ?><!--">[Editar]</a>-->
<!--                 Editar-->
<!--                <a href="excluir.php?id=--><?php //echo $usuario['id']; ?><!--"-->
<!--                   onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>-->
<!--            </td>-->
<!--        </tr>-->

        <tr>
            <td><?= $usuario->getId(); ?> </td>
            <td><?= $usuario->getNome(); ?></td>
            <td><?= $usuario->getEmail(); ?></td>
            <td>
                <a href="editar.php?id=<?php echo $usuario->getId(); ?>">[Editar]</a>
                <a href="excluir.php?id=<?php echo $usuario->getId(); ?>"
                   onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>