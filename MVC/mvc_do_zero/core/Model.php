<?php

class Model
{
    protected $db;

    public function __construct()
    {
        global $db; //chamando o db feito no CONFIG
        $this->db = $db;
    }
}