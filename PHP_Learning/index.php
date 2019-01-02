<?php

//require 'functions.php';
//require 'Task.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';


//$router = new Router();

//require 'routes.php';

$uri = (trim($_SERVER['REQUEST_URI'], '/'));
//var_dump(trim($_SERVER['REQUEST_URI'], '/'));

//require $router->direct($uri);
//require $router->direct('about');



Router::load('routes.php')->direct(Request::uri(), Request::method());




//var_dump($_SERVER['REQUEST_URI']);

//$names = ['Goce', 'Mile', "Pece"];
//$person = [
//    'age' => 29,
//    'hair' => 'brown',
//    'career' => 'developer'
//];
//
//$person['name'] = 'Zlatko';
//unset($person['hair']); //remove element from array
//
//$task = [
//    'title' => 'Homework',
//    'due' => 'today',
//    'assignet_to' => 'Zlatko',
//    'completed' => true
//];
//echo ucwords("some text with samll letters");
//
//function dumpdm($eden, $dva, $tri)
//{
//    var_dump($eden, $dva, $tri);
//}
//
//
//
//dumpdm("ff", "Mins", "Triplet");
//UnderAge(23);
//echo "<br>";
//echo "<br>";
//echo "<br>";
//
//class Task {
//
//    public $description;
//    public $completed = false;
//
//    public function __construct($description)
//    {
//        $this->description=$description;
//    }
//    public function isComplete()
//    {
//        return $this->completed;
//    }
//    public function complete()
//    {
//        $this->completed = true;
//    }
//}
// $task = new Task('Go to the store');
//$task->isComplete();
//
//var_dump($task);
//$task->complete();
//var_dump($task->isComplete());
//echo "<br>";
//echo "<br>";
//$tasks = [
//    new Task('Go to the store(array)'),
//    new Task('Finish my lesson'),
//    new Task('Clean city')
//];

//var_dump($tasks);

//var_dump --->  Echo whole array var_dump($array)


//$pdo = Connection::make();
//$query = new QueryBuilder($pdo);

//$tasks = $query->selectAll('todos');

//$pdo = connetctToDb();
//$tasks = fetchAllTasks($pdo);

//var_dump($ress[1]->description);

//require 'index.view.php';

//class Post
//{
//    public $title;
//    public $published;
//
//    public function __construct($title, $published)
//    {
//        $this->title=$title;
//        $this->published=$published;
//    }
//}
//
//$posts = [
//    new Post('My first Post', true),
//    new Post('My second Post', true),
//    new Post('My third Post', true),
//    new Post('My fourth Post', false),
//];
//
//require 'functions.php';
//
//dd($posts);


