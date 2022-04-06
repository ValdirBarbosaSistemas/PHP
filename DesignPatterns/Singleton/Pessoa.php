<?php

use function PHPUnit\Framework\isNull;

/**
 * SINGLETON É UM PADRÃO DE PROJETO QUE VOCE NÃO
 * PODE INSTANCIAR VÁRIOS OBJETOS, APENAS UM.
 */

class Pessoa
{
    /**
     * Para isso, criamos um método estático para a instanciação
     * do objeto no próprio método e criamos também um construtor
     * privado, para que ninguém possa instanciar um novo objeto.
     */
    private string $nome;
    private int $idade;

    public static function getInstance()
    {
        static $instance = null;
        if (isNull($instance)) {
            $instance = new Pessoa();
        }
        return $instance;
    }

    private function __construct()
    {

    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }
}
//$cara = new Pessoa(); //VAI DAR ERRO PORQUE O CONSTRUTOR ESTÀ PRIVADO

$cara = Pessoa::getInstance(); //Com isso, não criamos um método através do NEW e sim acessando o método estático
$cara->setNome("Valdir");

echo "Meu nome é: " . $cara->getNome();

$cara2 = Pessoa::getInstance();
$cara2->getNome(); //Aqui ele vai pegar os dados do "Cara"
$cara2->setIdade(35);

echo "Meu novo nome é: " . $cara2->getNome();
echo "Minha idade é: " . $cara->getIdade(); //Aqui ele vai mostrar a idade declarada no $cara2 porque a instância é a mesma.
