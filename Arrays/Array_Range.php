<?php

/*
 * RANGE = É UM MÉTODO/FUNÇÃO QUE SERVE PARA CRIAR UM ARRAY DE FORMA SEQUENCIAL
 */
$array = [1, 2, 3]; //forma básica de criação de array

$arrayRange = range(1, 20, 2);//forma utilizando o RANGE (start / end / step)
/*No exemplo acima estamos criando um array que começa pelo número 1 ao 20, ou seja,
 *por obrigação, se faz necessário colocar 2 parâmetros (Um para iniciar e outro para terminar).
 * Há também um 3 parâmetro que serve para "pular" a quantidade de vezes que se quer em um
 * determinado elemento.
 * OBS: A CRIAÇÃO DO ARRAY PODE SER DE FORMA CRESCENTE OU DECRESCENTE, OU SEJA, VAI DEPENDER DE COMO
 * VOCE CRIARÁ A SEQUENCIA DOS ELEMENTOS
 */

foreach ($array as $itens) {
    echo $itens . "</br>";
}
