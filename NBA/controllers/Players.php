<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 1/15/19
 * Time: 8:06 PM
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

$clickplayer = ($_GET['name']);
$disppl = $ttr->selectPlayerbyName('Players', 'Name', $clickplayer); //Here should go some variables (maybe one) from click
//$plyrNm = $disppl[0]->Name;
//var_dump($plyrNm);


$clickplayerTeam = ($_GET['TeamId']);
$dispplyrteam = $ttr->selectPlayerbyName('Team', 'id', $clickplayerTeam);
//var_dump($clickplayerTeam);
//var_dump($dispplyrteam);

//var_dump($disppl);



require '../views/players.view.php';