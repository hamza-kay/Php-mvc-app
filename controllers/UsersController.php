<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/11/2018
 * Time: 22:33
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

        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');



    }

}