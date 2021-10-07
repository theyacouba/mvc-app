<?php

namespace App\Controllers;

class Controller
{
    public function render($path, array $vars = [])
    {
        extract($vars);
        ob_start();
        require('templates/'. $path .'.view.php');
        $view = ob_get_clean();
        require 'templates/layout.view.php';
    }
}