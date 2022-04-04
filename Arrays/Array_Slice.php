<?php

/*
 * Array Slice = Serve para "Cortar" o array em qualquer pedaço e pegar os dados que foram
 * retirados para inserir um novo array.
 * OBS: NÃO IRÁ MODIFICAR O ARRAY ORIGINAL (ele só copia os dados)
 */

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

$retorno = array_slice($array, 0, 3); //Primeiro parâmetro é qual variavel/array que irá pegar, o segundo é de onde começa e o terceiro é quantos elementos ele vai pegar

print_r($retorno);