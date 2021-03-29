<?php

class hotelManager extends Manager {

    public function getHotelData (){
        $sql ="SELECT * FROM hotel";
        $stmt=$this->_db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }
}