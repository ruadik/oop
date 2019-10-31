<?php
try {
    $DSN = 'mysql:host=192.168.10.10; dbname=oop; charset=utf8';
    $login = 'homestead';
    $pass = 'secret';
    $options = '';
    $pdo = new PDO($DSN, $login, $pass);
//var_dump($pdo);
}catch (PDOException $e){
    echo "Возникла ошибка соединения - ".$e->getMessage();
    exit();
}