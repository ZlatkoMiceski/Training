<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 1/9/19
 * Time: 7:53 PM
 */

//require '../views/index.view.php';
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

//try {
//$statement1 = $pdo->prepare('insert into Players (Name, Lastname, JerseyNumber, Height, Weight, BirthDate, Position, Bio)
//values ("Nicolas",
//"Brooklin",
//"10",
//"199",
//"93",
//"1978-6-6",
//"B",
//"some bio")');
//$statement1->execute();
//} catch (Exception $e) {
//    die ($e->getMessage());
//}

$player = [
    'namet'=>$_POST['namet'],
    'LastName'=>$_POST['lastname'],
    'JerseyNumber'=>$_POST['jerseynumber'],
    'Height'=>$_POST['height'],
    'Weight'=>$_POST['weight'],
    'BirthDate'=>$_POST['birthdate'],
    'Positiont'=>$_POST['positiont'],
    'Bio'=>$_POST['bio'],
    'TeamID'=>$_POST['teamid'],
];
//die(var_dump($player));

$sql = "insert into Players (Name, Lastname, JerseyNumber, Height, Weight, BirthDate, Position, Bio, TeamID)
values (:namet, :LastName, :JerseyNumber, :Height, :Weight, :BirthDate, :Positiont, :Bio, :TeamID)";

try {
    $statement1 = $pdo->prepare($sql);
    $statement1->execute($player);
} catch (Exception $e) {
    die ($e->getMessage());
}


header('Location: ../admin/index.php');


//try {
//    $statement1 = $pdo->prepare('insert into Players (Name, Lastname, JerseyNumber, Height, Weight, BirthDate, Position, Bio)
//values (
//$_POST["name"],
//$_POST["lastname"],
//$_POST["jerseynumber"],
//$_POST["height"],
//$_POST["weight"],
//$_POST["birthdate"],
//$_POST["position"],
//$_POST["bio"]
//)');
//    $statement1->execute();
//} catch (Exception $e) {
//    die ($e->getMessage());
//}