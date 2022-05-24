<?php

/**
 * O BRIDGE É UM PADRÃO DE PROJETO QUE PERMITE QUE VOCE
 * DIVIDA UMA CLASSE GRANDE OU UM CONJUNTO DE CLASSES
 * INTIMAMENTE LIGADAS EM DUAS HIERARQUIAS SEPARADAS (ABSTRAÇÃO
 * E IMPLEMENTAÇÃO) QUE PODEM SER DESENVOLVIDAS INDEPENDENTEMENTE
 * UMAS DAS OUTRAS.
 */
interface APIDesenhos
{
    public function desenharCirculo($x, $y, $radius);
}

class APIDesenho1 implements APIDesenhos
{

    public function desenharCirculo($x, $y, $radius)
    {
        echo "Desenhando Círculo, v1: " . $x . " - " . $y . " - " . $radius;
    }
}

class APIDesenho2 implements APIDesenhos
{

    public function desenharCirculo($x, $y, $radius)
    {
        echo "Desenhando Círculo, v2: " . $x . "-" . $y . "-" . $radius;
    }
}

abstract class Forma
{
    protected $api;
    protected $x;
    protected $y;

    public function __construct(APIDesenhos $api)
    {
        $this->api = $api;
    }
}

class Circulo extends Forma
{
    protected $radius;
}