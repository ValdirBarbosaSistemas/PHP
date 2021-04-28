<?php
// Para declararmos o autoload é da seguinte forma...
spl_autoload_register(function ($class) {
    // Caso voce queira fazer de uma maneira "restrita" pode ser nessa forma
    if (file_exists('classes/' . $class . '.php')) {
        require 'classes/' . $class . '.php'; // Aqui ele ta chamando todos os arquivos/classe com o final '.php'
    }
});
/**Voce cria uma funcao chamada (spl_autoload_register) para 
 * fazer o registro do mesmo, e dentro do parametro geralmente
 * é criado uma funcao anônima e dentro do parâmetro dela se coloca
 * a 'classe' que voce ta chamando. E dentro da função anônima se 
 * coloca o require que voce quer usar.


$m = new Matematica();
echo $m->somar(10, 20);