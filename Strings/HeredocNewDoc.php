<?php

//Funções HEREDOC

$nome = "Valdir Barbosa";
$texto = <<<EXEMPLO
Olá sr. $nome, isto é um exemplo de HEREDOC, que é uma propriedade
da String que é parecida com o uso das aspas duplas. A diferença é
na questão de se declarar o HEREDOC e também independente do texto,
ELE NÃO PULA A LINHA. A declaração do HEREDOC se dá com o sinal de
"<<<" mais o nome do "campo/variável" e colocando o mesmo nome no
final do bloco. LEMBRANDO TAMBÉM QUE O HEREDOC MOSTRA A VARIÁVEL
DECLARADA, ASSIM COMO NA FUNCIONALIDADE DAS ASPAS DUPLAS.
EXEMPLO;

echo $texto;

echo "<br>";
echo "<br>";
echo "<br>";

$novo_nome = "Aline Cibelli";
$texto2 = <<<'EXEMPLO2'
Isso é um exemplo de NEWDOC. Vejamos que ele não mostra
a variável criada, ou seja, é a mesma coisa das aspas simples
>>>>>$novo_nome<<<<<
EXEMPLO2;

echo $texto2;