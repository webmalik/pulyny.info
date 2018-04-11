<?php

/*** Front Controller ***/

/*** 1. Загальні налаштування ***/

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();

/*** 2. Підкючення файів системи***/
    define('ROOT', dirname(__FILE__));
    define('HOST', $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']);
    require_once(ROOT . "/components/Autoload.php");

/*** 3. Виклик Router ***/
    $router = new Router();
    $router ->run();

?>