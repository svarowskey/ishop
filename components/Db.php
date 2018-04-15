<?php


    class Db
    {
        public static function getConnection()
        {
            //Получаем параметры для подключения из файла
            $paramsPath = ROOT.'/config/db_params.php';
            $params = include($paramsPath);

            //Подключаем БД и получаем объект класса PDO
            $dsn    = "mysql:host={$params['host']}; dbname={$params['dbname']}";
            $db     = new PDO($dsn, $params['user'], $params['password']);

            //Ставим кодировку БД в utf8
            $db->exec('set names utf8');

            return $db;
        }
    }