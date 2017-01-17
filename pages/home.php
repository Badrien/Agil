<div class="container">
  <div class="row">
    <div class="col-md-12 cadretotal"> <!-- Premier niveau avec 12 colonnes -->
      <div class="row">
        <div class="col-md-offset-2 col-md-8 recherche">

          <form class="inline-form form-group">
            <div class="input-group">
              <input type="search" class="form-control" placeholder="Recherche...">
              <!--<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>-->
              <span class="input-group-btn">
                <button class="btn btn-default form-control" type="submit">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </form>





        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="row">
            <div class="col-md-12 resultats"> RESULTATS</div>


  <?php   //$paire = ($i%2 == 0) ? true : false;
  foreach ($db->query('SELECT * FROM t_offers', 'App\Offer') as $offer)
  { ?>
      <a  class="modalBtn" href="#" role="button" data-toggle="modal" data-target="#modal">
        <div class="col-md-12">
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
                  <span class="annonces"> <?php echo $offer->getintern_level(); ?></span>
                </div>
              </div>
            </div>
          </span>
        </div>
      </a>
      <!--Modal-->
      <div class="modal fade modalForm" role="dialog"  tabindex="-1" aria-labelledby="modalFormLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" id="modalClose" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
        </div>
      </div>
    </div>

  </div>
</div> <!-- /.container -->

  </div><!-- /.container -->
</div>
