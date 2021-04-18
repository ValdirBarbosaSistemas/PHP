<?php

/**
 * Namespace é um RECURSO que serve para 'encapsular' classes, constantes, funções, 
 * entre outros, dentro de um grupo, para que consiga usar essas classes criadas
 * com mesmo nome dentro de uma mesma aplicação, ou seja, criar "várias caixinhas" 
 * que voce consegue ter classes com o mesmo nome e usar elas com o mesmo nome. 
 * Praticamente é isso. 
 */

require 'classe1.php';
require 'classe2.php';
//Com isso, não tem como usar as duas classes. SOMENTE COM O NAMESPACE

$a = new classe1\MinhaClasse(); //Criando o objeto da classe COM A DECLARAÇÃO DO NAMESPACE
echo $a->testar(); //chamando a função criada na classe 

/**
 * Agora vamos entender uma coisa... o namespace é utilizado mais 
 * com criação e divisão de várias pastas e também junto com um 
 * recurso do PHP chamado de AUTOLOAD.
 */

require 'classes/matematica/basico.php'; //usando sem o conceito de AUTOLOAD
$basico = new classes\matematica\Basico(); //usando sem o conceito de autoload

//Temos outra forma de declarar...
use classes\matematica\Basico as MatematicaBasico; 
//OU de outra forma
use classes\matematica\Basico;

$basico = new MatematicaBasico(); //Criacao do objeto com nome personalizado