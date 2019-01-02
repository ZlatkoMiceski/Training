<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/26/18
 * Time: 5:04 PM
 */

class PagesController
{
    public function home()
    {
        return view('index');

//        $users = App::get('database')->selectAll('users');
//        //require 'views/index.view.php';
//        return view('index', ['users' => $users]);

    }

    public function about()
    {
        //require 'views/about.view.php';
        return view('about');
    }

    public function contact()
    {
        //require 'views/contact.view.php';
        return view('contact');
    }

}
