<?php

class CarroLuxoFactory extends CarroFactory
{

    public function montarRoda(): Roda
    {
        return new RodaLigaLeve();
    }

    public function montarSom(): Som
    {
        return new Paredao();
    }
}