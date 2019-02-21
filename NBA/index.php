<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 1/9/19
 * Time: 3:09 PM
 */

$config = require 'config.php';
require 'views/index.view.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//try {
//$pdo = new PDO($config['connection'].'dbname='.$config['name'],
//    $config['username'],
//    $config['password'],
//    $config['options']);
//} catch (PDOException $e) {
//    die('Could not connect');
//}


//Connection to the database:

//try {
//    //return new PDO('mysql:host=127.0.0.1; dbname=mytodo','zlatko', '123zlatko' );
//    $pdo = new PDO($config['connection'].';dbname='.$config['name'],
//        $config['username'],
//        $config['password'],
//        $config['options']);
//} catch (PDOException $e) {
//    die($e->getMessage());
//}



try {
    //return new PDO('mysql:host=127.0.0.1; dbname=mytodo','zlatko', '123zlatko' );
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','zlatko','123zlatko');
} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from Players');
$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_OBJ));

//Same as above but fixed with a class

//$try = new Queries();
//
//$form = $try->selectthemall('Players');
//var_dump($try);




//try {
//$statement1 = $pdo->prepare('insert into Players (Name, Lastname, JerseyNumber, Height, Weight, BirthDate, Position, Bio)
//values ("James","Knockville","33","193","95","1988-5-5","C","Short bio")');
//$statement1->execute();
//} catch (Exception $e) {
//    die ($e->getMessage());
//}




