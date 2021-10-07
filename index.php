<?php

use App\Controllers\PostController;

require 'vendor/autoload.php';
$postController = new PostController;

$path = $_SERVER['PATH_INFO'];

switch ($path) {
    case '/':
        echo '<h1>Welcome</h1>';
        break;
    
    case '/posts':
        $postController->index();
        break;

    case '/post':
        $postController->show();
        break;
    
    default:
        echo '<h1>404 Not found</h1>';
        break;
}
