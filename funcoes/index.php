<?php

//---------------------DEFININDO FUNÇÃO

function subsequente()
{
    for ($q = 0; $q < 10; $q++) {
        echo $q . "<br/>";
    }
    echo "<hr/>";
}

subsequente();

//---------------------FUNÇÃO POR PARÂMETRO

function somar($num1, $num2)
{
    $total = $num1 + $num2;
    return $total;
}

$soma = somar(10, 5);
echo "Total: " . $soma;
echo "<hr/>";
//--------------------PARÂMETRO OPCIONAL/VALOR PADRÃO/DEFINIR TIPO DE DADO

function somar1(int $num1, int $num2, $num3 = 0)
{
    $total = $num1 + $num2 + $num3;
    return $total;
}

$soma = somar(10, 5, 2);
echo "Total: " . $soma;

//---NO PHP 8.1 FOI LANÇADO O 'NAMED ARGUMENTS' OU SEJA, PODEMOS MODIFICAR O VALOR DOS PARÂMETROS DA SEGUINTE FORMA

function adicionar($a = 1, $b = 10, $c = 30)
{
    return $a + $b + $c;
    //SE EU QUISER MUDAR SOMENTE O VALOR DO PARÂMETRO 'C' FAZEMOS DESSA FORMA
}

adicionar(c: 100); //Basta dizer qual o parâmetro e colocando o sinal de ':' junto com o valor desejado

echo "<hr/>";
//-------------------REFERÊNCIA OU VALOR

//VALOR
function somar2($n1, $n2)
{
    $total = $n1 + $n2;
    return $total;
}

$x = 3;
$y = 2;
$soma = somar2($x, $y);

echo "Total: " . $soma;

//REFERÊNCIA
function somar3($n1, $n2, &$total) //Para se usar a variável por referência, usa-se o sinal '&' antes da variável
{
    $total = $n1 + $n2; //Aqui ele ja está modificado
}

$x = 3;
$y = 2;
//$soma = somar2($x, $y);
$soma = 0;

somar($x, $y, $soma); //O resultado será 5

echo "Total: " . $soma;
echo "<hr/>";
//-------------------FUNÇÕES ANÔNIMAS

$dizimo = function (int $valor) {
    return $valor * 0.1;
};
echo $dizimo(100);

$funcao = $dizimo;
echo $funcao(1000);
/**
 * FUNÇÕES ANÔNIMAS SÃO FUNÇÕES SEM NOME E QUE TAMBÉM PODEM SER USADAS/CHAMADAS
 * EM OUTRAS FUNÇÕES. OBS: EM FUNÇÕES ANÔNIMAS, SEMPRE É USADO NO FINAL DAS CHAVES '{}' O SINAL DE PONTO E VÍRGULA ';'
 */
echo "<hr/>";
//------------------ARROW FUNCTIONS

$dizimo = fn ($valor) => $valor * 0.1;
echo $dizimo(1000);
/**
 * Arrow functions é uma função ANÔNIMA que não precisa de return e toda sua declaração é 'fn'
 * junto com o sinal da flecha '=>'. NÃO SE USA RETURN
 */
echo "<hr/>";
//------------------FUNÇÕES RECURSIVAS

function dividir(int $numero)
{
    $metade = $numero / 2;
    echo $metade . "<br/>";

    if (round($metade) > 0) { //O round serve para arredondar um número em PHP
        dividir($metade);
        //Função recursiva serve para ser usada nela mesma
    }
}

dividir(100);
echo "<hr/>";


//---------------------FUNÇÕES CLOSURES

//SÃO FUNÇÕES ANÔNIMAS QUE PODEM USAR VARIÁVEIS DO ESCOPO GLOBAL...


$x = 20;
$y = 30;

$minhaClosure = function($z) use ($x, $y) {
    echo "$z - $x - $y";
    $y += 1000; //Esta instrução não vai alterar o valor de Y
};


//---------------------FUNÇÕES NATIVAS (MATEMÁTICA)

$numero = -8.4;
echo abs($numero); //número absoluto

echo pi(); //Cálculo do pi

$numero = 2.7;
echo floor($numero); //Arredonda para baixo

echo ceil($numero); //Arredonda para cima

echo round($numero, 2); //Aqui ele ta arredondando e colocando 2 casas decimais

$aleatorios = rand(1, 10); //Números aleatórios (primeiro é o valor mínimo, depois o máximo)

echo $aleatorios;

$lista = [1, 9, 5, 7, 2, 6];
echo max($lista); //Qual o maior número da lista
echo min($lista); //Qual o menor número da lista
echo "<hr/>";
//VER NA DOCUMENTAÇÃO DO PHP TODOS OS TIPOS DE FUNÇÕES MATEMÁTICAS NATIVAS

//------------------------FUNÇÕES NATIVAS (STRINGS)

$nomeSujo = '  Bonieky Lacerda';
$nomeLimpo = trim($nomeSujo); //Tirando os espaços

echo "Nome Sujo: " . strlen($nomeSujo) . "<br/>"; //Ver o tamanho da string
echo "Nome Limpo: " . strlen($nomeLimpo);

$nome = 'Valdir Barbosa';

echo strtolower($nome); //MINUSCULA
echo strtoupper($nome); //MAIUSCULA

$nomeAlterado = str_replace('Barbosa', 'Junior', $nome);
echo $nomeAlterado;
echo "<hr/>";
//-----------------------FUNÇÕES NATIVAS (ARRAY)

$lista = ['nome1', 'nome2', 'nome3', 'nome4'];
echo "Total: " . count($lista); //Diz quantos elementos tem no array
$numeros = [10, 20, 24, 91, 18];

$filtrados = array_filter($numeros, function ($item) {
    if ($item < 30) {
        return true;
    } else {
        return false;
    }
});
print_r($filtrados);

$dobrados = array_map(function ($item) {
    return $item * 2;
}, $numeros);

array_pop($numeros); // Remove o último item do array
array_shift($numeros); // Remove o primeiro item

//verificar se existe um item no array
if (in_array(90, $numeros)) {
    echo 'Existe';
} else {
    echo 'Não existe';
}

$pos = array_search(91, $numeros);
//mesma coisa do código acima PORÉM ele só retorna o elemento ou não
echo "<hr/>";
//--------------------------FUNÇÕES DATA E HORA

echo date('d/m/Y H:i:s');
//VER MAIS SOBRE A BIBLIOTECA DE DATE DO PHP


//No PHP 8.1 chega o VARARGS ou o VARIADIC PARAMETER como é chamada originalmente

function minha_funcao(...$argumentos)
{
    foreach ($argumentos as $args) {
        echo "$args<br>";
    }
}

minha_funcao(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);


function soma(int ...$valores): string {
    return array_sum($valores);
}
/**
 * No código acima, ele faz um spread de INTEIROS, ou seja,
 * TODOS OS PARÂMETROS da função só receberão valores INTEIROS.
 * O tipo de retorno da função é do tipo STRING. O método
 * array_sum serve para somar todos os valores que irão ser 
 * recebidos no parâmetro
 */