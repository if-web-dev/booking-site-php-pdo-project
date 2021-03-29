<?php

class clientManager extends Manager {

    //insertion de la reservation

    public function addClient ( Client $Client) {

        $sql = "SELECT id FROM client WHERE (nom_client=:user_name AND email_client=:user_mail)";
        $stmt=$this->_db->prepare($sql);
        $stmt->bindValue(':user_name',$Client->getClientName());
        $stmt->bindValue(':user_mail',$Client->getClientMail());
        $stmt->execute();
        $count = $stmt->rowCount();
        $id = $stmt->fetch();
        
        if($count==0) {

            $sql ="INSERT INTO client (nom_client, email_client) VALUES (:user_name, :user_mail)";
            $stmt=$this->_db->prepare($sql);
            $stmt->bindValue(':user_name',$Client->getClientName());
            $stmt->bindValue(':user_mail',$Client->getClientMail());
            $stmt->execute();

            return $this->_db->lastInsertID();
        
        }else{
            
            return $id;
            echo $id[0];
        }

    }
    //Un objet Client est attendu
}