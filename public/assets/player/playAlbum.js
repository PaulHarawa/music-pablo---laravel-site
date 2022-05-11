
var canvasWidth = 300
var audioEl = document.getElementById("audio")
var canvas = document.getElementById("progress").getContext('2d')
var ctrl = document.getElementById('audioControl')

audioEl.addEventListener('loadedmetadata', function() {
  var duration = audioEl.duration
  var currentTime = audioEl.currentTime
  document.getElementById("duration").innerHTML = convertElapsedTime(duration)
  document.getElementById("current-time").innerHTML = convertElapsedTime(currentTime)
  canvas.fillStyle = "#fff";
  canvas.fillRect(0, 0, canvasWidth, 50);
});

function togglePlaying() {

  var play = ctrl.innerHTML === 'Play'
  var method

  if (play) {
    ctrl.innerHTML = 'Pause'
    method = 'play'

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "playAlbum.php", true);
    xmlhttp.send();

    var prevPlays = document.getElementById("prevPlays").value;
    var newPlays = parseInt(prevPlays) + parseInt(1);

    document.getElementById("playUpdate").innerHTML = newPlays;

  } else {
    ctrl.innerHTML = 'Play'
    method = 'pause'
  }

  audioEl[method]()

}

function updateBar() {
  canvas.clearRect(0, 0, canvasWidth, 50)
  canvas.fillStyle = "#fff";
  canvas.fillRect(0, 0, canvasWidth, 50)

  var currentTime = audioEl.currentTime
  var duration = audioEl.duration

  if (currentTime === duration) {
    ctrl.innerHTML = "Play"
  }

  document.getElementById("current-time").innerHTML = convertElapsedTime(currentTime)

  var percentage = currentTime / duration
  var progress = (canvasWidth * percentage)
  canvas.fillStyle = "#198754"
  canvas.fillRect(0, 0, progress, 50)
}

function convertElapsedTime(inputSeconds) {
  var seconds = Math.floor(inputSeconds % 60)
  if (seconds < 10) {
    seconds = "0" + seconds
  }
  var minutes = Math.floor(inputSeconds / 60)
  return minutes + ":" + seconds
}

function setProgress(e) {
  const width = this.clientWidth
  const clickX = e.offsetX
  const duration = audio.duration

  audio.currentTime = (clickX / width) * duration;
}

progress.addEventListener('click', setProgress);
