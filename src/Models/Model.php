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

    public function find(int $id): array
    {
        $database = new Database;
        $pdo = $database->pdo();

        $q = $pdo->prepare("SELECT * FROM $this->table WHERE id = :id");
        $q->execute([
            'id' => $id
        ]);

        return $q->fetch();
    }

    public function delete(int $id)
    {
        $database = new Database;
        $pdo = $database->pdo();

        $q = $pdo->prepare("DELETE FROM $this->table WHERE id = :id");
        $q->execute([
            'id' => $id
        ]);
    }
}