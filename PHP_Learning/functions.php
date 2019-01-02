<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/18/18
 * Time: 3:46 PM
 */


//function connetctToDb ()
//{
//    try {
//        return new PDO('mysql:host=127.0.0.1; dbname=mytodo','zlatko', '123zlatko' );
//    } catch (PDOException $e) {
//        die('Could not connect');
//    }
//}

//function fetchAllTasks($pdo)
//{
//    $statementt = $pdo->prepare('select * from todos');
//    $statementt->execute();
//
//    return $statementt->fetchAll(PDO::FETCH_CLASS, 'Task');
//}


function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '<pre>';
}

function UnderAge ($age)
{
    if ($age < 21)
    {
        echo "Entrance not allowed";
    }
    else
    {
        echo "Entrance allowed";
    }
}