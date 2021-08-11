<?php

//endereco
//nome_bd
//usuario
//senha

$db_name = 'Banco_PHP';
$host_name = 'localhost';
$user_name = 'root';
$password = '';


$pdo = new PDO("mysql:host=" . $host_name . ";dbname=" . $db_name, $user_name, $password);
