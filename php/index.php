<?php get_header(); ?>
<div id="bannerTopo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 image-item" src="<?php the_field('imagem_para_o_fundo_do_banner', 'option') ?>">
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
                    <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="400"><?php the_field('texto_1_banner', 'option') ?></h1>
                    <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="800"><?php the_field('texto_2_banner', 'option') ?></h1>
                    <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="1200"><?php the_field('texto_3_banner', 'option') ?></h1>
                  </div>
                  <hr class="divisor" data-aos="zoom-in-right" data-aos-delay="1200">
                  <h2 class="subtitulo-logo" data-aos="fade-up" data-aos-delay="1500"><?php the_field('texto_4_banner', 'option') ?></h2>
                </div>
              </div>
            </div>
            <div class="col-12">
              <a href="<?php the_field('link_btn_produto', 'option') ?>" target="_blank" class="btn-default" data-aos="zoom-in-down" data-aos-delay="1800"><?php the_field('btn_banner_principal', 'option') ?></a>
            </div>
            <div class="col-12" data-aos="fade-up" data-aos-delay="1900" data-aos-offset="120">
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

<!-- Vídeo explicativo -->
<div class="video-explicativo" id="videoExplicativo">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="chamada-modal" data-toggle="modal" data-target="#modalVideo" data-aos="flip-up" data-aos-delay="200" data-aos-offset="150">

          <img src="<?php echo bloginfo('template_directory'); ?>/images/video.jpg" alt="" srcset="<?php echo bloginfo('template_directory'); ?>/images/video.jpg">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Por que o Método... -->
<div class="section-1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="subtitulo" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-offset="100"><?php the_field('titulo_ssi_metodo_sobre', 'option') ?>
        </h2>
        <div class="box-point dots-color d-flex justify-content-between">
          <?php $logoInter = 1;
          $delay = 200;
          while ($logoInter <= 5) : ?>
            <div class="point" data-aos="zoom-in-right" data-aos-duration="500" data-aos-offset="100" data-aos-delay="<?php echo $delay ?>"></div>
          <?php $logoInter++;
            $delay = $delay + 200;
          endwhile; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 pr-lg-4">
        <p data-aos="fade-in" data-aos-delay="200" data-aos-offset="100"><?php the_field('primeiro_paragrafo_sobre_ssi', 'option') ?> </p>
        <p data-aos="fade-in" data-aos-delay="200"><?php the_field('segundo_paragrafo_sobre_ssi', 'option') ?></p>
      </div>
      <div class="col-lg-6">
        <figure>
          <img data-aos="fade-left" data-aos-delay="300" src="<?php echo bloginfo('template_directory'); ?>/images/icons-ssi.png" class="mt-3" srcset="<?php echo bloginfo('template_directory'); ?>/images/icons-ssi.png">

          <figcaption>
            <small data-aos="fade-in" data-aos-delay="350" class="text-uppercase"><?php the_field('descricao_dos_icones_sobre_ssi', 'option') ?></small>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</div>

<!-- O Tripé... -->
<div class="section-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="subtitulo large-fonte" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"><?php the_field('titulo_tripé_ssi', 'option') ?></h2>
      </div>
    </div>
    <div class="row">
      <!-- Item 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="box-itens-ssi">
          <figure>
            <img data-aos="zoom-out" data-aos-delay="250" data-aos-duration="500" src="<?php echo bloginfo('template_directory'); ?>/images/icon-social-media.svg" srcset="<?php echo bloginfo('template_directory'); ?>/images/icon-social-media.svg">
            <figcaption>
              <h3 data-aos="fade-up" data-aos-easing="ease-in-sine"><?php the_field('tripe_subtitulo_item_1', 'option') ?></h3>
            </figcaption>
          </figure>
          <p class="text-center text-lg-left" data-aos="fade-in" data-aos-duration="1000"><?php the_field('tripe_descricao_item_1', 'option') ?></p>
          <p class="text-center" data-aos="fade-in" data-aos-duration="200" data-aos-offset="100"><strong><?php the_field('tripe_descricao_enfase_item_1', 'option') ?>
            </strong></p>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="box-itens-ssi">
          <figure>
            <img data-aos="zoom-out" data-aos-delay="250" data-aos-duration="500" src="<?php echo bloginfo('template_directory'); ?>/images/icon-strategy.svg" srcset="<?php echo bloginfo('template_directory'); ?>/images/icon-strategy.svg">
            <figcaption>
              <h3 data-aos="fade-down" data-aos-easing="ease-in-sine"><?php the_field('tripe_subtitulo_item_2', 'option') ?></h3>
            </figcaption>
          </figure>
          <p class="text-center text-lg-left" data-aos="fade-in" data-aos-duration="1000"><?php the_field('tripe_descricao_item_2', 'option') ?></p>
          <p class="text-center" data-aos="fade-in" data-aos-duration="200" data-aos-offset="100"><strong><?php the_field('tripe_descricao_enfase_item_2', 'option') ?> </strong></p>
        </div>
      </div>
      <!-- Item 3 -->
      <div class="col-md-12 col-lg-4">
        <div class="box-itens-ssi">
          <figure>
            <img data-aos="zoom-out" data-aos-delay="250" data-aos-duration="500" src="<?php echo bloginfo('template_directory'); ?>/images/icon-image.svg" srcset="<?php echo bloginfo('template_directory'); ?>/images/icon-image.svg">
            <figcaption>
              <h3 data-aos="fade-up" data-aos-easing="ease-in-sine"><?php the_field('tripe_subtitulo_item_3', 'option') ?></h3>
            </figcaption>
          </figure>
          <p class="text-center text-lg-left" data-aos="fade-in" data-aos-duration="1000"><?php the_field('tripe_descricao_item_3', 'option') ?></p>
          <p class="text-center" data-aos="fade-in" data-aos-duration="200"><strong><?php the_field('tripe_descricao_enfase_item_3', 'option') ?></strong></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Para quem o método... -->
