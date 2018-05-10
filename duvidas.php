<?php
  $pagina = 'duvidas';
  include '__estrutura-topo.php';
?>

  <header class="internas text-center">
    <span class="detalhe-dots cor-w"></span><br>
    <h4 class="cor-w">Dúvidas</h4>
  </header>
  <section class="estrutura-duvidas">
    <div class="container">
      <div id="accordion" class="accordion">

        <?php for($i=1;$i<=10;$i++){ ?>

          <div class="card">
            <div class="card-header" id="duvida_label_<?=$i?>">
              <h3>
                <button class="btn btn-accordion btn-block collapsed" data-toggle="collapse" data-target="#duvida_<?=$i?>" aria-expanded="true" aria-controls="duvida_<?=$i?>">
                  Dúvida nº #<?=$i?> <span class="arrow"></span>
                </button>
              </h3>
            </div>
            <div id="duvida_<?=$i?>" class="collapse" aria-labelledby="duvida_label_<?=$i?>" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </section>
  
<?php include '__estrutura-rodape.php'; ?>