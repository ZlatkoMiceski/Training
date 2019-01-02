<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/24/18
 * Time: 5:33 PM
 */

class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title=$title;
        $this->published=$published;
    }
}

$posts = [
    new Post('My first Post', true),
    new Post('My second Post', true),
    new Post('My third Post', true),
    new Post('My fourth Post', false),
];


// Part from input view from My Taks task :)

//<ul>
//
//    <?php foreach ($tasks as $task) : ?>
<!---->
<!--        <li>--><?//= $task->description; ?><!--</li>-->
<!---->
<!---->
<!--    --><?php //endforeach;?>
<!--</ul>-->