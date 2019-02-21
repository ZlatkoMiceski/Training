<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 1/9/19
 * Time: 3:50 PM
 */
return [

        'name' => 'mytodo',
        'username' => 'zlatko',
        'password' => '123zlatko',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]


];

//return [
//    'database' => [
//        'name' => 'mytodo',
//        'username' => 'zlatko',
//        'password' => '123zlatko',
//        'connection' => 'mysql:host=127.0.0.1',
//        'options' => [
//            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//        ]
//    ]
//
//];