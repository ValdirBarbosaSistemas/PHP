<?php $render('header'); //chamando uma view parcial OBS: CHAMAR COM O SINAL DE '$'?>

<!--Algum conteúdo -->
<!--Meu nome é: <?php /*echo $nome; */ ?> <br>
Minha idade é: <? /*= $idade; */ ?> anos VARIÁVEL DECLARADA NO ARRAY EM 'HomeController'-->

<!-- <hr>

<?php /*foreach ($posts as $post) : */ ?>
<h3><?php /*echo $post ['título']; */ ?> </h3>
<p><?php /*echo $post['corpo']; */ ?>
--><?php /*endforeach; */ ?>

<a href="<?= $base; ?>/novo">Novo Usuário</a> <!-- AQUI, A VARIÁVEL $base É ONDE É O CAMINHO PADRÃO DA URL MAIS A ROTA CRIADA '/novo'