<?php
$_SESSION['offers_selected'] = 0;
 ?>


<div class="container">
  <div class="row">
    <div class="col-md-12"> <!-- Premier niveau avec 12 colonnes -->
      <div class="row">
        <div id="recherche" class="col-md-2"> RECHERCHE </div> <!-- Deuxiemme niveau avec 4 colonnes -->
        <div class="col-md-offset-1 col-md-9"> <!-- Deuxiemme niveau avec 9 colonnes -->
          <div class="row">
            <div id="resultats" class="col-md-11">RESULTATS</div>

            <?php foreach ($db->query('SELECT * FROM t_offers', 'App\Offer') as $offer)
            { ?>
                <!-- Annonces déclenchant le modal -->
                <a class="" href="#" id = "modalBtn" role="button" data-toggle="modal" data-target=<?php echo "#modal".$offer->getId();?>>
                  <div class="col-md-10">
                      <h3 class="annonces"> <?php echo $offer->getTitle(); ?></h3>
                      <time class="annonces"><?php echo $offer->getDate_publication(); ?></time>
                  </div>
                </a>
                <div class="col-md-1">
                  <input type="checkbox" name=<?php echo "checkbox".$offer->getId();?> id="checkbox">
                </div>

                <!--Modal-->
                <div class="modal fade modalForm" role="dialog" id =<?php echo "modal". $offer->getId(); ?> tabindex="-1" aria-labelledby="modalFormLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                         <button type="button" class="close" id="modalClose" aria-label="Close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                        <h4>Postuler pour une offre :</h4>
                      </div>
                        <div class="modal-body">
                          <h1><?php echo $offer->getTitle(); ?></h1>
                          <p><?php echo $offer->getContent(); ?></p>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                  </div>
                </div>

              <?php } ?>
          </div>

          <div class="row">
            <div class="col-md-10">
              <div class="result"></div>
            </div>
            <div class="col-md-2">
              <input type="submit" value="Submit">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div><!-- /.container -->
</div>

<script src="../public/js/modal.js"></script>
