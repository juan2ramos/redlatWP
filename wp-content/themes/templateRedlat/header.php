<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php bloginfo('name'); ?><?php wp_title(' | '); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/prefixfree.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]><script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js" media="all"></script><![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
        <figure id="logo">
            <a href="<?php echo home_url(); ?>/" rel="home">
            	<img src="<?php bloginfo('template_directory'); ?>/images/logo-redlat.svg" alt="Logo Redlat">
            </a>
        </figure>
        <nav role="navigation">
            <ul>
            	<?php #wp_nav_menu(array('theme_location' => 'primary')); ?>
                <li><a href="que-es"><span>...</span>¿que es?</a></li>
                <li><a href="historia"><span>...</span>historia</a></li>
                <li><a href="proyectos"><span>...</span>proyectos</a></li>
                <li><a href="equipo"><span>...</span>equipo<br>de trabajo</a></li>
                <li><a href="contacto"><span>...</span>contacto</a></li>
            </ul>
        </nav>
    </header>
    <section id="banner" role="banner">
            <div class="carousel">
                <div class="slider slider-reservas" id="">
                  <ul class="slides">
                   
                      <li>
                        <span class="caption">
                          <img src="<?php bloginfo('template_directory'); ?>/images/slide/banner1.jpg">
                          
                        </span>
                      </li>
                      <li>
                        <span class="caption">
                          <img src="<?php bloginfo('template_directory'); ?>/images/slide/banner2.jpg">
                          
                        </span>
                      </li>   
                      <li>
                        <span class="caption">
                          <img src="<?php bloginfo('template_directory'); ?>/images/slide/banner3.jpg">
                          
                        </span>
                      </li>                  
                  </ul>
                </div>
            </div>
        </section>


