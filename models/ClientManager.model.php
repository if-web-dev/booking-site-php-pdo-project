<?php 

class clientManager extends Model {

    //insertion de la reservation

    public function addClient ( Client $Client) {

        $sql = "SELECT id FROM clients WHERE (client_name=:user_name AND client_email=:user_mail)";
        $stmt=$this->getBdd()->prepare($sql);
        $stmt->bindValue(':user_name',$Client->getClientName());
        $stmt->bindValue(':user_mail',$Client->getClientMail());
        $stmt->execute();
        $count = $stmt->rowCount();
        $id = $stmt->fetch();
        
        if($count==0) {

            $sql ="INSERT INTO clients (client_name, client_email) VALUES (:user_name, :user_mail)";
            $stmt=$this->getBdd()->prepare($sql);
            $stmt->bindValue(':user_name',$Client->getClientName());
            $stmt->bindValue(':user_mail',$Client->getClientMail());
            $stmt->execute();

            return $this->getBdd()->lastInsertID();
        
        }else{
            
            return $id;
            echo $id[0];
        }

    }
    //Un objet Client est attendu
}