<?php
//echo "URL: " . $_GET['url'];
session_start();
require 'config.php'; //chamando as configurações criadas do banco

/**
 * Crindo um autoload para quando for instanciar as classes, procurá-las no model,
 * controller ou no core que é onde podem existir classes. Porque não no view?
 * Porque no view só tem HTML
 *
 */
spl_autoload_register(function ($class) {
    if (file_exists('controller/' . $class . '.php')) {
        require 'controller/' . $class . '.php';
    } else if (file_exists('model/' . $class . '.php')) {
        require 'model/' . $class . '.php';
    } else if (file_exists('core/' . $class . '.php')) {
        require 'core/' . $class . '.php';
    }
});

$core = new Core();
$core->run();

