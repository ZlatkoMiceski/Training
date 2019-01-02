<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/26/18
 * Time: 7:52 PM
 */

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users'));
    }

    public function store()
    {
        App::get('database')->insert('users',[
            'name' => $_POST['name']
        ]);

        return redirect('users');

        //header('Location: /users');

    }
}