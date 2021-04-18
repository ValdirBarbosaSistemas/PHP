<?php
//Interface do tipo forma
interface Forma
{
    public function getTipo();
    public function getArea();
}

class Quadrado implements Forma
{

    //Atributos
    private $largura;
    private $altura;

    //Construtor
    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    //Implementando os métodos da interface
    public function getTipo()
    {
        return "Quadrado";
    }

    public function getArea()
    {
        return $this->largura * $this->altura;
    }
}

class Circulo implements Forma
{

    //Atributo
    private $raio;

    //Construtor
    public function __construct($r)
    {
        $this->raio = $r;
    }

    //Implementando os métodos da interface
    public function getTipo()
    {
        return "Circulo";
    }

    public function getArea()
    {
        return pi() * ($this->raio * $this->raio);
    }
}

//Criação do objeto
$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

//Array dos objetos
$objetos = [
    $quadrado,
    $circulo
];

//Fazendo um foreach do array objetos
foreach ($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();

    echo "AREA" . $tipo . " : " . $area . "<br/>";
}