<div class="section-3">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="subtitulo" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
          <?php the_field('titulo_para_quem_metodo', 'option') ?>
        </h2>
        <div class="box-point dots-color d-flex justify-content-between">
          <?php $logoInter = 1;
          $delay = 200;
          while ($logoInter <= 5) : ?>
            <div class="point" data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="<?php echo $delay ?>"></div>
          <?php $logoInter++;
            $delay = $delay + 200;
          endwhile; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="text-uppercase text-center">
          <?php the_field('descricao_para_quem_metodo', 'option') ?>
        </p>
        <h3 class="destaque text-center"> <?php the_field('subtitulo_para_quem_metodo_copiar', 'option') ?></h3>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-8 col-md-6">
        <img data-aos="zoom-in-up" class=" image-ssi-metodo" src="<?php echo bloginfo('template_directory'); ?>/images/image-ssi-metodo.png" alt="" srcset="<?php echo bloginfo('template_directory'); ?>/images/image-ssi-metodo.png">
      </div>
    </div>
  </div>
</div>

<!-- Consultoria Grátis -->
<div class="section-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <!-- item 1 -->
          <div class="col-12">
            <h2><span data-aos="fade-right"><?php the_field('item_1_consultoria_titulo', 'option') ?></span> <span class="subtitulo-colors" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="300"><?php the_field('item_1_consultoria_titulo_2', 'option') ?></span></h2>
            <p class="mb-4 pb-3 text-center text-md-left" data-aos="fade-in" data-aos-delay="200" data-aos-easing="ease-in-cubic"><?php the_field('item_1_consultoria_descricao', 'option') ?></p>
          </div>
          <!-- item 2 -->
          <div class="col-12">
            <h2><span data-aos="fade-right"><?php the_field('item_2_consultoria_titulo', 'option') ?></span> <span class="subtitulo-colors" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="300"><?php the_field('item_2_consultoria_titulo_2', 'option') ?></span></h2>
            <p class="mb-4 pb-3 text-center text-md-left" data-aos="fade-in" data-aos-delay="200" data-aos-easing="ease-in-cubic"><?php the_field('item_2_consultoria_descricao', 'option') ?></p>
          </div>
        </div>
      </div>
      <!-- item 3 -->
      <div class="col-md-6">
        <h2 class="subtitulo-colors-2" data-aos="fade-right"><?php the_field('item_3_consultoria_titulo', 'option') ?></h2>
        <div data-aos="fade-in" data-aos-delay="200" data-aos-easing="ease-in-cubic" class="text-center text-md-left">
          <?php the_field('item_3_consultoria_descricao', 'option') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Quem Ensina o Método -->
