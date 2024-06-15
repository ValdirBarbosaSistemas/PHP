<?php

/**
 * NO PHP 8.1 EXISTEM OS "TRAITS", QUE NADA MAIS É QUE
 * UM GRUPO DE MÉTODOS QUE PODEM SER INSERIDOS DENTRO DE
 * CLASSES. FORAM ADICIONADOS À LINGUAGEM PARA AUMENTAR A
 * REUTILIZAÇÃO DE CÓDIGO. OS TRAITS SÃO DEFINIDOS COM A
 * EXPRESSÃO (trait), SEGUINDO PELO NOME E POR UM BLOCO
 * DE CÓDIGO.
 */

trait MinhasAbilidades
{
    public function falar($mensagem): string
    {
        return "Eu digo: $mensagem";
    }

    public function saltar(int $metros): string
    {
        return "Eu salto: $metros metros";
    }
}

class Humano
{
    use MinhasAbilidades; //Para chamar o trait criado basta colocar a palavra reservada 'use'
}

$human1 = new Humano();
echo $human1->falar("Hello World!!!");
echo $human1->saltar(3);
