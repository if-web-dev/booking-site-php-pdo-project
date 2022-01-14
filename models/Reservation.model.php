<?php

class Reservation extends Client {

    private $_id_client;
    private $_date_min;
    private $_date_max;
    private $_id_hotel;
    

    public function __construct(array $form_data, $id_client){

        parent::__construct($form_data);

        $this->setIdClient((int)$id_client);
        $this->setDateMin((string)$form_data["date_min"]);
        $this->setDateMax((string)$form_data["date_max"]);
        $this->setIdHotel((int)$form_data["hotel_id"]);
      
    }
    
    //setters
    public function setIdClient($id_client) {
        if((is_int($id_client)) AND ($id_client>0)){
            $this->_id_client=$id_client;
        }
    }
    public function setDateMin($dateMin) {
        if(!empty($dateMin)){
            list($y,$m,$d)=explode("-",$dateMin);
            if(checkdate((int)$m,(int)$d,(int)$y)){
                $this->_date_min=$dateMin;
            }
        }
    }
    public function setDateMax($dateMax) {
        if(!empty($dateMax)){
            list($y,$m,$d)=explode("-", $dateMax);
            if(checkdate((int)$m,(int)$d,(int)$y)){
                $this->_date_max=$dateMax;
            }
        }
    }
    public function setIdHotel($idHotel) {
        if((is_int($idHotel)) AND ($idHotel>0)){
            $this->_id_hotel=$idHotel;
        }
    }
    
    //getters
    public function getIdClient() {return $this->_id_client;}
    public function getDateMin() {return $this->_date_min;}
    public function getDateMax() {return $this->_date_max;}
    public function getIdHotel() {return $this->_id_hotel;}
  
}