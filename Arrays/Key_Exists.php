<?php
$array = [
    'nome' => 'Valdir',
    'idade' => 34,
    'empresa' => 'Vox Tecnologia',
    'cor' => 'Azul',
    'profissao' => 'Desenvolvedor de sistemas'
];

/*
 * KEY_EXISTS = SERVE PARA SABER SE HÁ UMA CHAVE EM UM DETERMINADO ARRAY
 * OBS: RETORNA BOOLEANO
 */

if (key_exists('idade', $array)) {//Aqui irá retornar TRUE
    $idade = $array['idade'];
    echo $idade . "anos";
} else {
    echo "Não tem idade";
}
