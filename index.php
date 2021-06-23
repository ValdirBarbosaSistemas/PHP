<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//Create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

//and records to the log
$log->warning('Foo');
$log->error('Bar');

/**
 * Para se utilizar o composer em seus projetos, basta ir no arquivo "composer.json"
 * e criar o (caminho/referenciar) do autoload lá. OBS: PARA DAR UM RELOAD NO AUTOLOAD BASTA NO TERMINAL
 * DIGITAR O COMANDO (COMPOSER DUMP-AUTOLOAD)
 */
