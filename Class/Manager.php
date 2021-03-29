<?php

class Manager {

    public $_db;

    public function __construct($db){

        $this->setDb($db);
    }

    public function setDb(PDO $dbh){
        
        $this->_db=$dbh;

    }

}
