<?php

namespace App\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = new Post();
        $this->render('posts/index', ['posts' => $posts->findAll()]);
    }

    public function show()
    {
        $id = $_GET['id'];
        $post = new Post;
        
        $this->render('posts/show', ['post' => $post->find($id)]);

    }
}