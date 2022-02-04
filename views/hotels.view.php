
<div class="container-fluid hotel-bg">

  <div class="row justify-content-center mx-3">

    <section class="my-4 col-12 col-lg-6">

      <ul class="list-unstyled">
        <?php

            $hotel_data = new getHotelDatas;
            $results = $hotel_data->getDatas();
            $today = date('Y-m-d');
           
            //var_dump($results);

            foreach($results as $result){

              $hotel_card="<li>";
              $hotel_card.="<div class='card mb-3 shadow'>";
              $hotel_card.="<img src='".URL."/public/Assets/images/chambre-".$result["id"].".jpg' class='card-img-top' alt='chambre".$result["id"]."'>";
              $hotel_card.="<div class='card-body'>";
              $hotel_card.="<h5 class='card-title'>".$result["hotel_names"]."</h5>";
              $hotel_card.="<p class='card-text'><small class='text-muted'>".$result["hotel_adresses"]."</small></p>";
              $hotel_card.="<p class='card-text'>".$result["hotel_descriptions"]."</p>";
              $hotel_card.="<button type='button' id='btn-".$result["id"]."' class='btn btn-dark'>Réserver!</button>";
              $hotel_card.="</div>";
              $hotel_card.="</div>";
              $hotel_card.="</li>";

              echo $hotel_card;
              
            }
        ?>

      </ul>

    </section>
<!--form reservation-->  
    <section class="form-container col-12 col-md-6 booking mb-6">

      <div class="form-body" id="hotel-form">
          
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items shadow">
                    <h3>Réservation</h3>
                    <p>Les champs (*) sont obligatoire.</p>
                    <form class="requires-validation row" method="post" action="hotels" novalidate>

                      <div class="col-md-12 col-lg-6">
                        
                        <div class="col-md-12">
                            <label for="hotel_name">Choix de l'hotel * :</label>
                            <select class="form-control" name="hotel_id" id="hotel_name" required>
                                <option value="">--Choisissez un hotel--</option>
                                
                                <?php foreach($results as $result):?>
                                <option value="<?php echo $result['id'] ;?>"><?php echo $result['hotel_names'] ;?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                        <div class="col-md-12 mt-3">
                          <label>Date de début * :</label>
                          <input class="form-control" type="date" name="date_start" id="date_start" min="<?php echo $today ?>" placeholder="Full Name" required>
                        </div>

                        <div class="col-md-12 mt-3">
                            <label>Date de fin * :</label>
                            <input class="form-control" type="date" name="date_end" id="date_end" min="<?php echo $today ?>" placeholder="Full Name" required>  
                        </div>

                      </div>

                      <div class=" col-md-12 col-lg-6">

                        <div class="col-md-12">
                            <label for="user_name">Votre nom * :</label>
                            <input class="form-control" type="text" name="user_name" placeholder="Nom" required>
                        </div>


                        <div class="col-md-12 mt-3">
                            <label>Votre adresse e-mail * :</label>
                            <input class="form-control" type="email" name="user_mail" placeholder="Exemple@Exemple.fr" required>
                        </div>

                        <div class="form-button mt-5 form-validation">
                          <input type="submit" name="submit" class="btn btn-primary"></input>
                          <input type="reset" class="btn btn-primary"></input>
                        </div>

                      </div>

                      <?php if(isset($message)){echo "<p class='my-3' style='text-align: justify; color: #39ff14;'>".htmlspecialchars($message)."</p>";}?>

                    </form>
                </div>
            </div>
        </div>
      </section>
  </div>
</div>
        
        
 