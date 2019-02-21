<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 1/11/19
 * Time: 4:26 PM
 */


function selectAll ($table) {
$config = require '../config.php';

try {
    //return new PDO('mysql:host=127.0.0.1; dbname=mytodo','zlatko', '123zlatko' );
    $pdo = new PDO($config['connection'].';dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']);
} catch (PDOException $e) {
    die($e->getMessage());
}


$sql = "select * from $table ";
try {
    $statement1 = $pdo->prepare($sql);
    $statement1->execute();
    return $statement1->fetchAll(PDO::FETCH_CLASS);
} catch (Exception $e) {
    die ($e->getMessage());
}

};
 //return var_dump($statement1->fetchAll(PDO::FETCH_CLASS));