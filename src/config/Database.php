<?php

namespace App\config;

use PDO;

class Database
{
    public function pdo(): PDO
    {
        $pdo = new PDO("mysql:host=localhost;dbname=mvc_app", 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        
        return $pdo;

    }
}