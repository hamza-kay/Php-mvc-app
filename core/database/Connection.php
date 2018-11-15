<?php
/**
 * Created by PhpStorm.
 * User: Saleem
 * Date: 14/11/2018
 * Time: 01:21
 */



class Connection
{

    public static function make($config)
    {
        try {


            return new PDO(

                $config['connection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config['options']

            );


        } catch (PDOException $e) {

            die($e->getMessage());
        }

    }


}