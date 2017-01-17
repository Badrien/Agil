<div class="container" id="container-video">
  <div class="row contour">
    <div class="col-sm-1 contour loader progress vertical">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
        </div>
    </div>
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

          <video autoplay="true" id="video" height="500" width="540"></video>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-5 col-sm-2">
          <a href="#" id="capture" class="video-capture-button">Record</a>
        </div>
      </div>
    </div>
  </div>
</div>


<script>

var video = document.querySelector('#video');

navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;


function success(stream) {
  video.src = window.URL.createObjectURL(stream);
  video.play();
}

function failed(error) {
  console.log(error);
}

if (navigator.getUserMedia) {

  navigator.getUserMedia({video: true, audio: false}, success, failed);

} else {
  alert('getUserMedia() is not supported in your browser');
}

</script>
