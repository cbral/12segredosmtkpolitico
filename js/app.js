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
  AOS.init({
    offset: 180
  });

  // Add smooth scrolling to all links
  $("[data-scroll='smoth']").on('click', function (event) {
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 30
      }, 300);
    }
  });

  $('#modalVideo').on('show.bs.modal', function (e) {
    player.playVideo();
  });

  $('#modalVideo').on('hidden.bs.modal', function (e) {
    player.stopVideo();
  });

  // Wpp flutuante
  const icone = document.querySelector(".contato-whatsapp");
  let intervalSS;

  function setSS() {
    intervalSS = setInterval(setWpp, 10000);
  }
  setSS();

  function setWpp() {
    icone.classList.toggle("animatedWpp");

    setTimeout(() => {
      icone.classList.remove("animatedWpp");
    }, 2500);
  }

  icone.addEventListener('mouseover', () => {
    clearInterval(intervalSS);
    intervalSS = null;
  });

  icone.addEventListener('mouseout', () => {
    setSS();
  });
  
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});