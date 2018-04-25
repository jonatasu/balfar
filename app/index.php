<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Balfar - App - Início</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php
    // Development version
    echo '<link rel="stylesheet" type="text/css" media="screen" href="/src/css/app-main.min.css">';
  ?>
  <?php
    // Distribution version
    // <link rel="stylesheet" type="text/css" media="screen" href="/dist/css/app-main.min.css">
  ?>
</head>
<body>
  <section id="inicio">
    <div class="container-app">
      <h1><img src="/src/img/app/logo-app-min.png" alt="Calculadora Solar - logo"></h1>
      <button type="button" class="bt bt-primary bt-block bt-simulador">Simulador</button>
      <button type="button" class="bt bt-primary bt-block">Login</button>
      <h2><img src="/src/img/app/logo-balfar-min.png" alt="Balfar - logo"></h2>
    </div>
  </section>
  
  <?php
    // Development version
    // <script src="/src/js/app-main.min.js"></script>
  ?>
  <?php
    // Distribution version
    // <script src="/dist/js/app-main.min.js"></script>
  ?>
</body>
</html>