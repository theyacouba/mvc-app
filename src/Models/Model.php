<?php

namespace App\Models;

use App\config\Database;

class Model
{
    protected string $table;

    public function findAll(): array
    {
        $database = new Database;
        $pdo = $database->pdo();

        $q = $pdo->prepare("SELECT * FROM $this->table");
        $q->execute([]);

        return $q->fetchAll();
    }
}