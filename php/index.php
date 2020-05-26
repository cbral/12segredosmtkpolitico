<?php get_header(); ?>
<div id="bannerTopo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 image-item" src="<?php echo bloginfo('template_directory'); ?>/images/banner.jpg">
      <div class="carousel-caption">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-flex justify-content-center">
                <div>
                  <div class="box-point d-flex justify-content-between">
                    <?php $logoInter = 1;
                    $delay = 200;
                    while ($logoInter <= 12) : ?>
                      <div class="point" data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="<?php echo $delay ?>"></div>
                    <?php $logoInter++;
                      $delay = $delay + 200;
                    endwhile; ?>
                  </div>
                  <div class="logo">
                    <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="400">Os 12 Segredos</h1>
                    <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="800">do Marketing</h1>
                    <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="1200">Político De resultados</h1>
                  </div>
                  <hr class="divisor" data-aos="zoom-in-right" data-aos-delay="1200">
                  <h2 class="subtitulo-logo" data-aos="fade-up" data-aos-delay="1500">Método SSI</h2>
                </div>
              </div>
            </div>
            <div class="col-12">
              <a href="" target="_blank" class="btn-default" data-aos="zoom-in-down" data-aos-delay="1800">quero adquirir agora</a>
            </div>
            <div class="col-12" data-aos="fade-up" data-aos-delay="1900">
              <a href="#videoExplicativo" data-scroll='smoth'>
                <img class="proxima-secao" src="<?php echo bloginfo('template_directory'); ?>/images/proxima-secao.svg" role="presentation">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="video-explicativo" id="videoExplicativo">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="chamada-modal" data-toggle="modal" data-target="#modalVideo" data-aos="flip-up" data-aos-delay="200">

          <img src="<?php echo bloginfo('template_directory'); ?>/images/video.jpg" alt="" srcset="<?php echo bloginfo('template_directory'); ?>/images/video.jpg">
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>