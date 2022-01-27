<?php

class bookingManager extends Model {

    public function addBooking (Booking $reservation){

        //requete permettant de trouver un numero de chambre dans la table chambre qui n'est pas inscrit dans la table reservetion dans un creneau chronologique précis.

        $sql = "SELECT room_numbers FROM rooms WHERE id_hotel=:id_hotel AND room_numbers NOT IN (SELECT id_room FROM bookings WHERE ((date_start<=:date_start AND date_end>:date_end) OR (date_start<:date_end AND date_end>=:date_end)) AND id_hotel=:id_hotel)";

        $stmt=$this->getBdd()->prepare($sql);
        $stmt->bindValue(':date_start',$reservation->getDateStart());
        $stmt->bindValue(':date_end',$reservation->getDateEnd());
        $stmt->bindValue(':id_hotel',$reservation->getIdHotel());
        $stmt->execute();
        $id_available_room = $stmt->fetch();//array contenant les chambres disponibles, retourne false si pas de chambre dispo
        
        if ($id_available_room) {// si presence d'une chambre dispo, on fait une insertion dans la reservation

            $sql ="INSERT INTO bookings (id_customers, date_start, date_end, date_today, id_hotel, id_room) VALUES (:id_customers, :date_start, :date_end, NOW(), :id_hotel, :id_room )";
            $stmt=$this->getBdd()->prepare($sql);
            $stmt->bindValue(':id_customers',$reservation->getIdCustomer());
            $stmt->bindValue(':date_start',$reservation->getDateStart());
            $stmt->bindValue(':date_end',$reservation->getDateEnd());
            $stmt->bindValue(':id_hotel',$reservation->getIdHotel());
            $stmt->bindValue(':id_room',(int)$id_available_room[0]);//premiere chambre disponible venue

            $stmt->execute();
            return $this->getBooking();//retourne le message de confirmation de la reservation avec le détail de celle-ci

        }else{ // si pas de chambre dispo, message d'erreur a afficher.

            $message = "Periode non disponible, veuillez choisir une autre période";
            return $message;
        }
    }

    public function getBooking (){ 

        $sql = "SELECT A.customers_name, A.customers_email, B.date_start, B.date_end,
        B.date_today, C.hotel_names, C.hotel_adresses, D.room_numbers
        FROM customers A, bookings B, hotels C, rooms D
        WHERE A.id=B.id_customers
        AND B.id_hotel=C.id
        AND B.id_room=D.room_numbers
        AND B.id =(SELECT MAX(id) FROM bookings);";
        
        $stmt=$this->getBdd()->prepare($sql);
        $stmt->execute();
        $reservation_data=$stmt->fetch(PDO::FETCH_ASSOC);//retourne les informations de la derniere reservation
        $message = 'Vous avez réservé au nom de '.$reservation_data['customers_name'].' avec l\'adresse mail '.$reservation_data['customers_email'].' du '.$reservation_data['date_start'].' au '.$reservation_data['date_end'].' au '.$reservation_data['hotel_names'].', '.$reservation_data['hotel_adresses'].', chambre n° '.$reservation_data['room_numbers'].'.';
        
        return $message;
        //retourne le message de confirmation de la reservation avec le détail de celle-ci
    }
}