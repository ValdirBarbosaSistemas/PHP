<?php

class Usuario extends Model
{
    public function getNome()
    {
        $nome = 'Valdir JR';
        return $nome;
    }

    public function getIdade()
    {
        $idade = 12;
        return $idade;
    }
}