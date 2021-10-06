<?php

namespace App\Models;

use App\config\Database;

class Post extends Model
{
    protected string $table = "posts";

    protected string $title;
    protected string $description;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }


    public function create()
    {
        $database = new Database();
        $pdo = $database->pdo();
        
        $q = $pdo->prepare("INSERT INTO $this->table(title, description) VALUES (:title, :description)");
        $q->execute([
            'title' => $this->getTitle(),
            'description' => $this->getDescription()
        ]);
    }
}