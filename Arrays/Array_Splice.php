<?php

/**  
 * Array_Splice = 1 parâmetro voce vai inserir o array que quer fazer as modificacoes, ou seja, 
 * agora ele vai MODIFICAR o array que voce está dizendo. 2 parâmetro vai ser de onde irá começar,
 * e o 3 parâmetro vai dizer quantos itens vai excluir.
 */

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

array_splice($array, 1, 1); //Nesse caso vai excluir a letra 'b'
print_r($array);
//OBS: O 4 PARÂMETRO SERVE PARA "ADICIONAR/SUBSTITUIR" UM ELEMENTO