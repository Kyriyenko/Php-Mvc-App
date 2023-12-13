<?php


namespace app\Controllers;

use App\Controllers\Controller;
use App\Database\AppDatabase;
use App\View\View;

class  AppController extends Controller
{
    public function home(): void
    {
       echo View::view('home', ['id' => 32]);
       die;
    }


    public function login(): void
    {
        echo View::view('auth.login');
        die;
    }


    public function registration() {
        echo View::view('auth.registration');
        die;
    }

    public function aboutUs()
    {
        echo View::view('aboutUs');
        die;
    }

}


