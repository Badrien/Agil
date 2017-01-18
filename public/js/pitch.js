//Lorsque la page a chargé
$(document).ready(function () {
  console.log('coucou');
  //On établi le flux avec les composants audio et video
  // Older browsers might not implement mediaDevices at all, so we set an empty object first
  if (navigator.mediaDevices === undefined) {
    navigator.mediaDevices = {};
  }

  // Some browsers partially implement mediaDevices. We can't just assign an object
  // with getUserMedia as it would overwrite existing properties.
  // Here, we will just add the getUserMedia property if it's missing.
  if (navigator.mediaDevices.getUserMedia === undefined) {
    navigator.mediaDevices.getUserMedia = function(constraints) {

      // First get ahold of the legacy getUserMedia, if present
      var getUserMedia = (navigator.getUserMedia ||
        navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia);

      // Some browsers just don't implement it - return a rejected promise with an error
      // to keep a consistent interface
      if (!getUserMedia) {
        return Promise.reject(new Error('getUserMedia is not implemented in this browser'));
      }

      // Otherwise, wrap the call to the old navigator.getUserMedia with a Promise
      return new Promise(function(resolve, reject) {
        getUserMedia.call(navigator, constraints, resolve, reject);
      });
    }
  }

  var chunks = [];
  navigator.mediaDevices.getUserMedia({ audio: true, video: true })
  .then(function(stream) {
    alert(stream);
    var video = document.querySelector('video');
    // Older browsers may not have srcObject
    video.src = window.URL.createObjectURL(stream);

    video.onloadedmetadata = function(e) {
      video.play();
      var mediaRecorder = new MediaRecorder(stream);
      var startRecord = document.getElementById('startRecord');
      var stopRecord = document.getElementById('stopRecord');

      startRecord.onclick = function () {
          mediaRecorder.start();
          console.log(mediaRecorder.state);
      }

      stopRecord.onclick = function () {
        mediaRecorder.stop();
        console.log(mediaRecorder.state);
      }

      mediaRecorder.ondataavailable = function (e) {
        chunks.push(e.data);
      }

      mediaRecorder.onstop = function () {
        //On créé un nouveau blob
        var blob = new Blob(chunks, {'type' : 'video/mp4'});
        chunks = [];
        var reader = new FileReader();

        reader.onload = function (event) {
          var fd = new FormData();
          fd.append('fname', 'test1.mp4');
          fd.append('data', event.target.result);
          $.ajax({
            type: 'POST',
            url: '../pages/pitchUpload.php',
            data: fd,
            processData: false,
            contentType: false
          }).done(function (data) {
            console.log(data);
            alert('coucou');
          });
        };
        reader.readAsDataURL(blob);
      };
    }
  })
  .catch(function(err) {
    console.log(err.name + ": " + err.message);
  });
});
