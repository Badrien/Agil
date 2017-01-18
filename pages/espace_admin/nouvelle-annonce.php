<div class="container">
  <div class="row">
    <div class="panel-heading">
      <div class="panel-title text-center">
      <h1 class="espace-admin">Espace Admin</h1>
      <hr/>
      </div>
    </div>

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-offset-1 col-md-10 text-center ajouter">ANNONCE</div>
      </div>

      <div class="row">
        <div class="col-md-offset-1 col-md-10 form-add-offer">
          <div>
            <?php
            echo $_POST['title'];

            // On ajoute une entrée
            $bdd->exec('INSERT INTO jeux_video(title, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';
            "INSERT INTO t_offers VALUES('','title','content',CURRENT_TIMESTAMP, 'region' 'intern_level',CURRENT_TIMESTAMP, 'intern_duration');"
            ?>
          </div>

          <div>
            <?php echo $_POST['intern_level']; ?>
          </div>

          <div>
            <?php echo $_POST['intern_duration']; ?>
          </div>

          <div>
            <?php echo $_POST['region']; ?>
          </div>

          <div>
            <?php echo $_POST['content']; ?>
          </div>

        </div>
      </div>

<p><a href="index.php?p=ajouter">Cliquer ici</a> pour revenir à la page précédente</p>

  </div>
</div>
