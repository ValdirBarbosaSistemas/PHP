<?php

require 'configuration_db.php';
require '../DAOPHP/dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');

if ($id) {

    //BUSCANDO TODAS AS INFORMAÇÕES DO USUÁRIO NO BANCO
    $usuario = $usuarioDao->findById($id);


    /*$sql = $pdo->prepare("SELECT * FROM usuarios where id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        exit;
    }*/

}
if ($usuario === false) {
    header("Location: index.php");
    exit();
}/*else {
    header("Location: index.php");
    exit;
}*/
?>
<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">

    <!-- PEGANDO AS INFORMAÇÕES NO BANCO E COLOCANDO NO FORMULÁRIO -->
    <input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>"/>

    <label>
        Nome: <br/>
        <input type="text" name="nome" value="<?= $usuario->getNome(); ?> "/>
        <!-- Forma para mostrar na tela sem usar o 'echo' -->
    </label><br/><br/>

    <label>
        Email: <br/>
        <input type="email" name="email" value="<?= $usuario->getEmail(); ?>"/>
    </label><br/><br/>

    <input type="submit" value="Salvar"/>
</form>