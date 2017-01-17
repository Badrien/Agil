<?php
$_SESSION['offers_selected'] = 0;
 ?>


<div class="container">
  <div class="row">
    <div class="col-md-12 cadretotal"> <!-- Premier niveau avec 12 colonnes -->
      <div class="row">
        <div class="col-md-offset-2 col-md-8 recherche">

          <form class="navbar-form inline-form">
              <input type="search" class="form-control" placeholder="Recherche...">
              <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
          </form>

        </div>
      </div> <!-- Deuxiemme niveau avec 4 colonnes -->
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="row">

            <div class="col-md-12 resultats"> RESULTATS</div>



      <?php foreach ($db->query('SELECT * FROM t_offers', 'App\Offer') as $offer)
                  { ?>

                    <a class="" href="#" id = "modalBtn" role="button" data-toggle="modal" data-target=<?php echo "#modal".$offer->getId();?>>
                      <div class="col-md-11">
                        <span>
                          <div class="linkadd">
                            <h3 class="annonces title-offers"> <?php echo $offer->getTitle(); ?></h3>
                            <div class="row">
                              <div class="col-md-offset-1 col-md-2">
                                <i class="glyphicon glyphicon-calendar icon-offer"></i>
                                <span class="annonces"><?php echo $offer->getIntern_duration(); ?></span>
                              </div>

                              <div class="col-md-offset-1 col-md-2">
                                <i class="glyphicon glyphicon-map-marker icon-offer"></i>
                                <span class="annonces">  <?php echo $offer->getRegion(); ?></span>
                              </div>

                              <div class="col-md-offset-1 col-md-2">
                                <i class="glyphicon glyphicon glyphicon-education icon-offer"></i>
                                <sapn class="annonces"> <?php echo $offer->getintern_level(); ?></span>
                              </div>
                            </div>
                          </div>
                        </span>
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

  </div>
</div> <!-- /.container -->

<script src="../public/js/checkbox.js"></script>
