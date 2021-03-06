<?php

class reservationManager extends Manager {

    public function addReservation (Reservation $reservation){

        $sql = "SELECT id_chambre FROM hotel_chambre WHERE id_hotel=:id_hotel AND id_chambre NOT IN (SELECT id_chambre FROM reservation WHERE ((date_min<=:datemin AND date_max>:datemin) OR (date_min<:datemax AND date_max>=:datemax)) AND id_hotel=:id_hotel)";

        $stmt=$this->_db->prepare($sql);
        $stmt->bindValue(':datemin',$reservation->getDateMin());
        $stmt->bindValue(':datemax',$reservation->getDateMax());
        $stmt->bindValue(':id_hotel',$reservation->getIdHotel());
        $stmt->execute();
        $id_available_room = $stmt->fetch();//array contenant les chambres disponibles, retourne false si pas de chambre dispo
        
        if ($id_available_room) {

            $sql ="INSERT INTO reservation (id_client,date_min, date_max, date_today, id_hotel, id_chambre) VALUES (:id_client, :datemin, :datemax, NOW(), :id_hotel, :id_room )";
            $stmt=$this->_db->prepare($sql);
            $stmt->bindValue(':id_client',$reservation->getIdClient());
            $stmt->bindValue(':datemin',$reservation->getDateMin());
            $stmt->bindValue(':datemax',$reservation->getDateMax());
            $stmt->bindValue(':id_hotel',$reservation->getIdHotel());
            $stmt->bindValue(':id_room',(int)$id_available_room[0]);//premiere chambre disponible venue

            $stmt->execute();
            return $this->getReservation ();//retourne le message de confirmation de la reservation avec le détail de celle-ci

        }else{

            $message = "Periode non disponible, veuillez choisir une autre période";
            return $message;
        }
    }

    public function getReservation (){

        $sql = "SELECT A.nom_client, A.email_client, B.date_min, B.date_max,
        B.date_today, C.hotel_nom, C.hotel_adresse, D.chambre
        FROM client A, reservation B, hotel C, chambre D
        WHERE A.id=B.id_client
        AND B.id_hotel=C.id
        AND B.id_chambre=D.id
        AND B.id =(SELECT MAX(id) FROM reservation);";
        
        $stmt=$this->_db->prepare($sql);
        $stmt->execute();
        $reservation_data=$stmt->fetch(PDO::FETCH_ASSOC);//retourne les informations de la derniere reservation
        $message = 'Vous avez réservé au nom de '.$reservation_data['nom_client'].' avec l\'adresse mail '.$reservation_data['email_client'].' du '.$reservation_data['date_min'].' au '.$reservation_data['date_max'].' au '.$reservation_data['hotel_nom'].', '.$reservation_data['hotel_adresse'].', chambre n° '.$reservation_data['chambre'].'.';
        
        return $message;
        //retourne le message de confirmation de la reservation avec le détail de celle-ci
    }
}