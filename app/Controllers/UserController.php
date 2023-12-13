<?php

namespace app\Controllers;

use App\Library\AuthHelper;
use App\Models\User;
use App\View\View;
class UserController
{

    public function profile()
    {
        $user = User::get(AuthHelper::getId());

        echo View::view('user.profile', ['user' => $user]);
        die;
    }

    public function userCars()
    {
        echo View::view('user.userCars', ['id' => 32]);
        die;
    }


}