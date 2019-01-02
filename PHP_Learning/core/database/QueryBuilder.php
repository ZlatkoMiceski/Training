<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/19/18
 * Time: 9:36 PM
 */



class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }


    public function selectAll($table)
    {
        $statementt = $this->pdo->prepare("select * from $table");
        $statementt->execute();

        return $statementt->fetchAll(PDO::FETCH_CLASS);
    }



    public function insertRow($table, $description)
    {
        $statement = $this->pdo->prepare("insert into $table (name) values ('$description')");
        $statement->execute();
    }



    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', ', array_keys($parameters))
        );
        //var_dump($sql);die();
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}