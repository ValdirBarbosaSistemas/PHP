 <?php
    require 'configuration_db.php';

    $lista = [];
    //pegando os usuários no banco
    $sql = $pdo->query("SELECT * FROM usuarios"); //Como não vai haver nenhuma modificacao/enviar dado, pode-se colocar como (query)
    if ($sql->rowCount() > 0) { //Se no sql tiver registro...
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    ?>

 <a href="adicionar.php">ADICIONAR USUARIO</a>

 <table border="1" width="100%">
     <tr>
         <th>ID</th>
         <th>NOME</th>
         <th>EMAIL</th>
         <th>ACOES</th>
     </tr>

     <?php foreach ($lista as $usuario) : ?>
         <tr>
             <td><?php echo $usuario['id_usuario']; ?> </td>
             <td><?php echo $usuario['nome']; ?></td>
             <td><?php echo $usuario['email']; ?></td>
             <td>
                 <a href="editar.php?id=<?php echo $usuario['id_usuario']; ?>">[Editar]</a> <!-- Para saber QUEM eu vou editar-->
                 <a href="excluir.php?excluir=<?php echo $usuario['id_usuario']; ?>">[Excluir]</a>
             </td>
         </tr>
     <?php endforeach; ?>
 </table>