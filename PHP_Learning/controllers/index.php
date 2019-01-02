<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/20/18
 * Time: 7:32 PM
 */

//require 'functions.php';
//require 'Task.php';
//$query = require '../core/bootstrap.php';


//$tasks = $app['database']->selectAll('todos');

//$users = $app['database']->selectAll('users');
$users = App::get('database')->selectAll('users');


require 'views/index.view.php';