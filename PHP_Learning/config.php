<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/20/18
 * Time: 4:34 PM
 */

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'zlatko',
        'password' => '123zlatko',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]

];