<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Estudio Digital</title>

  <!-- Behavioral Meta Data -->
  <meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#24272c">
  
  <!-- Google Meta Data -->
  <meta name='description', content=''>
  <meta name='keywords', content=''>
  <meta name="robots" content="index, follow">

  <!-- Blog Meta Data -->
  <meta name="dc.language" content="es">
  <meta name="dc.source" content="">
  <meta itemprop="url" content="">

  <!-- Twitter Card Meta Data -->
  <meta content='summary' name='twitter:card'>
  <meta content='Estudio Digital' name='twitter:site'>
  <meta content='Estudio Digital' name='twitter:title'>
  <meta content='Estudio Digital' name='twitter:description'>

  <!-- Open Graph Meta Data -->
  <meta content='website' property='og:type'>
  <meta content='<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png' property='og:image'>
  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta content='' property='og:description'>
  <meta property="og:type" content="">
  <meta property="og:image" content="">

  <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">

	<link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">
</head>
<body>

<header id="header" class="header">
  <div class="top-nav <?php if(is_home()){echo 'top-nav-bg';} ?>">
    <div class="top-nav__content padding-rl">
      <div class="link-email">
        <a href="#">info@estudiodigital.com</a>
        <a href="#">+57 123456789</a>
      </div>
      <div class="link-redes d-none d-lg-flex">
        <a href="https://www.facebook.com/estudiodigital.co/" target="_blank">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="https://www.instagram.com/estudiodigital.co/" target="_blank">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="" target="_blank">
          <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
        <a href="" target="_blank">
          <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </a>
        <a href="https://twitter.com/GrupoEDigital" target="_blank">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>    
        <div class="nav-btn-acceso">
          <a href="#">Acceso a clientes</a>
        </div>
      </div>
    </div>
  </div>
    <nav class="navbar navbar-expand-lg navbar-fixed-js" id="navbar">
      <div class="main-brand">
        <a itemprop="url" class="navbar-brand" href="/">
			   <img id="iso" src="<?php echo get_template_directory_uri();?>/assets/img/logo-estudio-nuevo1.png" alt="" />
        </a>
        <button class="navbar-toggler  border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas"
          type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
      <div class="navbar-collapse offcanvas-collapse">
        <ul class="navbar-nav ">
			<li class="nav-item ">
				<a class="nav-link  " href="<?php bloginfo('url'); ?>">Inicio</a>
			</li>

			<li class="nav-item ">
				<a class="nav-link  " href="#about">nosotros</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="<?php bloginfo('url'); ?>/news">servicios</a>

			</li>
			<li class="nav-item">
				<a class="nav-link "href="#">host y dom</a>
			</li>
      <li class="nav-item">
        <a class="nav-link "href="#">partners</a>
      </li>
			<li class="nav-item">
        <a class="nav-link "href="#">portafolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "href="#">metodo ed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "href="#">blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "href="#">contacto</a>
      </li>
		</ul>
    <div class="link-redes  d-block d-lg-none">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>    
        <div class="nav-btn-acceso">
          <a href="#">Acceso a clientes</a>
        </div>
      </div>
      </div>
	</nav>
</header>