<?php

require_once("Main.model.php");

class getHotelDatas extends Model
{

    public function getDatas()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM hotels");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
}
