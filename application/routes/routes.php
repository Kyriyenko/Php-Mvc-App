<?php


function getRoutes()
{
    return [
        '/login' => [
            'controller' => 'account',
            'action' => 'login'
        ],

        '/news' => [
            'controller' => 'news',
            'action' => 'show'
        ]
    ];
}




