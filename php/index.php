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
                    <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="1200">Político De resultado</h1>
                  </div>
                  <hr class="divisor" data-aos="zoom-in-right" data-aos-delay="1200">
                  <h2 class="subtitulo-logo" data-aos="fade-up" data-aos-delay="1500">Método SSI</h2>
                </div>
              </div>
            </div>
            <div class="col-12">
              <a href="" target="_blank" class="btn-default" data-aos="zoom-in-down" data-aos-delay="1800">quero adquirir agora</a>
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
        <h2 class="subtitulo" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000" data-aos-offset="100">Por que o Método SSI é o melhor para a campanha política?
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
        <p data-aos="fade-in" data-aos-delay="200" data-aos-offset="100">O <strong>método SSI</strong> é um tripé político com elementos atuais do marketing. A partir de estudos realizados pelo Instituto Fronteira, se alcançou esse resultado, que reúne análises e processos <strong>eleitorais e políticos</strong> na última década.
        </p>
        <p data-aos="fade-in" data-aos-delay="200">A sigla SSI significa <strong>Social Media, Strategy e Image</strong>. É a partir deste tripé, de itens interligados entrei si, que mostramos os <strong>12 passos</strong> para seguir em uma campanha eleitoral. </p>
      </div>
      <div class="col-lg-6">
        <figure>
          <img data-aos="fade-left" data-aos-delay="300" src="<?php echo bloginfo('template_directory'); ?>/images/icons-ssi.png" class="mt-3" srcset="<?php echo bloginfo('template_directory'); ?>/images/icons-ssi.png">

          <figcaption>
            <small data-aos="fade-in" data-aos-delay="350" class="text-uppercase">É a fórmula para ter uma campanha de um mandato de resultado.</small>
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
        <h2 class="subtitulo large-fonte" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">O Tripé SSI</h2>
      </div>
    </div>
    <div class="row">
      <!-- Item 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="box-itens-ssi">
          <figure>
            <img data-aos="zoom-out" data-aos-delay="250" data-aos-duration="500" src="<?php echo bloginfo('template_directory'); ?>/images/icon-social-media.svg" srcset="<?php echo bloginfo('template_directory'); ?>/images/icon-social-media.svg">
            <figcaption>
              <h3 data-aos="fade-up" data-aos-easing="ease-in-sine">Social Media</h3>
            </figcaption>
          </figure>
          <p class="text-center text-lg-left" data-aos="fade-in" data-aos-duration="1000">Com a internet não sendo mais restrita somente às classes mais privilegiadas, todos são empurrados para hábitos cada vez mais conectados às redes sociais, sendo obrigatório ter noções de como ser seu próprio “social media”. No ambiente político não é diferente. O candidato ou político em mandato deve saber gerenciar seus próprios perfis de redes sociais, pois se não consegue espaço na mídia, é necessário que seja a sua própria mídia.</p>
          <p class="text-center" data-aos="fade-in" data-aos-duration="200" data-aos-offset="100"><strong>Mas é preciso que o candidato entenda sobre as estratégias voltadas para cada uma das redes sociais, como e quando publicar determinada informação, e o mais importante: o que tornar público aos seus seguidores.
            </strong></p>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="box-itens-ssi">
          <figure>
            <img data-aos="zoom-out" data-aos-delay="250" data-aos-duration="500" src="<?php echo bloginfo('template_directory'); ?>/images/icon-strategy.svg" srcset="<?php echo bloginfo('template_directory'); ?>/images/icon-strategy.svg">
            <figcaption>
              <h3 data-aos="fade-down" data-aos-easing="ease-in-sine">Strategy</h3>
            </figcaption>
          </figure>
          <p class="text-center text-lg-left" data-aos="fade-in" data-aos-duration="1000">Afinal, preciso me preocupar somente com as redes sociais? Não. O candidato/político deve alinhar estratégias políticas e eleitorais na internet sem esquecer do corpo a corpo. As estratégias virtuais e físicas precisam andar em harmonia no marketing político.</p>
          <p class="text-center" data-aos="fade-in" data-aos-duration="200" data-aos-offset="100"><strong>Por isso, deve-se pensar em estratégias que podem ser alinhadas no âmbito real, como o planejamento de uma campanha, agenda positiva, organograma de campanha/mandato, aderência ao discurso político, defesas de propostas e bandeiras e criação de reputação.
            </strong></p>
        </div>
      </div>
      <!-- Item 3 -->
      <div class="col-md-12 col-lg-4">
        <div class="box-itens-ssi">
          <figure>
            <img data-aos="zoom-out" data-aos-delay="250" data-aos-duration="500" src="<?php echo bloginfo('template_directory'); ?>/images/icon-image.svg" srcset="<?php echo bloginfo('template_directory'); ?>/images/icon-image.svg">
            <figcaption>
              <h3 data-aos="fade-up" data-aos-easing="ease-in-sine">Image</h3>
            </figcaption>
          </figure>
          <p class="text-center text-lg-left" data-aos="fade-in" data-aos-duration="1000">Ok. Você virou o seu próprio social media e tem conhecimentos de estratégias de campanha e mandato. Estou pronto? Não.</p>
          <p class="text-center" data-aos="fade-in" data-aos-duration="200"><strong>O candidato/político precisa ainda saber como entonar o seu discurso, se portar em frente às câmeras, saber como lidar com a imprensa, a quem procurar no meio jornalístico, vestimenta para cada ocasião e formas de falar para cada público.
            </strong></p>
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
        <h2 class="subtitulo" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Para quem o método foi pensado?
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
          O Método SSI foi pensado para candidatos com ou sem mandatos e, ainda, para quem atua ou quer atuar com marketing político e eleitoral. Este método reúne os principais e essenciais elementos para atrair o público dentro e fora da internet.
        </p>
        <h3 class="destaque text-center">Se você busca notoriedade, este é o caminho! </h3>
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
          <div class="col-12">
            <h2><span data-aos="fade-right">Consultoria</span> <span class="subtitulo-colors" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="300">Grátis</span></h2>
            <p class="mb-4 pb-3 text-center text-md-left" data-aos="fade-in" data-aos-delay="200" data-aos-easing="ease-in-cubic">Comprando o método SSI nesta semana, você ganha uma consultoria virtual de uma hora totalmente grátis. É o momento de você apresentar suas ideias para a campanha e construção da imagem, tirando as suas principais dúvidas: estratégia de campo, identidade visual, postura na internet, etc.</p>
          </div>
          <div class="col-12">
            <h2><span data-aos="fade-right">Dados regionais</span> <span class="subtitulo-colors" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="300">Grátis</span></h2>
            <p class="mb-4 pb-3 text-center text-md-left" data-aos="fade-in" data-aos-delay="200" data-aos-easing="ease-in-cubic">O método SSI trabalha com dados e estatísticas e pensa no resultado prático do aluno. Por isso, para cada inscrito damos gratuitamente uma tabela com dados importantes sobre a realidade da cidade onde ele atua, como a economia, a fonte de renda e o perfil do eleitorado. </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="subtitulo-colors-2" data-aos="fade-right">Método sem enrola<span class="text-lowercase">ç</span>ão</h2>
        <div data-aos="fade-in" data-aos-delay="200" data-aos-easing="ease-in-cubic" class="text-center text-md-left">
          <p>Você também já deve ter visto por aí anúncios de cursos de mais de vinte horas ensinando como realizar uma campanha.
          </p>
          <p>Garanto que esses cursos mais atrapalham do que ajudam. As estratégias políticas precisam ser concisas, práticas, direcionadas e bem fundamentas.
          </p>
          <p>É por isso que o método SSI não tem enrolação, não tem contação de historinhas para ganhar tempo. Ensinamos, com bons exemplos, o caminho prático que se deve seguir para ter um resultado real e objetivo.
          </p>
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
        <h2 class="subtitulo" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Quem ensina o método?
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
        <p class="subtitulo-descricao">O método foi pensado por 8 profissionais da área política, marketing e comunicação. As aulas são repassadas por três deles. </p>
      </div>
    </div>
    <div class="row">
      <!-- Autor 1 -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="image-autor">
          <img data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500" data-aos-easing="linear" src="<?php echo bloginfo('template_directory'); ?>/images/autor-abinoan-santiago.jpg" alt="Abinoan Santiago" srcset="<?php echo bloginfo('template_directory'); ?>/images/autor-abinoan-santiago.jpg">
        </div>
        <h3 class="titulo-autor" data-aos="fade-down">Abinoan<br> Santiago</h3>
        <p data-aos="fade-in" data-aos-delay="300">É doutorando em ciência política, mestre em jornalismo, jornalista e tem experiência em jornal impresso, rádio, TV e internet. Escreve para UOL e France-Guyane. Ele tem passagens como editor do G1 e GloboEsporte.com. Atuou em eleições municipais e estaduais, além de eventos especiais de cunho político. Se especializou em política, administração pública, uso de dados públicos, gerenciamento de crise, assessoria de comunicação e estratégias de campanhas eleitorais.
        </p>
      </div>
      <!-- Autor 2 -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="image-autor">
          <img data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500" data-aos-easing="linear" src="<?php echo bloginfo('template_directory'); ?>/images/autor-rodrigo-sales.jpg" alt="Rodrigo Sales" srcset="<?php echo bloginfo('template_directory'); ?>/images/autor-rodrigo-sales.jpg">
        </div>
        <h3 class="titulo-autor" data-aos="fade-down">Rodrigo <br>Sales</h3>
        <p data-aos="fade-in" data-aos-delay="300">É jornalista e especialista em marketing político. Ele tem experiência em consultoria política, estratégia de conteúdo e assessoria de comunicação, atuando em campanhas eleitorais, publicitárias e em agências de marketing digital. Atualmente compõe equipes de redes sociais de governos da Região Norte e atua como ghost-writer independente.
        </p>
      </div>
      <!-- Autor 3 -->
      <div class="col-lg-4">
        <div class="image-autor">
          <img data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500" data-aos-easing="linear" src="<?php echo bloginfo('template_directory'); ?>/images/autor-dyeperson-martins.jpg" alt="Dyepeson Martins" srcset="<?php echo bloginfo('template_directory'); ?>/images/autor-dyeperson-martins.jpg">
        </div>
        <h3 class="titulo-autor" data-aos="fade-down">Dyepeson<br> Martins</h3>
        <p data-aos="fade-in" data-aos-delay="300">É Jornalista e mestrando em Jornalismo, com experiência em jornais impressos, rádio, TV, web, assessoria de comunicação e marketing político. Atuou em veículos como G1 e afiliadas da Rede Globo, atuando no cenário nacional em diversas temáticas. Se especializou em estratégias de imagem e comunicação política. Tem experiência em campanhas eleitorais, gerenciamento de crise e assessoramento de partidos políticos, figuras públicas e empresariais.
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
        <h1 class="titulo-s6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">O melhor investimento</h1>
        <p class="titulo-s6-descricao" data-aos="fade-up" data-aos-delay="200" data-aos-easing="linear">Se oferecem para você um curso muito barato, desconfie! </p>
      </div>
      <div class="col-12 titulo-s6-descricao-2" data-aos="fade-in" data-aos-delay="300">
        <p class="mb-5 mt-3">Para que alguém tenha conhecimento sobre algo, esta pessoa precisa, além de experiência, ter investido em qualificação e qualidade no que produz.</p>
        <p>O método SSI foi pensado de forma concisa e estratégica para caber em todos os bolsos.
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
        <h1 class="titulo-s7" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">Garanta já o seu Curso!</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="box-preco">
          <p><span class="preco-de" data-aos="fade-in" data-aos-delay="150" data-aos-easing="ease-in">De</span> <span class="preco-cifrao vermelho" data-aos="fade-in" data-aos-delay="550" data-aos-easing="ease-in">R$</span> <span class="preco-antigo" data-aos="flip-up" data-aos-delay="550" data-aos-easing="ease-in">920,99</span> </p>
          <p class="preco-por" data-aos="fade-in" data-aos-delay="1000" data-aos-easing="ease-in">por</p>
          <p class="m-0" style="line-height: 1.2"> <span class="preco-atual"><span class="preco-cifrao posicao" data-aos="fade-in" data-aos-delay="1400" data-aos-easing="ease-in" data-aos-offset="80">R$</span><span data-aos="zoom-in" data-aos-delay="1600" data-aos-easing="ease-in" data-aos-duration="600" data-aos-offset="80">449,99</span> <span class="preco-parcelamento" data-aos="fade-in" data-aos-delay="2500" data-aos-easing="ease-in" data-aos-offset="80">parcele em até 6x</span></span> </p>
        </div>
        <div class="box-preco-descricao">
          <p class="p-descricao-color tit-1">Inclui</p>
          <p class="p-descricao-color-2">os 12 segredos do Marketing Político de Resultado</p>
          <p class="p-descricao-color">+</p>
          <p class="p-descricao-color-2">consultoria virtual grátis (com agendamento e perguntas prévias)</p>
          <p class="p-descricao-color">+</p>
          <p class="p-descricao-color-2">dados regionais grátis (dez dias após o inscrito entrar em contato)</p>
          <a data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="600" data-aos-duration="800" href="" target="_blank" class="btn-default">quero adquirir agora o método</a>
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