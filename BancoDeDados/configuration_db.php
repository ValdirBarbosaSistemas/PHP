<?php

//endereco
//nome_bd
//usuario
//senha

$db_name = 'Banco_PHP';
$host_name = 'localhost';
$user_name = 'root';
$password = '';

/**
 * Para o funcionamento de um banco de dados em PHP é necessário ter o PDO (PHP DATA OBJECT).
 * Geralmente ele vem instalado na linguagem PHP ou no XAMPP.
 */
$pdo = new PDO("mysql:host=" . $host_name . ";dbname=" . $db_name, $user_name, $password);
//Instanciar a classe PDO do PHP e nos parâmetros colocar as configurações do banco de dados

$sql = $pdo->query('SELECT * FROM usuarios'); //Criando uma query para a execução
$dados = $sql->fetchAll(PDO::FETCH_ASSOC); //"Pegue todos os dados"
//FETCH_ASSOC serve para tirar dados repetitivos

echo '<pre>';
print_r($dados);