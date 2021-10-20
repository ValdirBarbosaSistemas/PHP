<?php

/**
 * O PSR-4 se diz respeito ao 'autoload'. Se diz que toda classe DEVE possuir
 * um autoload e também que toda classe DEVE pertencer um namespace e que o
 * namespace tem que seguir um padrão específico COMPATÍVEL com o autoload.
 * TODO NAMESPACE TEM QUE TER O PADRÃO FEITO PELO NOME DAS PASTAS PARA SER COMPATÍVEL
 */

spl_autoload_register(function ($class) {
    //Agora aqui iremos estabelecer uma variavel que vai ser o diretorio base
    $base_dir = __DIR__ . '/classes/'; //Aqui ele ta chamando o proprio diretorio raiz
    //fazendo a inversão das barras
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
//AUTOLOAD RECOMENDADO PELO PSR-4
//NO PHP TEMOS UMA CONSTANTE CHAMADA (DIRECTORY_SEPARATOR) que serve para fazer a separação de diretórios nos arquivos '\\' ou '/'
