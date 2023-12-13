<?php

namespace app\Controllers;

class Controller
{

    public string $name = 'controller';


    public function showView($view)
    {
        echo $view;
        return;
    }

}