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
      <a id="linkoffer" href=<?php echo $offer->getUrl(); ?>>
        <div class="col-md-11">
          <span>
            <div id="linkadd">
              <h3 class="annonces"> <?php echo $offer->getTitle(); ?></h3>
                <time class="annonces"><?php echo $offer->getDate_publication(); ?></time>
            </div>
          </span>
        </div>
      </a>
  <?php } ?>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /.container -->
</div>
