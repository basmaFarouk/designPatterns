<?php

class DataBase{

    public static $instance;

    private function __construct()
    {
        
    }

    public static function getInstance(){
        if(is_null(DataBase::$instance)){
            self::$instance=new DataBase();
        }
        return self::$instance;
    }

    public function getQuery(){
        echo "select * from database";
    }
}

$database=DataBase::getInstance();
$database->getQuery();