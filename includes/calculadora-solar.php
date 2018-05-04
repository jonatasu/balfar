<section class="calculadora-web pb-0">
  <div class="container">
    <div class="text-center">
      <h2 class="cor-primaria">
        Calculadora solar. Veja qual é o melhor sistema para sua casa ou empresa.
      </h2>
      <p class="cor-neutra">Pra um melhor resultado, preencha corretamente todos os campos!</p>
    </div>
    <hr class="mt-5 mb-5">
    <div class="row d-flex align-items-stretch">
      <div class="col-sm-7 pb-4">
        <div id="etapa1" class="etapas">
          <form class="app-form" action="#etapa2" method="post">
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
            <button type="submit" class="btn btn-link cor-primaria">Próxima etapa <span class="ico-arrow"></span></button>
          </form>
        </div>

        <div id="etapa2" class="etapas d-none">
          <div class="app-form text-center">
            <div class="form-group">
              <label>3. Qual o tipo de local?</label>
              <div class="row">
                <div class="col">
                  <a class="local selecionado" data-local="residencial" href="#residencial" title="Residencial">
                    <img class="normal" src="src/img/app/ico-res-blue-min.png" alt="icone residencia - azul">
                    <img class="hover" src="src/img/app/ico-res-yellow-min.png" alt="icone residencia - amarelo">
                    <br>
                    Residencial
                  </a>
                </div>
                <div class="col">
                  <a class="local" data-local="empresarial" href="#empresarial" title="Empresarial">
                    <img class="normal" src="src/img/app/ico-emp-blue-min.png" alt="icone empresa - azul">
                    <img class="hover" src="src/img/app/ico-emp-yellow-min.png" alt="icone empresa - amarelo">
                    <br>
                    Empresarial
                  </a>
                </div>
                <div class="col">
                  <a class="local" data-local="outros" href="#outros" title="Outros">
                    <img class="normal" src="src/img/app/ico-out-blue-min.png" alt="icone outros - azul">
                    <img class="hover" src="src/img/app/ico-out-yellow-min.png" alt="icone outros - amarelo">
                    <br>
                    Outros
                  </a>
                </div>
              </div>
            </div>

            <form id="residencial" class="form-content" style="display:block" action="#etapa3" method="post">
              <div class="form-group">
                <label>4. Quanto você paga em <br>média no mês?</label>
                <p class="obs">
                  (Você pode mover a barra com o mouse<?php // ou clicar e editar o valor;?>)
                </p>
                <div class="custom-range">
                  <img src="src/img/app/ico-light-blue-small-min.png" alt="">

                  <div class="range">
                    <input id="fdl_gasto" type="range" value="0" min="0" max="3500">
                    <output for="fdl_gasto" onforminput="value = fdl_gasto.valueAsNumber;"></output>
                  </div>

                  <img src="src/img/app/ico-light-blue-big-min.png" alt="">
                </div>
              </div>
              <div class="form-group">
                <p class="info">Valor da tarifa que poderá ser localizado na conta</p>
                <input type="number" min="1" step="any" name="nr_1_tarifa" id="nr_1_tarifa" class="text-center" placeholder="0,68">
              </div>
              <br>
              <button type="submit" class="btn btn-link cor-primaria">Resultado <span class="ico-arrow"></span></button>
            </form>
            <form id="empresarial" class="form-content" action="#etapa3" method="post">
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
              <button type="submit" class="btn btn-link cor-primaria">Solicitar orçamento <span class="ico-arrow"></span></button>
            </form>
            <form id="outros" class="form-content" action="#etapa3" method="post">
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
              <button type="submit" class="btn btn-link cor-primaria">Solicitar orçamento <span class="ico-arrow"></span></button>
            </form>        
          </div>
        </div>

        <div id="etapa3" class="etapas d-none">
          <form class="app-form common-field text-center" action="#etapa4" method="post">
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
            <button type="submit" class="btn btn-link cor-primaria">Comparativos <span class="ico-arrow"></span></button>
          </form>
        </div>

        <div id="etapa4" class="etapas d-none">
          <p class="info like-label">6. Informações adicionais</p>
          <br>
          <p class="info">Comparativos de investimentos</p>
          <div class="blue-box text-center lazy-img">
            <img data-src="src/img/app/invest-UP-min.png" alt="icone - retorno positivo">
            <p class="info"><strong>Seu investimento no sistema votaico é de R$ 150.000,00.<br>Rendimento de 19%</strong></p>
            <img data-src="src/img/app/invest-DOWN-min.png" alt="icone - retorno negativo">
            <p class="info"><strong>O mesmo valor investido na Caderneta de Poupança.<br>Rendimento de 8,3%</strong></p>
          </div>
          <p>
            Os resultados apresentados podem variar de acordo com as informações fornecidas. Fatores como sombreamento, inclinação do telhado e outras interferências podem variar na produção de energia do sistema fotovoltaico.
          </p>
          <form class="app-form contact text-center" action="#etapa5" method="post">
            <input type="text" name="txt_name" id="txt_name" placeholder="Escreva seu nome">
            <input type="email" name="txt_email" id="txt_email" placeholder="Seu email">
            <input type="tel" name="txt_name" id="txt_name" placeholder="Telefone">
            <textarea name="txtarea_msg" id="txtarea_msg" rows="4" placeholder="Escreva sua mensagem"></textarea>
            <br>
            <button type="submit" class="btn btn-link cor-primaria">Enviar <span class="ico-arrow"></span></button>
          </form>
          <br>
          <p class="info like-label">
            <strong>Ou se preferir liga pra gente!</strong>
            <br>
            <a class="bt bt-tel lazy-img" href="tel:+554430293655" title="ligar para +55 (44) 3029-3655">
              <img data-src="src/img/app/ico-tel-min.png" alt="icone - telefone"> +55 (44) 3029-3655 - Maringá
            </a>
          </p>
        </div>

        <div id="etapa5" class="etapas d-none lazy-img bg-cor-primaria h-100">
          <div class="d-flex direction-column align-items-center justify-content-center h-100">
            <p><img data-src="src/img/app/thank-you-min.png" alt="icone - envelope"></p>
            <p class="cor-w">
              <strong>Obrigado pelo seu contato!</strong>
              <br>
              Retornaremos em breve
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 offset-sm-1 d-xs-none d-flex direction-column justify-content-end text-center">
        <p class="lead text-uppercase cor-neutra pb-5">
          <strong>Se preferir baixe nossa calculadora solar na Apple Store ou Google Play</strong>
        </p>        
        <div class="lazy-img">
          <img class="img-fluid" data-src="src/img/calculadora-half-iphone-min.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>