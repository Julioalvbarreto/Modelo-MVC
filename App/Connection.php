<?php

namespace App;

use PDO;
use PDOException;

class Connection {

    public static function getDb(){
        try {
            $con = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $con;

        } catch (\PDOException $e){
            echo "erro ao conectar com o banco!";
        }
    }





}