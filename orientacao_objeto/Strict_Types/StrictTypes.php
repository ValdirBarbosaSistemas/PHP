<?php
use PhpParser\Node\Stmt\Declare_;

declare(strict_types = 1);

/**No código acima, eu informo que TODA classe deve estar TIPADA 
 * de acordo com a variável informada. OBS: AO COLOCAR O (strict_types),
 *deve ser acima da classe.
 */

class StrictTypes
{

    /**
     * NO PHP 7.4 AO 8.1 FOI INICIADO UM PROJETO PARA DEIXAR
     * MAIS "RESTRITO" AS DECLARAÇÕES DE VARIÁVEIS, FUNÇÕES,
     * PARÂMETROS DENTRE OUTROS, PARA DEIXAR A LINGUAGEM UM
     * POUCO MAIS "TIPADA".
     */

    function falar(string $mensagem)
    {
        echo $mensagem; // Parâmetro que só aceita tipos string
    }

    function somar(int $n1, int $n2): int
    {
        return $n1 + $n2; //A função só recebe inteiros e RETORNA inteiros
    }

    function conversar(int|string $mensagem)
    {
        echo $mensagem; //Nos parâmetros só irão ser aceitos inteiros OU strings
    }

    function falar2(?string $mensagem)
    {
        echo $mensagem; //NULLABLE -> quer dizer que o parâmetro vai receber OU string OU NULO
    }

}