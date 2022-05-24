<?php

abstract class CarroFactory
{
    abstract public function montarRoda(): Roda;

    abstract public function montarSom(): Som;
}