<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 1/17/19
 * Time: 5:25 PM
 */
require '../controllers/selectall.php';
require '../controllers/Queries.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//$display = selectAll('Players');
//var_dump($display);

$ttr = new Queries();
$dispteam = $ttr->selectthemall('Team');

$clickteam = ($_GET['name']);
$clickid = ($_GET['id']);
$disptm = $ttr->selectPlayerbyName('Team', 'TeamName', $clickteam); //Here should go some variables (maybe one) from click
//var_dump($clickteam);

$dispAllPlayersbyTeam = $ttr->selectinselect('Players', 'TeamID', 'Team', 'id', $clickid);
//var_dump($dispAllPlayersbyTeam);


require '../views/teams.view.php';