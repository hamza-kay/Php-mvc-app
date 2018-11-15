<?php
/**
 * Created by PhpStorm.
 * User: Saleem
 * Date: 14/11/2018
 * Time: 01:25
 */

class QueryBuilder
{

    public function __construct($pdo)
    {
        $this->pdo = $pdo;

    }

    public function selectAll($table)
    {

        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return  ($statement->fetchAll(PDO::FETCH_CLASS));
    }

}