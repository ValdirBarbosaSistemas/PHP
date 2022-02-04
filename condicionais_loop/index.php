<?php

//-------------------Condicional IF

$idade = 40;
if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}

//Condicional ternário
$resultado = ($idade < 18) ? 'Menor de idade' : 'Maior de idade';
echo $resultado;


//--------------------Condicional NULL CAO

/**
 * Na condição NULL CAO se coloca 2 '??' e a terceira condição é a negativa
 * ou seja, "se sobrenome estiver ok, concatena com o nomeCompleto. Caso contrário
 * não mostre nada. Praticamente isso.
 */

$nome = 'Valdir';
$sobrenome = 'Barbosa';

$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : ''; // Concatenou a variável
$nomeCompleto .= $sobrenome ?? ''; //Método condicional NULL CAO

//$nomeCompleto = $nome ?? 'visitante';
//$nomeCompleto .= $sobrenome ?? '';
echo $nomeCompleto;

//---------------------Condicional SWITCH

//$tipo = 'foto';

/* if ($tipo == 'foto') {
    echo 'Exibindo uma foto';
} elseif ($tipo == 'video') {
    echo 'Exibindo um video';
} elseif ($tipo == 'texto') {
    echo 'Exibindo um texto';
} */

switch ($tipo) {
    case 'foto':
        echo 'Exibindo uma foto';
        break;
    case 'video':
        echo 'Exibindo video';
        break;
    case 'texto':
        echo 'Exibindo texto';
        break;
}

//-----------------------Loop WHILE

$numero = 0;

while ($numero <= 10) {
    echo "N°" . $numero . "</br>";
    $numero += 1;
}

//-----------------------Loop FOR

for ($numero = 0; $numero <= 10; $numero++) {
    echo "N°" . $numero . "</br>";
}

//-----------------------Loop FOREACH

$ingredientes = ['acucar', 'farinha de trigo', 'ovo', 'leite', 'fermento em po'];

foreach ($ingredientes as $ingrediente) {
    echo "Item: " . $ingrediente . "</br>";
}

foreach ($ingredientes as $chave => $valor) {
    echo "Item" . $chave . ": " . $valor . "</br>";
}

//--------------------NOVA INSTRUÇÃO CONDICIONAL 'MATCH' LANÇADA NO PHP 8.1

/*O MATCH é muito parecido com o SWITCH CASE, porém com uma pequena diferença na forma de escrever o código
 * A declaração do MATCH é bem parecida com a criação de objetos em array, ou seja, a cada expressão coloca-se
 * a vírgula caso queira colocar outra expressão e o match é delimitado em BLOCO, ou seja, o sinal de ";" se é
 * colocado no final do bloco.
 */

$valor = 10;

echo match ($valor) {
    5 => 'parou no 5',
    10 => 'parou no 10',
    15 => 'parou no 15',
    default => 'É um número diferente de 5, 10 ou 15'
};

/*
 * No MATCH APENAS uma expressão é válida por cada condição.
 * E é possível executar a mesma operação para várias condições.
 */

$valor2 = 5;
$opcao = match ($valor2) {
    2 => 'É 2',
    4, 5, 6 => 'É 4, 5 ou 6',
    default => 'É outro valor'
};

/*OBSERVAÇÃO IMPORTANTE
 * NO SWITCH, AS COMPARAÇÕES PODEM SER FEITAS SÓ POR VALOR (==), JÁ NO CASO
 * DO MATCH, SÃO SEMPRE FEITAS POR VALOR E TIPO (===).
 * VEJAMOS NO EXEMPLO ABAIXO...
 */

$numero = '1';

//Aqui o resultado será o INTEIRO devido ao valor ter sido interpolado logo no começo
switch ($numero) {
    case 1:
        echo 'INTEIRO';
        break;
    case '1':
        echo 'STRING';
}

/*
 * Neste exemplo do SWITCH, vemos que ele não faz diferença
 * entre a variável $numero. O que ele vai fazer é que vai
 * INTERPOLAR a variável, ou seja, ele vai dizer logo na
 * primeira 'case' que o valor é INTEIRO devido ao BREAK.
 */

//Aqui o resultado será a STRING devido ao valor declarado no começo
echo match ($numero) {
    1 => 'INTEIRO',
    '1' => 'STRING'
};

/*
 * No caso do MATCH é diferente, pois se a variável é declarada
 * como string, então ele irá fazer a verificação pelo valor
 * do conteúdo, ou seja, de maneira IMPLÍCITA, o match compara
 * pelo conteúdo da variável (===), enquanto que o SWITCH compara
 * por referência (==).
 */