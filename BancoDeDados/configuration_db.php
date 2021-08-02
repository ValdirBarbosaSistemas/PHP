<?php

//endereco
//nome_bd
//usuario
//senha

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=Banco_PHP', 'root', 'V@ldir999578624');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
  }