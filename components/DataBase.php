<?php

class DataBase {
    
    public static function getConnection() {
        $paramsPath = ROOT . "/config/config.php";
        $params = include($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec("set names utf8");

        return $db;
    }
    
}