<?php
interface Database
{
    public function listarProdutos();
    public function adicionarProduto();
    public function removerProduto();
}

class MysqlDb implements Database
{
    public function listarProdutos()
    {
        echo "Banco de dados Mysql";
    }

    public function adicionarProduto()
    {
    }

    public function removerProduto()
    {
    }
}

class MongoDb implements Database
{
    public function listarProdutos()
    {
        echo "Banco de dados Mongo";
    }

    public function adicionarProduto()
    {
    }

    public function removerProduto()
    {
    }
}

$db = new MysqlDb();
$db->listarProdutos();

$db2 = new MongoDb();
$db2->listarProdutos();

/**
 * INTERFACE É UM GUIA PARA IMPLEMENTAÇÃO DE UMA CLASSE
 */
