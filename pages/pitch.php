<div class="container" id="container-video">
  <div class="row contour">
    <div class="col-sm-offset-1 col-sm-10 contour">
      <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
          <p><strong>Consignes</strong> :<br>
            Mettez-vous dans un endroit calme afin de réaliser votre pitch vidéo.<br>
            Parlez fort et distinctement.<br>
            Vous disposez d’<strong>1min30</strong> pour vous présentez et répondre aux questions.<br>
            A la fin du temps imparti, l’enregistrement se coupe automatiquement.<br>
            Si vous avez fini plus tôt que prévu, vous pouvez cliquer sur le bouton <strong>Stop</strong>, ce qui arrêtra l’enregistrement.<br>
            Vous disposez de <strong>3 essais</strong> maximum.<br>
            Lorsque que vous êtes prêt, cliquez sur <strong>Play</strong>.<br>
            N’oubliez pas de <strong>Valider</strong>  lorsque que vous avez fini.
        </div>
      </div>
    </div>
  </div>
  <form class="form-group" action="../pages/pitchUpload.php" method="post" enctype="multipart/form-data">
    <div class="contour row">
      <div class="col-sm-offset-2 col-sm-10">
        <video autoplay="true" id="video" height="500" width="540" muted="true"></video>
      </div>
    </div>
    <div class="row contour">
      <div class="col-sm-5">
        <button type="button" class="btn btn-success" id="startRecord" name="button">Start</button>
        <button type="button" id="stopRecord" class="btn btn-danger" name="button">Stop</button>
        <input type="button" name="" class="btn btn-default" value="envoyer">
      </div>
    </div>
  </form>
</div>
<script src="../public/js/pitch.js" charset="utf-8"></script>
