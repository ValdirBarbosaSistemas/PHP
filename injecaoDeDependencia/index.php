<?php

//Essa é uma classe de um cálculo básico de soma
class Basico1
{
    public function somar($x, $y)
    {
        return $x + $y;
    }
}

//Mesmo cálculo de cima só que mais incrementado
class Basico2
{
    public function somar($x, $y)
    {
        $res = $x;
        for ($i = 0; $i < $y; $i++) {
            $res++;
        }
        return $res;
    }
}

class Matematica
{
    private $basico;

    public function __construct($b)
    {
        $this->basico = $b;
    }

    //Basicamente ta terceirizando o processo de soma
    public function somar($x, $y)
    {
        return $this->basico->somar($x, $y);
    }
}

$basico = new Basico1(); //Chamando a classe Basico1 e colocando na variavel $basico
//OU TEMOS OUTRA FORMA...
$mat = new Matematica($basico);
$mat = new Matematica(new Basico1()); //Chamando a classe "Basico1" e colocando dentro da classe Matemática
echo $mat->somar(10, 15);

//-------------------------OUTRO EXEMPLO----------------------------


interface DataBaseInterface
{
    public function listar();
}

class DataBase
{
    private $engine;

    public function __construct(DataBaseInterface $eng)
    {
        $this->engine = $eng;
    }

    public function listarTudo()
    {
        return $this->engine->listar();
    }
}

class MysqlEngine implements DataBaseInterface
{
    public function listar()
    {
        //.......
    }
}

class OracleEngine implements DataBaseInterface
{
    public function listar()
    {
        //......
    }
}

class MongoEngine implements DataBaseInterface
{
    public function listar()
    {
        //.......
    }
}

$db = new DataBase(new OracleEngine());
$db->listarTudo();
