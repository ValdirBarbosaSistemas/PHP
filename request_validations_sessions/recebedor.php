<?php

/**
 * Método para pegar os dados do formulário no html
 */
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); //Validação de email
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); // Ele vai alterar os dados para ficar de acordo com o que foi proposto
/** O filterInput serve para pegar os dados da pagina e verifica
 *  se ta preenchido entre outras coisas. O PRIMEIRO PARAMETRO DIZ QUAL FOI
 *  O TIPO DE MÉTODO QUE FOI USADO/COLOCADO NO FORMULARIO. A SEGUNDA INFORMAÇÃO
 *  É O NOME DO CAMPO INFORMADO NO HTML
 */
if ($nome && $idade) {
    echo 'NOME: ' . $nome . '<br/>';
    echo 'EMAIL: ' . $email . '<br/>';
    echo 'IDADE: ' . $idade;
} else {
    //    echo 'Não foi enviado os dados!!!';
    /**Para voltar para a página principal (redirecionar), usamos um 'truque' que é
     * usarmos a função 'header' junto com a troca da informação 'Location'.
     */
    header("Location: index.php"); //Redirecionando para a pagina 'index.php'
    exit;
    /**
     * OBS: SÓ PODE FAZER TROCA DE HEADER QUANDO NÃO É ENVIADO NENHUMA 
     * INFORMAÇÃO PARA TELA/NAVEGADOR. OUTRA COISA É QUE SEMPRE QUANDO SAIR DO HEADER, 
     * TEM QUE SE COLOCAR O (EXIT), PARA O PROGRAMA NÃO FICAR EXECUTADO EM SEGUNDO
     * PLANO, OU SEJA, PARA CANCELAR A APLICAÇÃO.
     */
}
