<?php

require_once ('./models/GetHotelData.model.php');
require_once ('./views/common/header.view.php');
require_once ('./controllers/form.controller.php');

?>

<div class="container-fluid hotel-bg">

  <div class="row justify-content-center">

    <section class="my-4 col-12 col-lg-6 pl-lg-5 pr-lg-5">

      <ul class="list-unstyled">
        <?php

            $hotel_data = new getHotelDatas;
            $results = $hotel_data->getDatas();
            $today = date('Y-m-d');
           
            //var_dump($results);

            foreach($results as $result){

              $hotel_card="<li>";
              $hotel_card.="<div class='card mb-3 shadow'>";
              $hotel_card.="<img src='./public/Assets/images/chambre-".$result["id"].".jpg' class='card-img-top' alt='chambre".$result["id"]."'>";
              $hotel_card.="<div class='card-body'>";
              $hotel_card.="<h5 class='card-title'>".$result["hotel_name"]."</h5>";
              $hotel_card.="<p class='card-text'><small class='text-muted'>".$result["hotel_adresse"]."</small></p>";
              $hotel_card.="<p class='card-text'>".$result["hotel_presentation"]."</p>";
              $hotel_card.="<a href='#form' id='btn-".$result["id"]."' class='btn btn-dark'>Réserver!</a>";
              $hotel_card.="</div>";
              $hotel_card.="</div>";
              $hotel_card.="</li>";

              echo $hotel_card;
              
            }
        ?>

      </ul>

    </section>
<!--form reservation-->  
    <section class="form-container col-12 col-lg-3 booking mb-6">

      <div class="form-body" id="hotel-form">
          
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items shadow">
                    <h3>Réservation</h3>
                    <p>Les champs (*) sont obligatoire.</p>
                    <form class="requires-validation" method="post" action="hotels" novalidate>

                      <div class="col-md-12">
                          <label for="hotel_name">Choix de l'hotel (*) :</label>
                          <select name="hotel_id" id="hotel_name" required>
                              <option value="">--Choisissez un hotel--</option>
                              
                              <?php foreach($results as $result):?>
                              <option value="<?php echo $result['id'] ;?>"><?php echo $result['hotel_name'] ;?></option>
                              <?php endforeach;?>
                          </select>
                      </div>

                      <div class="col-md-12 mt-2">
                        <label>Date de début (*) :</label>
                        <input class="form-control" type="date" name="date_min" id="date_min" min="<?php echo $today ?>" placeholder="Full Name" required>
                      </div>

                      <div class="col-md-12 mt-2">
                          <label>Date de fin (*) :</label>
                          <input class="form-control" type="date" name="date_max" id="date_max" min="<?php echo $today ?>" placeholder="Full Name" required>  
                      </div>

                      <div class="col-md-12 mt-2">
                          <label for="user_name">Votre nom (*) :</label>
                          <input class="form-control" type="text" name="user_name" placeholder="Nom" required>
                      </div>


                      <div class="col-md-12 mt-2">
                          <label>Votre adresse e-mail (*) :</label>
                          <input class="form-control" type="email" name="user_mail" placeholder="Exemple@Exemple.fr" required>
                      </div>

                      <div class="form-button mt-4">
                        <input type="submit" name="submit" class="btn btn-primary"></input>
                        <input type="reset" class="btn btn-primary"></input>
                      </div>

                      <?php if(isset($message)){echo "<p class='my-2' style='text-align: justify;'>".htmlspecialchars($message)."</p>";}?>
        
                    </form>
                </div>
            </div>
        </div>
      </section>
  </div>
</div>
        
        
 