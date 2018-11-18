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

        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'

        );

    }

    public static function method()
    {

        return $_SERVER['REQUEST_METHOD'];

    }

}