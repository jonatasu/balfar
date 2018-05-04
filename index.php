<?php
  $home = true;

  include 'includes/_estrutura-topo.php';
?>
<div id="wrapper">

  <?php // MENU PRINCIPAL ?>
  <?php include 'includes/menu-principal.php'; ?>
  
  <?php // BANNER ?>
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-5 d-xs-none lazy-img" data-aos="fade-in" data-delay="800">
          <img data-src="src/img/banner-iphone-min.png" alt="Balfar app rodando em um iphone">
        </div>
        <div class="col-sm-6 col-md-7 d-flex direction-column justify-content-center" data-aos="fade-in" data-aos-delay="1200">
          <div class="text-right">
            <h2>Mais economia para sua vida!</h2>
            <span class="detalhe-dots cor-secundaria"></span><br>
            <p class="fs30">Baixe nossa calculadora solar na Apple Store ou Google Play e veja o melhor sistema para a sua casa ou empresa.</p>
            <a class="btn btn-primary" href="#" role="button">Clique aqui</a>
          </div>
        </div>      
      </div>
    </div>
  </section>

  <?php // POR QUE OPTAR POR ENERGIA SOLAR ?>
  <section class="porque">
    <div class="container text-center">
      <h2 class="cor-w">Mais economia para sua vida!</h2>
      <span class="detalhe-dots cor-primaria"></span><br>
      <div class="row card-columns mt-4">
        <div class="col-xs-12 col-sm" data-aos="fade-up" data-aos-delay="500">
          <div class="card lazy-img">
            <img class="card-img-top" data-src="src/img/icone-pq-01-sustentavel-min.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Sustentável</h4>
              <p class="card-text">A energia solar não polui durante o seu uso</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm" data-aos="fade-up" data-aos-delay="800">
          <div class="card lazy-img">
            <img class="card-img-top" data-src="src/img/icone-pq-02-baixa-mnt-min.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Baixa manutenção</h4>
              <p class="card-text">As centrais necessitam de manutenção mínima</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm" data-aos="fade-up" data-aos-delay="1100">
          <div class="card lazy-img">
            <img class="card-img-top" data-src="src/img/icone-pq-03-economico-min.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Econômico</h4>
              <p class="card-text">Equipamentos cada vez mais potentes com preços mais justos</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm" data-aos="fade-up" data-aos-delay="1400">
          <div class="card lazy-img">
            <img class="card-img-top" data-src="src/img/icone-pq-04-viavel-min.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Viável</h4>
              <p class="card-text">Em países tropicais como o Brasil a energia solar é totalmente viável</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm" data-aos="fade-up" data-aos-delay="1700">
          <div class="card lazy-img">
            <img class="card-img-top" data-src="src/img/icone-pq-05-acessivel-min.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Acessível</h4>
              <p class="card-text">A energia solar é excelente em lugares remotos ou de difícil acesso</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php // CALCULADORA SOLAR ?>
  <?php include 'includes/calculadora-solar.php'; ?>
  
  <?php // QUEM SOMOS ?>
  <section class="quem-somos">
    <div class="container">
      <div class="row">
        <div class="col-sm" data-aos="fade-right" data-delay="900">
          <span class="detalhe-dots cor-secundaria"></span><br>
          <h4 class="cor-secundaria">Quem somos</h4>
          <h2 class="cor-primaria text-uppercase"><strong>Muito mais do que gerar energia, temos um compromisso com o nosso planeta!</strong></h2>
          <p class="fs18 cor-neutra">
            Somos uma empresa genuinamente brasileira, localizada na cidade de  Paranavaí, na região noroeste  do Estado do Paraná, com dois escritórios (filiais) localizados em Maringá-PR, onde está centralizada a administração da empresa e também um centro de distribuição em Recife- PE. Possui também escritórios de vendas em Brasilia-DF e Goiás.
          </p>
        </div>
        <div class="col-sm lazy-img" data-aos="fade-up" data-delay="400">
          <img data-src="src/img/painel-solar-min.jpg" alt="painel solar">
        </div>
      </div>
    </div>    
  </section>

  <?php // VIDEO ?>
  <section class="video text-center" data-aos="fade-in">
    <div class="container-fluid">
      <h2 class="mb-5">Lorem ipsum dolor sit amet consectetur adipiscing elit</h2>
      <a class="lazy-img" data-ytid="BGaNF48FHMI" href="http://www.youtube.com/watch_popup?v=BGaNF48FHMI" title="assistir Lorem Ipsum">
        <img data-src="src/img/icone-youtube-play-min.png" alt="">
      </a>
      <iframe class="d-none d-xs-block" width="640" height="360" src="https://www.youtube.com/embed/BGaNF48FHMI" frameborder="0"></iframe>
      <div class="d-none d-sm-block" id="ytplayer"></div>
    </div>
  </section>

  <?php // DESTAQUES - PRODUTOS ?>
  <?php include 'includes/destaque-produtos.php'; ?>

  <?php // DESTAQUES - BLOG ?>
  <?php include 'includes/destaque-blog.php'; ?>

  <?php // ASSINAR NEWSLETTER ?>
  <?php include 'includes/assinar-newsletter.php'; ?>

  <?php // CONTATO - ATALHOS ?>
  <?php include 'includes/contato-atalhos.php'; ?>

  <?php // CONTATO - FULL FORM ?>
  <?php include 'includes/contato-form-map.php'; ?>

</div>
<?php include 'includes/_estrutura-rodape.php'; ?>