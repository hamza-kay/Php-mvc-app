<?php
/**
 * Created by PhpStorm.
 * User: Saleem
 * Date: 14/11/2018
 * Time: 01:21
 */

class Connection
{

    public static function make()
    {
        try {


            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'naeema123');



        } catch (PDOException $e) {

            die($e->getMessage());
        };

    }


}