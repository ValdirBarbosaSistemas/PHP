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
