<section id="topbar">
  <div class="container clearfix">

    <div class="contact-info left-side pull-left">
      <i class="fa fa-user"></i> <a href="#">Cadastre-se</a>
      <i class="fa fa-info-circle"></i> <a href="#">Login</a>
    </div>
    <div class="right-side pull-right">
      <div class="d-inline-block contact-info">
        <span class="d-none d-md-block">Central de atendimento <a href="tel:+554430000000" title="ligar para +55(44)3000-0000" target="_blank">+55 44 3000.0000</a></span>
      </div>
      <div class="d-inline-block social-links">
        <a href="https://www.facebook.com/BalfarSolar/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/BalfarSolar/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
      </div>
    </div>

  </div>
</section>
<div id="header-sticky-wrapper" class="sticky-wrapper">
  <header id="header">
    <div class="container clearfix">
      <button class="navbar-toggler d-block d-md-none" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true"></i>
      </button>

      <div id="logo" class="pull-left left-side">
        <h1><a <?php if( !empty($home) ) { echo 'href="#body" class="scrollto"'; } else { echo 'href="index.php"'; } ?> title="Homepage"><img class="img-fluid" src="src/img/balfar-logo-min.png" alt="Balfar Solar - logo"></a></h1>
      </div>


      <div class="right-side pull-right">
        <nav id="nav-menu-container" class="navbar navbar-expand-md d-inline-block">
          <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav pull-right" style="touch-action: pan-y;">
              <li class="nav-item<?php if( !empty($home) ) {echo ' active';} ?>"><a <?php if( !empty($home) ) { echo 'href="#body"'; } else { echo 'href="index.php"'; } ?> class="nav-link">Home</a></li>
              <li class="nav-item<?php if( !empty($pagina) && $pagina == 'quem-somos') {echo ' active';} ?>"><a href="quem-somos.php" class="nav-link">Quem somos</a></li>
              <li class="nav-item<?php if( !empty($pagina) && ($pagina == 'produtos' || $pagina == 'produto')) {echo ' active';} ?>"><a href="produtos.php" class="nav-link">Produtos</a></li>
              <li class="nav-item<?php if( !empty($pagina) && $pagina == 'duvidas') {echo ' active';} ?>"><a href="duvidas.php" class="nav-link">Dúvidas</a></li>
              <li class="nav-item<?php if( !empty($pagina) && $pagina == 'calculadora') {echo ' active';} ?>"><a href="calculadora.php" class="nav-link">Calcule sua energia</a></li>
              <li class="nav-item<?php if( !empty($pagina) && $pagina == 'blog') {echo ' active';} ?>"><a href="blog.php" class="nav-link">Blog</a></li>
              <li class="nav-item<?php if( !empty($pagina) && $pagina == 'contato') {echo ' active';} ?>"><a href="contato.php" class="nav-link">Contato</a></li>
            </ul>
          </div>
        </nav>

        <div class="cart-and-search d-inline-block">
          <a href="#" class="cart"><i class="fa fa-shopping-cart"></i></a>
          <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
      </div>
      <?php include 'includes/morph-search.php'; ?>
    </div>
  </header>
</div>