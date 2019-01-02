<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/21/18
 * Time: 7:05 PM
 */

class Request
{
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/');
        //return trim($_SERVER['REQUEST_URI'], '/');

    }



    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}