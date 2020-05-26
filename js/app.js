// API YouTube
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player-video-explicativo', {
    playerVars: {
      modestbranding: 1, showinfo: 0, ecver: 2
    },
  });
}

// Carregamento funções do site
$(document).ready(function () {
  AOS.init();

  // Add smooth scrolling to all links
  $("[data-scroll='smoth']").on('click', function (event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 50
      }, 300, function () {
        window.location.hash = hash;
      });
    }
  });

  $('#modalVideo').on('show.bs.modal', function (e) {
    player.playVideo();
  });

  $('#modalVideo').on('hidden.bs.modal', function (e) {
    player.stopVideo();
  });
});