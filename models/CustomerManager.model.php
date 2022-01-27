<?php 

class customerManager extends Model {

    //insertion de la reservation

    public function addCustomer ( Customer $Client) {

        $sql = "SELECT id FROM customers WHERE (customers_name=:user_name AND customers_email=:user_mail)";
        $stmt=$this->getBdd()->prepare($sql);
        $stmt->bindValue(':user_name',$Client->getCustomerName());
        $stmt->bindValue(':user_mail',$Client->getCustomerMail());
        $stmt->execute();
        $count = $stmt->rowCount();
        $id = $stmt->fetch();
        
        if($count==0) {

            $sql ="INSERT INTO customers (customers_name, customers_email) VALUES (:user_name, :user_mail)";
            $stmt=$this->getBdd()->prepare($sql);
            $stmt->bindValue(':user_name',$Client->getCustomerName());
            $stmt->bindValue(':user_mail',$Client->getCustomerMail());
            $stmt->execute();

            return $this->getBdd()->lastInsertID();
        
        }else{
            
            return $id;
            echo $id[0];
        }

    }
    //Un objet Client est attendu
}