<?php


class Auth
{
    public static function set()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    // 1 - Login
    public static function login()
    {
        $_SESSION['email'] = $user['email'];
        setcookie('email', $user['email'], time() + 3600 * 24 * 7, "/");
    }
    // 2 - Logout
    public static function logout()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        setcookie('email', null, time() -1);
    }
    // 3 - Helper check
    public static function check()
    {
        return isset($_SESSION['email']);
    }
    public static function guest()
    {
        return !self::check();
    }

    public static function checkRole(DB $db, $email)
    {
        $user = $db->emailDbSearch($email);
        if ($user['role'] == 7) {
            return true;
        } else {
            return false;
        }
    }
}