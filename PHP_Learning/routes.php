<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/20/18
 * Time: 7:54 PM
 */


$router->get('','PagesController@home');
$router->get('about','PagesController@about');
//$router->get('about/culture','controllers/about-culture.php');
$router->get('contact','PagesController@contact');

//$router->post('names','controllers/add-name.php');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

//$router->define(
//    [
//        ''         => 'controllers/index.php',
//        'about'         => 'controllers/about.php',
//        'about/culture' => 'controllers/about-culture.php',
//        'contact'       => 'controllers/contact.php',
//        'names'         => 'controllers/add-name.php'
//    ]
//);



//$router->define('','controllers/index.php');
//$router->define('about','controllers/about.php');
//$router->define('about/culture','controllers/about-culture.php');
//$router->define('contact','controllers/contact.php');