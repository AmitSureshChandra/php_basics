<?php

class QueryBuilder
{
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table,$data){
        $sql = sprintf("insert into %s (%s) values (%s)",
                    $table,
                    implode(', ', array_keys($data)),
                    ':'.implode(', :', array_keys($data)),
                );

//        $statement->bindParams(':name',$data['name']);  // for single level binding

        /*

            dd(array_map(function ($val){
                return ": $val";
            }, array_values($data)));

        */

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);

        header("location : /");
    }
}