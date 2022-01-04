<?php $render('header'); //chamando uma view parcial OBS: CHAMAR COM O SINAL DE '$' ?>

    <!--Algum conteúdo -->
    <!--Meu nome é: <?php /*echo $nome; */ ?> <br>
Minha idade é: <? /*= $idade; */ ?> anos VARIÁVEL DECLARADA NO ARRAY EM 'HomeController'-->

        <!-- <hr>

<?php /*foreach ($posts as $post) : */ ?>
<h3><?php /*echo $post ['título']; */ ?> </h3>
<p><?php /*echo $post['corpo']; */ ?>
--><?php /*endforeach; */ ?>

    <a href="<?= $base; ?>/novo">Novo Usuário</a> <br>
    <!-- AQUI, A VARIÁVEL $base É ONDE É O CAMINHO PADRÃO DA URL MAIS A ROTA CRIADA '/novo' -->

    <table border="1" width="100%">
        <tr>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['nome']; ?></td>
                <td><?= $usuario['email']; ?></td>
                <td>
                    <a href="<?= $base; ?>/usuario/<?= $usuario ['nome']; ?>/editar">[ Editar ]</a>
                    <!--LEMBRANDO QUE NO MVC EM PHP, O LINK SÃO AS ROTAS -->
                    <a href="<?= $base; ?>/usuario/<?= $usuario ['nome']; ?>/excluir">[ Excluir ]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

<?php $render('footer'); ?>