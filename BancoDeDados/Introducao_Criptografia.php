<?php

/**
 * No PHP temos dois tipos de criptografia, o MD5 e o BASE64_ENCODE.
 * A diferença é na questão da segurança, pois no MD5 é IRREVERSÌVEL,
 * ou seja, não tem como transcrever ela de volta ao estado original.
 * Enquanto que no BASE64, é reversível, ou seja, tem como voltar ao
 * que era antes.
 */

$nome = "Valdir"; //Nome normal
$nomeCriptografado = md5($nome); //Nome Criptografado de maneira SEGURA (IRREVERSÍVEL)
$nomeCriptografado2 = base64_encode($nome); //Nome Criptografado de maneira SIMPLES (REVERSÍVEL)

echo "Nome de maneira normal: " . $nome;
echo "Nome Criptografado SEGURO: " . $nomeCriptografado;

echo "Nome Criptografado SIMPLES: " . $nomeCriptografado2;

$codigo = "Qm9uaWVreQ==";
echo "Meu texto original é: " . base64_decode($codigo);