<?php

namespace Core;

use PDO;
use PDOException;

class Database
{
    private static $connection = null;

    public static function connect()
    {
        if (self::$connection === null) {
            try {
                $config = require_once __DIR__ . '/../config/config.php';
                self::$connection = new PDO(
                    "mysql:host={$config['host']};dbname={$config['database']}",
                    $config['user'],
                    $config['password']
                );
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erro na conexão com o banco de dados: ' . $e->getMessage());
            }
        }

        return self::$connection;
    }
}
