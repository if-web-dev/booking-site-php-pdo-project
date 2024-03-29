<?php

class Booking
{

    private $_id_customer;
    private $_date_start;
    private $_date_end;
    private $_id_hotel;


    public function __construct(array $form_data, $id_customer)
    {

        $this->setIdCustomer((int)$id_customer);
        $this->setDateStart((string)$form_data["date_start"]);
        $this->setDateEnd((string)$form_data["date_end"]);
        $this->setIdHotel((int)$form_data["hotel_id"]);
    }

    //setters
    public function setIdCustomer($id_customer)
    {
        if ((is_int($id_customer)) and ($id_customer > 0)) {
            $this->_id_customer = $id_customer;
        }
    }
    public function setDateStart($dateStart)
    {
        if (!empty($dateStart)) {
            list($y, $m, $d) = explode("-", $dateStart); //retourne les element de date en variable
            if (checkdate((int)$m, (int)$d, (int)$y)) { //fonction retourne un boolean pour valider une date de calendrier gregorien
                $this->_date_start = $dateStart; //si tout est bon en enregistre la date en propriété de l'objet
            }
        }
    }
    public function setDateEnd($dateEnd)
    {
        if (!empty($dateEnd)) {
            list($y, $m, $d) = explode("-", $dateEnd);
            if (checkdate((int)$m, (int)$d, (int)$y)) {
                $this->_date_end = $dateEnd;
            }
        }
    }
    public function setIdHotel($idHotel)
    {
        if ((is_int($idHotel)) and ($idHotel > 0)) {
            $this->_id_hotel = $idHotel;
        }
    }

    //getters
    public function getIdcustomer()
    {
        return $this->_id_customer;
    }
    public function getDateStart()
    {
        return $this->_date_start;
    }
    public function getDateEnd()
    {
        return $this->_date_end;
    }
    public function getIdHotel()
    {
        return $this->_id_hotel;
    }
}
