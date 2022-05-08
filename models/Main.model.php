<?php

abstract class Model
{

    //class permettant la connexion a la bd et retoune l'objet pdo

    private static $pdo;

    private static function setBdd()
    {

        self::$pdo = new PDO("mysql:host=" . MYHOST . ";dbname=" . MYDBNAME . ";charset=utf8", PHPMYADMINID, PHPMYADMINPASS);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}