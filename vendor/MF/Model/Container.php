<?php

namespace MF\Model;
use App\Connection;

class Container {

    public static function getModel($model) {

        $class = "\\App\\Models\\".ucfirst($model);

        echo $class;
        
        $conne = Connection::getDb();

        return new $class($conne);
    }
}