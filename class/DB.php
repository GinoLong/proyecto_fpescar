<?php

// conexión a DB con patron singleton
class Database
{
    static private $database;
    
    const DB_DSN = 'mysql:host=127.0.0.1;dbname=proyecto_fpescar';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    static public function getConnection()
    {
        if (!isset(self::$database)) {
            self::$database = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASSWORD);
        }
        return self::$database;
    }

    static public function getStatement($query)
    {
        return self::getConnection()->prepare($query);
    }
}