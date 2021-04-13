<?php

setcookie('nomeCookie', '', time() - 3600); //LEMBRANDO QUE O PHP TRABALHA COM MILISEGUNDOS
/**
 *  Para apagar um cookie tem que setar um novo cookie e determinar um 
 *  tempo de expiração no PASSADO, pois é dessa forma que expiramos um
 *  cookie.
 */

//Redirecionando para o index
header('Location: index.php');
exit;

/** A DIFERENÇA ENTRE SESSION E COOKIE É ESSA... NO SESSION, A PARTIR DO MOMENTO 
 *  QUE VOCE FECHA UM NAVEGADOR, AS INFORMAÇÕES SÃO DESTRUÍDAS. ENQUANTO QUE NO COOKIE,
 *  MESMO SE VOCE FECHAR O NAVEGADOR, AS INFORMAÇÕES NÃO SERÃO DESTRUÍDAS... LÓGICO QUE
 *  TEM EXPIRAÇÃO QUANDO SE COLOCA DETERMINADO TEMPO OU ELA SÓ SERÁ DESTRUÍDA QUANDO SE 
 *  CLICA NO BOTÃO NO QUAL FOI CRIADO.
 */
