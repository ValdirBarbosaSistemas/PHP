<?php

/**
 * PADRÃO ADAPTER É UM PADRÃO DE PROJETO QUE SERVE PARA
 * "HERDAR" UMA CARACTERÍSTICA DE UM OBJETO
 */
class Pessoa
{
    //Classe modelo para o Adapter
    private string $nome;
    private int $idade;
    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }


    function getNome(): string
    {
        return $this->nome;
    }

    function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    function getIdade(): int
    {
        return $this->idade;
    }

    function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

/**
 * NESTA OCASIÃO, SUPONHAMOS QUE NÃO TEMOS ACESSO A ESSA CLASSE E 
 * QUEREMOS ALTERAR/EDITAR ALGUM DADO NELA. CRIAREMOS UMA "EXTENSÃO DELA, 
 * UM ADAPTER DELA PARA QUE POSSAMOS FAZER ISSO.
 * 
 */

}
class PessoaAdapter
{
    //Vamos supor que queremos incluir um sexo para a pessoa
    private string $sexo;
    private Pessoa $pessoa; //Criando uma propriedade do tipo Pessoa

    public function __construct(Pessoa $pessoa) //Quando for na hora da instanciação do objeto, ele vai criar de "Pessoa"

    {
        $this->pessoa = $pessoa;
    }

    function getSexo(): string
    {
        return $this->sexo;
    }

    function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }

    //Colocando os getters e setters de Pessoa
    function getNome(): string
    {
        return $this->pessoa->getNome();
    }

    function getIdade(): int
    {
        return $this->pessoa->getIdade();
    }


}

$pessoa = new Pessoa();
$pessoa->setNome("João"); //Modificando o nome de Pessoa
$pessoa->setIdade(20); //Modificando a idade de Pessoa

$pessoaAdapter = new PessoaAdapter($pessoa); //Aqui está reaproveitando os dados da classe Pessoa
$pessoaAdapter->setSexo("Masculino"); //Modificando o sexo para ambos

echo "Nome: " . $pessoaAdapter->getNome() . "<br>"; //Pegando os dados de Pessoa/PessoaAdapter
echo "Idade: " . $pessoaAdapter->getIdade() . "<br>";
echo "Sexo: " . $pessoaAdapter->getSexo() . "<br>";