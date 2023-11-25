<?php
interface SessionManagerInterface
{
    public static function startSession();
    public static function get($key);
    public static function set($key, $value);
    public  static function destroySession();
    public static function isset($key);
    public static function unset($key);
}
