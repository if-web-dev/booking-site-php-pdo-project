<?php 

class Client {

    private $_client_name;
    private $_client_mail;

    public function __construct(array $form_data ){
        
        $this->setClientName($form_data['user_name']);
        $this->setClientMail($form_data['user_mail']);
    }

    //setters
    public function setClientName($name) {
        if(is_string($name)){
            $this->_client_name=$name;
        }
    }
    public function setClientMail($mail) {
        if(is_string($mail)){
            $this->_client_mail=$mail;
        }
    }

    //getters
    public function getClientName(){return $this->_client_name;}
    public function getClientMail(){return $this->_client_mail;}

}