<?php include '__structure_head.php'; ?>
<div id="grid_wrapper">
  <?php include '_header.php'; ?>

  <section id="simulador">
    <div class="container-app">
      <div class="app-form text-center">
        <div class="form-group">
          <label>3. Qual o tipo de local?</label>
          <div class="row">
            <div class="col">
              <a class="local selecionado" data-local="residencial" href="simulador-02a.php" title="Residencial">
                <img class="normal" src="<?php echo $raiz; ?>src/img/app/ico-res-blue-min.png" alt="icone residencia - azul">
                <img class="hover" src="<?php echo $raiz; ?>src/img/app/ico-res-yellow-min.png" alt="icone residencia - amarelo">
                <br>
                Residencial
              </a>
            </div>
            <div class="col">
              <a class="local" data-local="empresarial" href="simulador-02b.php" title="Empresarial">
                <img class="normal" src="<?php echo $raiz; ?>src/img/app/ico-emp-blue-min.png" alt="icone empresa - azul">
                <img class="hover" src="<?php echo $raiz; ?>src/img/app/ico-emp-yellow-min.png" alt="icone empresa - amarelo">
                <br>
                Empresarial
              </a>
            </div>
            <div class="col">
              <a class="local" data-local="outros" href="simulador-02c.php" title="Outros">
                <img class="normal" src="<?php echo $raiz; ?>src/img/app/ico-out-blue-min.png" alt="icone outros - azul">
                <img class="hover" src="<?php echo $raiz; ?>src/img/app/ico-out-yellow-min.png" alt="icone outros - amarelo">
                <br>
                Outros
              </a>
            </div>
          </div>
        </div>

        <form id="residencial" class="form-content" style="display:block" action="simulador-03.php" method="post">
          <div class="form-group">
            <label>4. Quanto você paga em <br>média no mês?</label>
            <p class="obs">
              (Você pode mover a barra com o mouse<?php // ou clicar e editar o valor;?>)
            </p>
            <div class="custom-range">
              <img src="<?php echo $raiz; ?>src/img/app/ico-light-blue-small-min.png" alt="">

              <div class="range">
                <input id="fdl_gasto" type="range" min="0" max="3500">
                <output for="fdl_gasto" onforminput="value = fdl_gasto.valueAsNumber;"></output>
              </div>

              <img src="<?php echo $raiz; ?>src/img/app/ico-light-blue-big-min.png" alt="">
            </div>
          </div>
          <div class="form-group">
            <p class="info">Valor da tarifa que poderá ser localizado na conta</p>
            <input type="number" min="1" step="any" name="nr_1_tarifa" id="nr_1_tarifa" class="text-center" placeholder="0,68">
          </div>
          <br>
          <button type="submit" class="bt bt-primary bt-block">Resultado <span class="ico-arrow"></span></button>
        </form>
        <form id="empresarial" class="form-content" action="simulador-03.php" method="post">
          <p class="info">
            <strong>O dimensionamento e orçamentos para média e alta tensão deverão ser analisados especificamente de acordo com a demanda contratada</strong>
          </p>
          <div class="form-group">
            <p class="info">Demanda contratada que poderá ser localizada na sua conta de energia</p>
            <input type="number" min="1" step="any" name="nr_2_demanda" id="nr_2_demanda" class="text-center" placeholder="0000000">
          </div>
          <div class="form-group">
            <p class="info">Valor da tarifa que poderá ser localizado na conta</p>
            <input type="number" min="1" step="any" name="nr_2_tarifa" id="nr_2_tarifa" class="text-center" placeholder="0,68">
          </div>
          <div class="form-group">
            <p class="info">Irradiação do local</p>
            <input type="text" name="txt_2_irradiacao" id="txt_2_irradiacao" class="text-center" placeholder="4,23 kWh/m2 - dia">
          </div>
          <br>
          <button type="submit" class="bt bt-primary bt-block">Solicitar orçamento <span class="ico-arrow"></span></button>
        </form>
        <form id="outros" class="form-content" action="simulador-03.php" method="post">
          <p class="info">
            <strong>O dimensionamento e orçamentos para média e alta tensão deverão ser analisados especificamente de acordo com a demanda contratada</strong>
          </p>
          <div class="form-group">
            <p class="info">Demanda contratada que poderá ser localizada na sua conta de energia</p>
            <input type="number" min="1" step="any" name="nr_3_demanda" id="nr_3_demanda" class="text-center" placeholder="0000000">
          </div>
          <div class="form-group">
            <p class="info">Valor da tarifa que poderá ser localizado na conta</p>
            <input type="number" min="1" step="any" name="nr_3_tarifa" id="nr_3_tarifa" class="text-center" placeholder="0,68">
          </div>
          <div class="form-group">
            <p class="info">Irradiação do local</p>
            <input type="text" name="txt_3_irradiacao" id="txt_3_irradiacao" class="text-center" placeholder="4,23 kWh/m2 - dia">
          </div>
          <br>
          <button type="submit" class="bt bt-primary bt-block">Solicitar orçamento <span class="ico-arrow"></span></button>
        </form>        
      </div>
    </div>
  </section>

  <?php include '_footer.php'; ?>
</div>
<?php include '__structure_footer.php'; ?>