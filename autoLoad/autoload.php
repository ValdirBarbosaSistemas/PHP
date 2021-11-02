<?php

spl_autoload_register(function ($class) {
    // Caso voce queira fazer de uma maneira "restrita" pode ser nessa forma
    if (file_exists('classes/' . $class . '.php')) {
        require 'classes/' . $class . '.php'; // Aqui ele ta chamando todos os arquivos/classe com o final '.php'
    }
});

/**Voce cria uma funcao chamada (spl_autoload_register) para
 * fazer o registro do mesmo, e dentro do parametro se cria uma
 * função anônima. Dentro do parâmetro dela se coloca uma variável
 * que será a classe que voce ta chamando. E dentro da função anônima
 * se coloca o require que voce irá usar. Para boas práticas de
 * desenvolvimento em PHP cria-se um arquivo 'autoload.php' para
 * facilitar a criação de requires.
 */
