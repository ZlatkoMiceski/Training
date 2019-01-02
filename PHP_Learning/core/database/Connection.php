<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/19/18
 * Time: 9:24 PM
 */
class Connection
{
    public static function make($config)
    {
        try {
        //return new PDO('mysql:host=127.0.0.1; dbname=mytodo','zlatko', '123zlatko' );
        return new PDO($config['connection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config['options']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}