<?php
//Aqui é onde fica as configurações do banco de dados

require 'environment.php';

//Criando um array com as config. do banco de dados

$config_db = array();

if (ENVIRONMENT === 'development') {
    $config_db ['dbname'] = 'estrutura_mvc_do_zero';
    $config_db ['host'] = 'localhost';
    $config_db ['dbuser'] = 'root';
    $config_db ['dbpass'] = '';
} else {
    //Aqui será as config. do banco de produção
}

try {
    $pdo = new PDO("mysql:dbname=" . $config_db['dbname'] . ";host=" . $config_db['host'], $config_db['dbuser'], $config_db['dbpass']);

} catch (PDOException $e) {
    echo "Error_PDO: " . $e->getMessage();
    exit();
}