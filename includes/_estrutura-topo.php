<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<meta property="og:site_name" content="<?php if( !empty($pagTitle) ){ echo $pagTitle.' | '; } ?>balfar SOLAR - Indústria Fotoelétrica">
	<title><?php if( !empty($pagTitle) ){ echo $pagTitle.' | '; } ?>balfar SOLAR - Indústria Fotoelétrica</title>
  <meta property="og:title" content="<?php if( !empty($pagTitle) ){ echo $pagTitle.' | '; } ?>balfar SOLAR - Indústria Fotoelétrica">
  <meta itemprop="name" content="<?php if( !empty($pagTitle) ){ echo $pagTitle.' | '; } ?>balfar SOLAR - Indústria Fotoelétrica">
		
  <meta name="description" content="...">
  <meta property="og:description" content="...">
  <meta itemprop="description" content="...">
  
  <meta name="author" content="Jônatas Filipe Vieira && LTXXDESIGN">
  <link rel="icon" href="/favicon.ico">

  <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
  <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="src/css/main.min.css">
  
  <?php
    if( !empty($gallery_script) ) echo '<link rel="stylesheet" type="text/css" media="screen" href="src/css/lightbox.min.css">';
  ?>
  
</head>
<body <?php if( !empty($home) ){ echo 'class="home"'; } else if( !empty($pagina) ){ echo 'class="'.$pagina.'"'; } ?>>
  <div id="wrapper">
    
    <?php // MENU PRINCIPAL ?>
    <?php include 'includes/menu-principal.php'; ?>

    <article>