<div class="section-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="subtitulo" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"><?php the_field('titulo_palestrantes', 'option') ?>
        </h2>
        <div class="box-point dots-color d-flex justify-content-between">
          <?php $logoInter = 1;
          $delay = 200;
          while ($logoInter <= 5) : ?>
            <div class="point" data-aos="zoom-in-right" data-aos-duration="500" data-aos-delay="<?php echo $delay ?>"></div>
          <?php $logoInter++;
            $delay = $delay + 200;
          endwhile; ?>
        </div>
      </div>
      <div class="col-12 col-md-7">
        <p class="subtitulo-descricao"><?php the_field('descricao_palestrantes', 'option') ?></p>
      </div>
    </div>
    <div class="row">
      <!-- Autor 1 -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="image-autor">
          <img data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500" data-aos-easing="linear" src="<?php the_field('foto_palestrante_1', 'option') ?>" alt="<?php the_field('nome_palestrante_1', 'option') ?>" srcset="<?php the_field('foto_palestrante_1', 'option') ?>">
        </div>
        <h3 class="titulo-autor" data-aos="fade-down"><?php the_field('nome_palestrante_1', 'option') ?></h3>
        <p data-aos="fade-in" data-aos-delay="300"><?php the_field('palestrante_biografia_1', 'option') ?>
        </p>
      </div>
      <!-- Autor 2 -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="image-autor">
          <img data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500" data-aos-easing="linear" src="<?php the_field('foto_palestrante_2', 'option') ?>" alt="<?php the_field('nome_palestrante_2', 'option') ?>" srcset="<?php the_field('foto_palestrante_2', 'option') ?>">
        </div>
        <h3 class="titulo-autor" data-aos="fade-down"><?php the_field('nome_palestrante_2', 'option') ?></h3>
        <p data-aos="fade-in" data-aos-delay="300"><?php the_field('palestrante_biografia_2', 'option') ?>
        </p>
      </div>
      <!-- Autor 3 -->
      <div class="col-lg-4">
        <div class="image-autor">
          <img data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500" data-aos-easing="linear" src="<?php the_field('foto_palestrante_3', 'option') ?>" alt="<?php the_field('nome_palestrante_3', 'option') ?>" srcset="<?php the_field('foto_palestrante_3', 'option') ?>">
        </div>
        <h3 class="titulo-autor" data-aos="fade-down"><?php the_field('nome_palestrante_3', 'option') ?></h3>
        <p data-aos="fade-in" data-aos-delay="300"><?php the_field('palestrante_biografia_3', 'option') ?>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- O melhor investimento -->
<div class="section-6">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="titulo-s6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"><?php the_field('titulo_investimento', 'option') ?></h1>
        <p class="titulo-s6-descricao" data-aos="fade-up" data-aos-delay="200" data-aos-easing="linear"><?php the_field('subtitulo_investimento', 'option') ?></p>
      </div>
      <div class="col-12 titulo-s6-descricao-2" data-aos="fade-in" data-aos-delay="300">
        <p class="mb-5 mt-3">
          <?php the_field('descricao_investimento', 'option') ?>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Garanta Já... -->
<div class="section-7">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="titulo-s7" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000"><?php the_field('titulo_produto', 'option') ?></h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="box-preco">
          <p><span class="preco-de" data-aos="fade-in" data-aos-delay="150" data-aos-easing="ease-in">De</span> <span class="preco-cifrao vermelho" data-aos="fade-in" data-aos-delay="550" data-aos-easing="ease-in">R$</span> <span class="preco-antigo" data-aos="flip-up" data-aos-delay="550" data-aos-easing="ease-in"><?php the_field('preco_anterior', 'option') ?></span> </p>
          <p class="preco-por" data-aos="fade-in" data-aos-delay="1000" data-aos-easing="ease-in">por</p>
          <p class="m-0" style="line-height: 1.2"> <span class="preco-atual"><span class="preco-cifrao posicao" data-aos="fade-in" data-aos-delay="1400" data-aos-easing="ease-in" data-aos-offset="80">R$</span><span data-aos="zoom-in" data-aos-delay="1600" data-aos-easing="ease-in" data-aos-duration="600" data-aos-offset="80"><?php the_field('preco_atual', 'option') ?></span> <span class="preco-parcelamento" data-aos="fade-in" data-aos-delay="2500" data-aos-easing="ease-in" data-aos-offset="80">parcele em até <span><?php the_field('quantidade_de_parcelas', 'option') ?></span>x</span></span> </p>
        </div>
        <div class="box-preco-descricao">
          <p class="p-descricao-color tit-1">Inclui</p>
          <p class="p-descricao-color-2"><?php the_field('item_1_produto', 'option') ?></p>
          <p class="p-descricao-color">+</p>
          <p class="p-descricao-color-2"><?php the_field('item_2_produto', 'option') ?></p>
          <p class="p-descricao-color">+</p>
          <p class="p-descricao-color-2"><?php the_field('item_3_produto', 'option') ?></p>
          <a data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600" data-aos-duration="800" href="<?php the_field('link_btn_produto', 'option') ?>" target="_blank" class="btn-default"><?php the_field('texto_do_botao_comprar', 'option') ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  -->
<!-- <div class="section-9">
  <div class="container">
    <div class="row"></div>
  </div>
</div> -->
<?php get_footer(); ?>