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


  <?php   //$paire = ($i%2 == 0) ? true : false;
  foreach ($db->query('SELECT * FROM t_offers', 'App\Offer') as $offer)
  { ?>
      <a href=<?php echo $offer->getUrl(); ?>>
        <div class="col-md-12">
          <span>
            <div class="linkadd">
              <h3 class="annonces"> <?php echo $offer->getTitle(); ?></h3>
                <time class="annonces dateannonce"><?php echo $offer->getDate_publication(); ?></time>
            </div>
          </span>
        </div>
      </a>
  <?php } ?>

            <?php foreach ($db->query('SELECT * FROM t_offers', 'App\Offer') as $offer)
            { ?>
              <a class="modalBtn" href="#" role="button">
                <div class="col-md-11">
                  <div id="linkadd">
                    <h3 class="annonces"> <?php echo $offer->getTitle(); ?></h3>
                    <time class="annonces"><?php echo $offer->getDate_publication(); ?></time>
                  </div>
                </div>
            </a>
            <?php require '../pages/details.php'; ?>
      <?php } ?>


          </div>
        </div>
      </div>
    </div>

  </div>
</div> <!-- /.container -->

  </div><!-- /.container -->
</div>
