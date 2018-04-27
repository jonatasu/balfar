<?php include '__structure_head.php'; ?>
<div id="grid_wrapper">
  <?php include '_header.php'; ?>

  <section id="simulador">
    <div class="container-app">
      <h3>CALCULADORA SOLAR. VEJA QUAL É O MELHOR SISTEMA PARA SUA CASA OU EMPRESA</h3>
      <form class="app-form common-field text-center" action="simulador-04.php" method="post">
        <div class="form-group">
          <label>5. Resultado</label>
          <p class="info">Número de painéis</p>
          <input type="text" name="txt_paineis" id="txt_paineis" class="text-center" value="10" disabled>
        </div>        
        <div class="form-group">
          <p class="info">Área necessária para instalação</p>
          <input type="text" name="txt_area" id="txt_area" class="text-center" value="10 m²" disabled>
        </div>        
        <div class="form-group">
          <p class="info">Investimento total aproximado</p>
          <input type="text" name="txt_invst" id="txt_invst" class="text-center" value="R$ 140.000,00" disabled>
        </div>
        <div class="form-group">
          <p class="info">Retorno de investimento em meses</p>
          <input type="text" name="txt_retorno_invst" id="txt_retorno_invst" class="text-center" value="R$ 1.000,00" disabled>
        </div>
        <div class="form-group">
          <p class="info"><big>Retorno do investimento (valores em R$)</big></p>
          <canvas id="myChart" width="100%" height="100px"></canvas>
        </div>
        <button type="submit" class="bt bt-primary bt-block">Comparativos <span class="ico-arrow"></span></button>
      </form>
    </div>
  </section>

  <?php include '_footer.php'; ?>
</div>
<?php include '__structure_footer.php'; ?>