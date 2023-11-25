<?php
include_once 'sessionManagerInterface.php';
class SessionManager implements SessionManagerInterface
{
    public static function startSession()
    {
        session_start();
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return null;
        }
    }

    public static function isset($key)
    {
        return isset($_SESSION[$key]);
    }

    public static function unset($key)
    {
        unset($_SESSION[$key]);
    }


    public static function destroySession()
    {
        session_destroy();
    }
}
