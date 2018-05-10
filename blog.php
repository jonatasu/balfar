<?php
  $pagina = 'blog';
  include '__estrutura-topo.php';
?>

  <header class="internas text-center">
    <span class="detalhe-dots cor-w"></span><br>
    <h4 class="cor-w">Blog Balfar</h4>
  </header>
  <section class="estrutura-blog">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 col-md-9">
          <h3 class="cor-primaria">2016 to Become a Breakthrough Year for Fuel Cell Electric</h3>
          <h6 class="text-uppercase">21 ABRIL, 2018 - CATEGORIA 1</h6>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="post post-destaque">
            <div class="lazy-img mb-4"><img class="img-fluid" alt="" data-src="assets/img/post-img-cover-min.jpg"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices eleifend mi et tincidunt. Ut id consequat magna, sed ultricies justo. Sed pulvinar metus sit amet faucibus blandit. Aliquam sit amet ex dignissim, laoreet orci ac, maximus arcu....</p>
            <p>
              <a href="#" class="btn btn-link">Continue lendo</a>
            </p>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="post">
                <h3 class="cor-primaria">2016 to Become a Breakthrough Year for Fuel Cell Electric</h3>
                <h6 class="text-uppercase mb-4">21 ABRIL, 2018 - CATEGORIA 1</h6>
                <div class="lazy-img mb-4"><img class="img-fluid" alt="" data-src="assets/img/post-img-cover-min.jpg"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices eleifend mi et tincidunt. Ut id consequat magna, sed ultricies justo....</p>
                <p>
                  <a href="#" class="btn btn-link">Continue lendo</a>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="post">
                <h3 class="cor-primaria">2016 to Become a Breakthrough Year for Fuel Cell Electric</h3>
                <h6 class="text-uppercase mb-4">21 ABRIL, 2018 - CATEGORIA 1</h6>
                <div class="lazy-img mb-4"><img class="img-fluid" alt="" data-src="assets/img/post-img-cover-min.jpg"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultrices eleifend mi et tincidunt. Ut id consequat magna, sed ultricies justo....</p>
                <p>
                  <a href="#" class="btn btn-link">Continue lendo</a>
                </p>
              </div>
            </div>
            <div class="col-12 text-center">
            <?php include '_paginacao.php' ?>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <?php include '_lista-categorias.php' ?>
        </div>
      </div>
    </div>
  </section>
  
<?php include '__estrutura-rodape.php'; ?>