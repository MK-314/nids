<?php
ob_start();
session_start();
class MyPDO{
    public static string $host = 'localhost';
    public static string $db_name = 'snort';
    public static string $username = 'root';
    public static string $password = '';

    public static PDO $pdo;

    public static function MakeConnection(){
        MyPDO::$pdo = new PDO('mysql:host=' . MyPDO::$host . ';dbname=' .  MyPDO::$db_name,  MyPDO::$username,  MyPDO::$password);
        MyPDO::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}


?>