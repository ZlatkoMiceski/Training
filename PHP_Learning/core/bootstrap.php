<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/19/18
 * Time: 10:03 PM
 */

//$app = [];
//$app['config'] = require 'config.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

//require 'core/Router.php';
//require 'core/Request.php';
//require 'core/database/Connection.php';
//require 'core/database/QueryBuilder.php';


//$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

function view($name, $data=[])
{
    extract($data);
    return require "views/{$name}.view.php";
}


function redirect ($path)
{
    header("Location: /{$path}");
}