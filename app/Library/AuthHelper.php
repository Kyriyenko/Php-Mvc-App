<?php

namespace app\Library;

class AuthHelper
{

    public static function addUser(array $data): void
    {
        $_SESSION['user'] = $data;
    }

    public static function removeUser(): void
    {
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
    }

    public static function isAuth(): bool
    {
        return isset($_SESSION['user']['user_id']);
    }

    public static function getUserRole()
    {
        return $_SESSION['user']['user_role'] ?? null;
    }

    public static function getId()
    {
        return $_SESSION['user']['user_id'] ?? null;
    }
}