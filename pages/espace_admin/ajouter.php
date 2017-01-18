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
        <div class="col-md-offset-1 col-md-10 text-center ajouter">AJOUTER UNE ANNONCE</div>
      </div>

      <div class="row">
        <div class="col-md-offset-1 col-md-10 form-add-offer">

        <form action="index.php?p=nouvelle-annonce" method="post">
          <div class="form-group">
            <label>Titre de l'annonce :</label>
            <input type="text" name="title" class="form-control">
          </div>

          <div class="form-group">
            <label>Niveau d'étude :</label>
            <select class="form-control" name="intern_level">
                <option>BAC</option>
                <option>BAC+1</option>
                <option>BAC+2</option>
                <option>BAC+3</option>
                <option>BAC+4</option>
                <option>BAC+5 et plus</option>
              </select>
          </div>

          <div class="form-group">
            <label>Durée :</label>
            <input type="text" name="intern_duration" class="form-control">
          </div>

          <div class="form-group">
            <label>Localisation :</label>
            <select class="form-control" name="region">
              <option>FRANCE</option>
              <option>FRANCE - ILE-DE-FRANCE</option>
              <option>FRANCE - OUEST</option>
              <option>FRANCE - SUD-OUEST</option>
              <option>FRANCE - RHÔNE-ALPES</option>
              <option>FRANCE - SUD-EST</option>
              <option>FRANCE - NORD</option>
              <option>FRANCE - EST</option>
              <option>FRANCE - CENTRE</option>
              <option>ALLEMAGNE</option>
              <option>ETATS-UNIS</option>
              <option>AMÉRIQUE DU SUD</option>
              <option>CANADA</option>
              <option>CHINE</option>
              <option>AFRIQUE ET MOYEN-ORIENT</option>
              <option>ASIE-PACIFIQUE</option>
              <option>BELGIQUE</option>
              <option>ESPAGNE</option>
              <option>FINLANDE</option>
              <option>INDE</option>
              <option>ITALIE</option>
              <option>PAYS-BAS</option>
              <option>POLOGNE</option>
              <option>ROUMANIE</option>
              <option>ROYAUME-UNI</option>
              <option>RUSSIE</option>
              <option>SUEDE</option>
              <option>SUISSE</option>
            </select>
          </div>

          <div class="form-group">
            <label>Description :</label>
            <textarea id="textarea" name="content" class="form-control"></textarea>
          </div>

          <input type="submit" value="Valider" />
          
        </form>
      </div>
    </div>

      </div>
    </div>
  </div>
</div>
