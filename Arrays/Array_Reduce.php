<?php

/**
 * Array_Reduce = É uma função que como o nome ja diz, serve para "reduzir" um determinado array.
 * Para isso, ele tem 2 parâmetros... o primeiro parâmetro é o array que quer fazer a alteração.
 * o segundo parâmetro é o nome da funcao que irá ser criada/executada antes da declaracao para
 * ser usada no reduce... iremos ver o exemplo abaixo...
 */

$numeros = [1, 2, 3, 4, 5];

$total = array_reduce($numeros, 'somar');

function somar($contador, $valor)
{
    $contador += $valor; //$contador = $contador + $valor
    return $contador;
}
/**
 * OBS: NA FUNCAO CRIADA (QUE IRÁ SER EXECUTADA NO REDUCE) ELA IRÁ TER 2 PARÂMETROS...
 * O 1 PARÂMETRO IRÁ SER UM "CONTADOR" E O 2 PARÂMETRO SERÁ O VALOR RECEBIDO DO ARRAY
 */

echo $total;


//TOTAL DE HOMENS

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Cirano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9]
];

$total_m = array_reduce($pessoas, 'contar_m');

function contar_m($contador, $valor)
{
    if ($valor['sexo'] === 'M') {
        $contador++;
    }
    return $contador;
}


//SOMA DAS NOTAS DOS HOMENS

$soma_m = array_reduce($pessoas, 'soma_m');

function soma_m($contador, $valor)
{
    if ($valor['sexo'] == 'M') {
        $contador += $valor['nota'];
    }
}


echo "Total de Homens: " . $total_m . "<br>";
echo "Total de notas dos homens: " . $soma_m;
