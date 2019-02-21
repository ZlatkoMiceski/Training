<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 1/10/19
 * Time: 7:13 PM
 */

//require 'index.view.php';
require '../controllers/selectall.php';
require '../controllers/Queries.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//$display = selectAll('Players');
//var_dump($display);

$ttr = new Queries();
$disp = $ttr->selectthemall('Players');
//var_dump($disp);


$disppl = $ttr->selectPlayerbyName('Players', 'Name', 'Ryan');
//var_dump($disppl);

require 'index.view.php';
