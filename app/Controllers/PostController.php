<?php

namespace app\Controllers;


use App\Database\AppDatabase;
use App\View\View;
use App\Controllers\Controller;

class PostController extends Controller
{

    public string $name = 'test';

    public function __construct()
    {

    }


    public function show() {
    }

    public function create(): void
    {

    }

    public function test(): void
    {
        echo 'test';
    }

    public function store(): void
    {
        echo 'hi 111';
    }


    public function __destruct()
    {

    }
}