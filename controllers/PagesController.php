<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/11/2018
 * Time: 18:42
 */

class PagesController
{

    public function home()
    {





        return view('index');

    }

    public function about()
    {
        $company = 'Laracasts';

        return view('about', compact('company'));

    }

    public function contact()
    {
        return view('contact');

    }


}