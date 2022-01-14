<?php

abstract class Model{
    
    private static $pdo;

    private static function setBdd(){

        self::$pdo = new PDO("mysql:host=".MYHOST.";dbname=".MYDBNAME.";charset=utf8", PHPMYADMINID, PHPMYADMINPASS);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}