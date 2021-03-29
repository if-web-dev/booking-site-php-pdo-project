<?php

require ('Class/Manager.php');
require ('Class/Client.php');
require ('Class/Reservation.php');
require ('Class/clientManager.php');
require ('Class/reservationManager.php');
require ('Class/hotelManager.php');
require ('Class/formControler.php');
require ('header.php');

?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <section class="hotel my-4 col-12 col-lg-6 pl-lg-5 pr-lg-5">
      <ul class="list-unstyled container-fluid  ">
        <?php

            $hotel_data = new hotelManager($dbh);
            $hotels = $hotel_data->getHotelData();
            //var_dump($hotels);

            foreach($hotels as $hotel){

              $hotel_card="<li>";
              $hotel_card.="<div class='card mb-3 shadow'>";
              $hotel_card.="<img src='img/chambre-".$hotel["id"].".jpg' class='card-img-top' alt='chambre".$hotel["id"]."'>";
              $hotel_card.="<div class='card-body'>";
              $hotel_card.="<h5 class='card-title'>".$hotel["hotel_nom"]."</h5>";
              $hotel_card.="<p class='card-text'><small class='text-muted'>".$hotel["hotel_adresse"]."</small></p>";
              $hotel_card.="<p class='card-text'>".$hotel["hotel_presentation"]."</p>";
              $hotel_card.="<a href='#form' id='btn-".$hotel["id"]."' class='btn btn-dark'>Réserver!</a>";
              $hotel_card.="</div>";
              $hotel_card.="</div>";
              $hotel_card.="</li>";

              echo $hotel_card;
              
            }
        ?>
      </ul>
    </section>
        
    <div class="form-container col-12 col-lg-3 booking shadow rounded mb-6 bg-white">
      <form method="post" action="hotels.php" class="py-2" id=form >
        <h3>Réservation</h3>
        <p>
          <label for="hotel_name">Choix de l'hotel(*)</label>
          <select name="hotel_id" id="hotel_name" required>
              <option value="">--Choisissez un hotel--</option>
              <?php foreach($results as $result):?>
              <option value="<?php echo $result['id'] ;?>"><?php echo $result['hotel_nom'] ;?></option>
              <?php endforeach;?>
          </select>
        </p>
        <p>
          <label for="date_min">Début de réservation(*)</label>
          <input type="date" name="date_min" id="date_min" min="<?php echo $today ?>" required></input>
          <div class="clearfix"></div>
        </p>
        <p>
          <label for="date_max">Fin de réservation(*)</label>
          <input type="date" name="date_max" id="date_max" min="<?php echo $today ?>" required></input>
          <div class="clearfix"></div>

        </p>
        <p>
          <label for="user_name">Nom(*)</label>
          <input type="text" name="user_name" required></input>
          <div class="clearfix"></div>

        </p>
        <p>
          <label for="user_mail">Email(*)</label>
          <input type="email" name="user_mail" placeholder="Exemple@Exemple.fr" required></input>
          <div class="clearfix"></div>

        </p>

        <?php 
          if(isset($message)){echo "<p>".$message."</p>" ;}
        ?>
        
        <p>
          <input type="submit" name="submit" class="btn btn-primary"></input>
          <input type="reset" class="btn btn-primary"></input>
        </p>
      </form>
    </div>
  </div>
</div>


<?php

require ('footer.php');

?>