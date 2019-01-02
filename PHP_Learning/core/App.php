<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/26/18
 * Time: 4:16 PM
 */

class App
{
    protected  static $registry = [];


    public static function bind($key, $value)
    {
        static::$registry[$key]=$value;
    }


    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container");
        }

        return static::$registry[$key];

    }
}