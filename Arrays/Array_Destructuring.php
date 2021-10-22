<?php
/**
 * Vamos supor que voce irá receber um array somente com valores e que os mesmos
 * não existem variáveis relacionadas com cada um deles...
 */
$array = ['Valdir', 90, 'café', 'azul'];

//Fazendo de maneira errada (dando nome as posições)...
$nome = $array[0];
$idade = $array[1];
$bebida = $array[2];
$cor = $array[3];

echo $nome . " tem " . $idade . " anos e gosta de tomar " . $bebida . " com a cor " . $cor;

//Fazendo usando "DESTRUCTURING" COM LIST...
list($nome, $idade, $bebida, $cor) = $array;
/**
 * No código acima, chamamos a função list() e dentro do parêntese colocamos as "variáveis"
 * que irão ser criadas de acordo com as posições do array informado, que no caso é $array.
 */