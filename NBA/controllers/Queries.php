<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 1/14/19
 * Time: 5:07 PM
 */

require 'Connection.php';
//$pdo = Connection::make();

class Queries
{
    public function selectthemall ($table)
    {
        $pdo=Connection::make();
        $sql = "select * from $table ";
        try {
            $statement1 = $pdo->prepare($sql);
            $statement1->execute();
            return $statement1->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }

    public function selectPlayerbyName ($table, $column, $value)
    {
        $pdo=Connection::make();
        $sql = "select * from $table where $column = '$value' ";
        try {
            $statement1 = $pdo->prepare($sql);
            $statement1->execute();
            return $statement1->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }

    public function selectinselect ($table1, $column1, $table2, $column2, $value)
    {
        $pdo=Connection::make();
        $sql = "select * from $table1 where $column1 in (select $column2 from $table2 where $column1 = '$value')";
        try {
            $statement1 = $pdo->prepare($sql);
            $statement1->execute();
            return $statement1->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }

}