<?php

namespace App\Models;

use PDO;

class Db
{
    private static $host = '172.20.0.2';
    private static $user = 'user';
    private static $pass = 'root';
    private static $dbName = 'form-app';

    public static function connect()
    {
        try {
            $db = new PDO('mysql:host=' . self::$host . ';dbname=' . self::$dbName, self::$user, self::$pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $exception){
            die("Error: " . $exception->getMessage());
        }
    }

}
