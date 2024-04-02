<?php

namespace core;

class Auth
{
    public static function user(): int|null
    {
        return $_SESSION['user_id'] ?? null;
    }

    public static function login(int $user_id)
    {
        $_SESSION['user_id'] = $user_id;
    }

    public static function logout()
    {
        session_unset();
        session_destroy();
    }
}