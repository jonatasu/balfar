<?php
  $pagina = 'produtos';
  include 'includes/_estrutura-topo.php';
?>

  <header class="internas text-center">
    <span class="detalhe-dots cor-w"></span><br>
    <h4 class="cor-w">Produtos</h4>
  </header>
  <section class="estrutura-produtos">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <?php include 'includes/lista-categorias.php' ?>
        </div>
        <div class="col-md-9">
          <h5 class="text-uppercase text-center mb-5">Destaques</h5>
          <div class="row">

            <?php for($i = 1; $i <= 6; $i++){ ?>

              <div class="col-md-4">
                <div class="card text-center mb-5">
                  <div class="card-img-top lazy-img">
                    <img data-src="src/img/produto-thumb-01-min.jpg" alt="">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Painel solar Fotovotaico Balfar Solar</h3>                
                    <a class="btn btn-link btn-link-detalhes btn-block" href="produto.php" role="button">[Ver detalhe]</a>
                    <a class="btn btn-primary btn-block" href="#" role="button"><strong>Adicionar ao orçamento</strong></a>
                  </div>
                </div>
              </div>

            <?php } ?>

          </div>
          <div class="row">
            <div class="col-12">
              <?php include 'includes/lista-categorias.php' ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php include 'includes/_estrutura-rodape.php'; ?>