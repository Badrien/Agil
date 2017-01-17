<div class="container">
    <div class="row">
        <div class="panel-heading">
        <div class="panel-title text-center">
          <h1 class="espace-admin">Espace Admin</h1>
          <hr/>
        </div>
      </div>

    <div class="col-md-offset-2 col-md-8 gerer">
      <div class="row">
        <div class="col-md-4 text-center">
          <a class="btn btn-success" href="index.php?p=gerer" title="Ajouter une nouvelle annonce" role="button"><span class="glyphicon glyphicon-plus"></span></a>
        </div>

        <div class="col-md-4 text-center">
          <a class="btn btn-danger" href="index.php?p=gerer" title="Supprimer une annonce" role="button"><span class="glyphicon glyphicon-trash"></span></a>
        </div>

        <div class="col-md-4 text-center">
          <a class="btn btn-info" href="index.php?p=gerer" title="Visionner les vidéos candidats" role="button"><span class="glyphicon glyphicon-eye-open"></span></a>
        </div>
      </div>
    </div>

    <div class="col-md-offset-2 col-md-8">
      <?php foreach ($db->query('SELECT * FROM t_offers', 'App\Offer') as $offer)
      { ?>
            <div class="col-md-12">
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
            </div>
          <?php } ?>
    </div>

  </div>
</div>
