<?php

class Customer
{

    private $_customer_name;
    private $_customer_mail;

    public function __construct(array $form_data)
    {

        $this->setCustomerName($form_data['user_name']);
        $this->setCustomerMail($form_data['user_mail']);
    }

    //setters
    public function setCustomerName($name)
    {
        if (is_string($name)) {
            $this->_customer_name = $name;
        }
    }
    public function setCustomerMail($mail)
    {
        if (is_string($mail)) {
            $this->_customer_mail = $mail;
        }
    }

    //getters
    public function getCustomerName()
    {
        return $this->_customer_name;
    }
    public function getCustomerMail()
    {
        return $this->_customer_mail;
    }
}
