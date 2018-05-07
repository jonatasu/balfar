    </article>
    <?php
      if( empty($home) ){
        include 'includes/contato-atalhos.php';
      }
    ?>
  </div>
  <footer>
    <div class="container ">
      <div class="row align-items-center justify-content-between">
        <div class="col-md">
          <a href="" id="footer_logo" class="lazy-img">
            <img data-src="src/img/balfar-logo-min.png" alt="logo Balfar">
          </a>
        </div>
        <div class="col-md text-right">
          <p class="cor-primaria m-0">
            Todos os direitos reservados 2018 - Balfar Solar
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="src/js/classie.js"></script>
  <script src="src/js/morph-search.js"></script>
  <script src="src/js/jquery-3.3.1.min.js"></script>
  <script src="src/js/jquery.sticky.js"></script>
  <script src="src/js/bootstrap.min.js"></script>
  <script src="node_modules/aos/dist/aos.js"></script>
  <?php
    if( !empty($home) ) echo '<script src="https://apis.google.com/js/api.js"></script>';
    if( !empty($gallery_script) )
      echo '<script src="src/js/lightbox.min.js"></script>';
      echo '<script src="src/js/lightbox.min.map"></script>';
  ?>
  <script src="src/js/main.js"></script>
</body>
</html>