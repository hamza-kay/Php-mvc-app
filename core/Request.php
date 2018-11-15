<?php
/**
 * Created by PhpStorm.
 * User: Saleem
 * Date: 15/11/2018
 * Time: 22:06
 */

class Request
{

    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }

}