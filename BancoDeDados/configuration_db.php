<?php

//endereco
//nome_bd
//usuario
//senha


//Aqui colocamos o servidor em que está o nosso banco de dados,
//no nosso exemplo é a conexão com o pgadmin (poderia ser com o localhost também)
$servidor = "localhost";

//A porta utilizada no postgres
$porta = 5432;

//Aqui é o nome do banco de dados que foi criado no pgadmin
$banco = 'Banco_PHP';

//Aqui é o nome de usuário do seu banco de dados, root é o servidor inicial e
//básico de todo servidor, mas recomenda-se não usar o usuario root e sim criar um novo usuário
$usuario = "postgres";

//Aqui colocamos a senha do usuário, por padrão o usuário root vem sem senha,
//mas é altamente recomendável criar uma senha para o usuário root, visto que ele é
//o que tem mais privilégios no servidor
$senha ="V@ldir";

//Aqui criamos a conexão utilizando o servidor, nome do banco, usuario e senha,
//caso dê erro, retorna um erro ao usuário.
//$conexao = pg_connect($servidor, $banco, $usuario, $senha) or
//die ("Não foi possível conectar ao servidor PostGreSQL");
//caso a conexão seja efetuada com sucesso, exibe uma mensagem ao usuário
//echo "Conexão efetuada com sucesso!!";
