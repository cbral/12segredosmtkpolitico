<!-- Entre em contato -->
<footer class="section-8">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="subtitulo" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-offset="-50" data-aos-delay="500">Entre em contato</h2>
      </div>
      <div class="col-12 d-flex justify-content-center">
        <?php $telefone_Wpp = get_field('telefone_de_contato', 'option') ?>
        <a data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="600" data-aos-offset="50" href="<?php echo 'https://wa.me/' . $telefone_Wpp ?>" target="_blank" class="btn-default wpp"><img src="<?php echo bloginfo('template_directory'); ?>/images/contato-wpp.svg" alt="fale com a gente" srcset="<?php echo bloginfo('template_directory'); ?>/images/contato-wpp.svg"> fale com a gente</a>
      </div>
      <div class="col-12">

        <?php $email_Contato = get_field('email_de_contato', 'option') ?>
        <p class="text-center contato-e">E-mail: <a href=<?php echo 'mailto:' . $email_Contato . '?subject=Quero%20saber%20mais%20sobre%20o%20método' ?> target="_blank" rel="noopener noreferrer"><?php echo $email_Contato ?></a></p>
      </div>
    </div>
  </div>
</footer>
<div class="footer-dev">
  <p>
    Desenvolvido por
    <a href="https://www.jr01a.com" target="_blank" rel="noopener noreferrer">jr01a.com</a>
  </p>
</div>

<!-- Wpp flutuante -->
<div>
  <a href="<?php echo 'https://wa.me/' . $telefone_Wpp ?>" target="_blank" rel="noopener noreferrer" class="contato-whatsapp" title="Clique aqui para entrar em contato via whatsapp" data-toggle="tooltip" data-offset="10px" data-placement="left">
    <img src="<?php echo bloginfo('template_directory'); ?>/images/contato-wpp.svg" alt="" aria-label="" />
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body d-flex">
        <?php $originSite = get_home_url();
        $linkVideo = get_field('link_do_video_explicativo', 'option') ?>
        <iframe id="player-video-explicativo" type="text/html" width="100%" height="auto" src="<?php echo $linkVideo . '?origin=' . $originSite . '&enablejsapi=1' ?>" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.min.js" async defer></script>
<?php wp_footer(); ?>
</body>

</html>