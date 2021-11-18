<?php

require 'configuration_db.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM usuarios where id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        exit;
    }

} else {
    header("Location: index.php");
    exit;
}
?>
<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">

    <input type="hidden" name="id" value="<?php echo $info['id']; ?>"/>

    <label>
        Nome: <br/>
        <input type="text" name="nome" value="<?= $info['nome']; ?> "/> <!-- Forma para mostrar na tela sem usar o 'echo' -->
    </label><br/><br/>

    <label>
        Email: <br/>
        <input type="email" name="email" value="<?= $info['email']; ?>"/>
    </label><br/><br/>

    <input type="submit" value="Salvar"/>
</form>