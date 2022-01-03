<?php $render('header'); ?>

<h2>Adicionando um novo usuário</h2>

<form method="POST" action="<?= $base; ?>/novo">
    <!--NO ACTION DO FORMULÁRIO NA ARQUITETURA MVC EM PHP SE COLOCA A ROTA -->

    <label>
        Nome: <br>
        <input type="text" name="name" />
    </label> <br><br>

    <label>
        Email: <br>
        <input type="email" name="email" />
    </label> <br><br>

    <input type="submit" value="Adicionar" />
</form>

<?php $render('footer'); ?>