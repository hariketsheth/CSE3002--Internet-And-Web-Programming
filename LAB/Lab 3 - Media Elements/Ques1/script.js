$(document).ready(function () {
  $("#selection").on("change", function () {
    change($(this).val());
  });
});

function change(sourceUrl) {
  var audio = document.getElementById("player");
  var source = document.getElementById("mp3_src");

  audio.pause();

  if (sourceUrl) {
    source.src = sourceUrl;
    audio.load();
    audio.play();
  }
}
