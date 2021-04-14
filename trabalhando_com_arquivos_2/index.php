<?php

//LENDO ARQUIVOS
$texto = file_get_contents('texto.txt');
//echo $texto;

/** Para chamar o arquivo de texto criado usamos a função (file_get_contents)
 *  e digitamos o nome do arquivo.
 */

//ESCREVENDO/CRIANDO/ALTERANDO ARQUIVOS

$texto .= "\nValdir Barbosa"; //Adicionando o nome no arquivo texto
file_put_contents('texto.txt', $texto);
echo $texto;
/* $texto2 = 'Valdir Barbosa'; //Nome ficticio
file_put_contents('nome.txt', $texto2); //SÃO 2 PARÂMETROS, O 1 É O NOME DO ARQUIVO E O 2 É A VARIÁVEL CRIADA
echo 'Arquivo criado com sucesso!!!'; */

/**
 * OBS: (COM O 'FILE_PUT_CONTENTS) SE O ARQUIVO NÃO EXISTIR ELE VAI CRIAR. 
 * CASO O ARQUIVO JA EXISTA, ELE VAI ACRESCENTAR AO MESMO.
 */
