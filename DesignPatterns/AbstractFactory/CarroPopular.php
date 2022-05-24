<?php

class CarroPopular extends CarroFactory
{

    public function montarRoda(): Roda
    {
        return new RodaSimples();
    }

    public function montarSom(): Som
    {
        return new CdPlayer();
    }
}