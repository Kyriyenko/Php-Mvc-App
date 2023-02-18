<?php

namespace app\Controllers;


use App\Route\Route;
use App\View\View;

class PostController
{
    public function create($post): void
    {
        echo View::view('post.post', compact('post'));
    }

    public function test(): void
    {
        echo 'test';
    }

    public function store(): void
    {
        echo 'hi 111';
    }
}