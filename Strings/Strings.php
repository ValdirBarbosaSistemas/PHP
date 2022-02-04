<?php

//Diferenças de aspas simples para aspas duplas

$nome = 'Valdir Barbosa';
$nome_completo = "Valdir Barbosa da Silva Junior";

echo 'Olá, meu nome também é $nome, porém, meu nome completo é $nome_completo' . '<br>';

echo "Olá, meu nome também é $nome, porém, meu nome completo é $nome_completo";

/*
 * A diferença entre aspas simples para aspas duplas é que as aspas duplas recebem
 * valores das variáveis. E as aspas simples só recebem strings propriamente ditas
 * Lembrando também que nas aspas duplas, os espaços também são mostrados na tela,
 * ou seja, NÃO PRECISA de colocar o sinal de concatenação "." para concatenar a
 * frase.
 */