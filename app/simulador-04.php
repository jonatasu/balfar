<?php include '__structure_head.php'; ?>
<div id="grid_wrapper">
  <?php include '_header.php'; ?>

  <section id="simulador">
    <div class="container-app text-center">
      <p class="info like-label">6. Informações adicionais</p>
      <br>
      <p class="info">Comparativos de investimentos</p>
      <div class="blue-box">
        <img src="<?php echo $raiz; ?>src/img/app/invest-UP-min.png" alt="icone - retorno positivo">
        <p class="info"><strong>Seu investimento no sistema votaico é de R$ 150.000,00.<br>Rendimento de 19%</strong></p>
        <img src="<?php echo $raiz; ?>src/img/app/invest-DOWN-min.png" alt="icone - retorno negativo">
        <p class="info"><strong>O mesmo valor investido na Caderneta de Poupança.<br>Rendimento de 8,3%</strong></p>
      </div>
      <p>
        Os resultados apresentados podem variar de acordo com as informações fornecidas. Fatores como sombreamento, inclinação do telhado e outras interferências podem variar na produção de energia do sistema fotovoltaico.
      </p>
      <form class="app-form contact text-center" action="simulador-05.php" method="post">
        <input type="text" name="txt_name" id="txt_name" placeholder="Escreva seu nome">
        <input type="email" name="txt_email" id="txt_email" placeholder="Seu email">
        <input type="tel" name="txt_name" id="txt_name" placeholder="Telefone">
        <textarea name="txtarea_msg" id="txtarea_msg" rows="4" placeholder="Escreva sua mensagem"></textarea>
        <br>
        <button type="submit" class="bt bt-primary bt-block">Enviar <span class="ico-arrow"></span></button>
      </form>
      <br>
      <p class="info like-label">
        <strong>Ou se preferir liga pra gente!</strong>
        <br>
        <a class="bt bt-tel" href="tel:+554430293655" title="ligar para +55 (44) 3029-3655">
          <img src="<?php echo $raiz; ?>src/img/app/ico-tel-min.png" alt="icone - telefone"> +55 (44) 3029-3655 - Maringá
        </a>
      </p>
      
      
    </div>
  </section>

  <?php include '_footer.php'; ?>
</div>
<?php include '__structure_footer.php'; ?>