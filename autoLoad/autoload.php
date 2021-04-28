<?php
spl_autoload_register(function ($class) {
    // Caso voce queira fazer de uma maneira "restrita" pode ser nessa forma
    if (file_exists('classes/' . $class . '.php')) {
        require 'classes/' . $class . '.php'; // Aqui ele ta chamando todos os arquivos/classe com o final '.php'
    }
});
/** Para boas práticas de desenvolvimento em PHP cria-se um arquivo
 *  'autoload.php' para facilitar a criação de requires
 */ 