<style>
#container {
    margin: 0px auto;
    width: 500px;
    height: 375px;
    border: 10px #333 solid;
}
#videoElement {
    margin: 0px auto;
    width: 480px;
    height: 355px;
    background-color: #666;
}
</style>

<body>
<div id="container">
    <video autoplay="true" id="videoElement">
    </video>
</div>

<button type="button" name="record">record</button>

<script>
var video = document.querySelector("#videoElement");

navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

if (navigator.getUserMedia) {
    navigator.getUserMedia({video: true}, handleVideo, videoError);
}

function handleVideo(stream) {
    video.src = window.URL.createObjectURL(stream);
}

function videoError(e) {
    // do something
}
</script>
</body>
</html>
