<button type="button" id="modalBtn" class="btn btn-success" name="buttonForm">Postuler</button>
<div class="modal fade" role="dialog" id="modalForm" tabindex="-1" aria-labelledby="modalFormLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" id="modalClose" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4>Postuler pour une offre :</h4>
      </div>
        <div class="modal-body">
          <form action="index.php?p=pitch" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="lastName-candidate">Nom :</label>
                  <input type="text" class="form-control" name="lastName-candidate" id="lastName-candidate" placeholder="Dupont" required autocomplete="off">
                  <label for="firstName-candidate">Prénom :</label>
                  <input type="text" class="form-control" name="firstName-candidate" id="firstName-candidate" placeholder="Elodie" required autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email-candidate">Email :</label>
                  <input type="email" class="form-control" name="email-candidate" id="email-candidate" placeholder="exemple@free.com" size="40" required autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="resume-candidate">Déposez votre CV :</label>
                  <input type="file" name="resume-candidate" id="resume-candidate" required>
                </div>
              </div>
              <div class="col-lg-6">
                <label for="button-pitch">Enregistrez votre vidéo de motivation</label>
                <input type="submit" class="btn btn-primary" value="Passez à la vidéo">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>
