<?php

require 'vendor/autoload.php';

use App\config\Database;
use App\Controllers\Controller;
use App\Models\Model;
use App\Models\Post;

$db = new Database();

$db->pdo();

$post = new Post;

var_dump($post->findAll());