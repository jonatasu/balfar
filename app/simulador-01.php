<?php include '__structure_head.php'; ?>
<div id="grid_wrapper">
  <?php include '_header.php'; ?>

  <section id="simulador">
    <div class="container-app">
      <h3>CALCULADORA SOLAR. VEJA QUAL É O MELHOR SISTEMA PARA SUA CASA OU EMPRESA</h3>
      <form class="app-form" action="simulador-02" method="post">
        <div class="form-group">
          <label>1. O local possui acesso à rede elétrica?</label>
          <div class="row">
            <div class="col text-right">
              <div class="radio radio-primary">
                <input type="radio" class="styled" name="q1_rede_eletrica" id="optionsRadios1" value="s" checked="checked">
                <label for="optionsRadios1"> Sim </label>
              </div>
            </div>
            <div class="col text-left">
              <div class="radio radio-primary">
                <input type="radio" class="styled" name="q1_rede_eletrica" id="optionsRadios2" value="n">
                <label for="optionsRadios2"> Não </label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>2. Onde pretende realizar a instalação?</label>
          <div class="custom-select">
            <select name="sel_estado" id="sel_estado">
              <option selected>Select one</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-select">
            <select name="sel_cidade" id="sel_cidade">
              <option selected>Select one</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>
        <button type="submit" class="bt bt-primary bt-block">Próxima etapa <span class="ico-arrow"></span></button>
      </form>
    </div>
  </section>

  <?php include '_footer.php'; ?>
</div>
<?php include '__structure_footer.php'; ?>