<?php
//TRABALHANDO COM MÚLTIPLOS ARQUIVOS

/**VOU FAZER UM SITE. ELE TEM UM CABECALHO, RODAPE ENTRE OUTROS. 
 * O CABECALHO SE REPETE EM TODAS AS PAGINAS QUE EU FOR CRIAR, E VOCE QUER ALTERAR 
 * COMO FAZER? VAMOS ESTUDAR ISSO AGORA... (REQUIRE OU INCLUDE)
 */

/* require('config.php');
echo 'Conteúdo do site <br/>'; //Conteúdo que será alterado no lugar do arquivo.
echo "Nome de Usuario: " . $usuario; //Puxando os dados do 'config.php' */

/** INCLUDE VOCE PODE TRAZER ARQUIVOS QUE NÃO EXISTE E ELE NÃO VAI DAR ERRO.
 * PORÉM QUANDO É COM REQUIRE ELE NÃO EXECUTA O ARQUIVO (DÁ ERRO)
 */


//-------------------------------TRABALHANDO COM PASTAS


/**
 * Quando os arquivos não estão incluídos dentro das pastas não é necessário usar o
 * símbolo (./) SOMENTE QUANDO SE TRABALHA COM PASTAS
 */

//require('templates/header.php'); //Caminho do arquivo que será chamado/importado
//NA PASTA RAÍZ USA-SE (./nomePasta)
?>

<a href="paginas/home.php">Home </a>
<a href="paginas/sobre.php">Sobre</a>