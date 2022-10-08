<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
  <meta charset="utf-8">
  <meta name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="icon" href="https://www.sudosu.info/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="https://www.sudosu.info/favicon.ico" type="image/x-icon" />
	<!-- For IE 10 and below -->
	<!--  No link, just place a file called favicon.ico in the root directory -->

	<!-- For IE 11, Chrome, Firefox, Safari, Opera -->
	<link rel="icon" href="https://www.sudosu.info/wp-content/uploads/2022/10/favicon-300x300.png" sizes="16x16" type="image/png">
	<link rel="icon" href="https://www.sudosu.info/wp-content/uploads/2022/10/favicon-300x300.png" sizes="32x32" type="image/png">
	<link rel="icon" href="https://www.sudosu.info/wp-content/uploads/2022/10/favicon-300x300.png" sizes="48x48" type="image/png">
	<link rel="icon" href="https://www.sudosu.info/wp-content/uploads/2022/10/favicon-300x300.png" sizes="62x62" type="image/png">
  <?php wp_head() ?>

</head>

<body <?php body_class();?> >

  <!-- Menu -->
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo esc_url (home_url( '/' ));?>">  <img src="https://www.sudosu.info/logo_white_sf/" width="45px" height="45px" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    //Pintar menu
    wp_nav_menu(array(
      'theme_location'    => 'menu-principal', //Nombre cuando registré el menu en funtions.
      'depth'             => 2,
      'container'         => 'div',
      'container_class'   => 'navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0   header-one fixed-scroll shrink-sticky-header clr sticky-header-shrunk',
      'container_id'      => 'navbarSupportedContent',
      'menu_class'        => 'nav navbar-nav ml-auto',
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'walker'            => new WP_Bootstrap_Navwalker(),
    ));
    ?>

  </nav>

  <!-- Portada-->
  <div class="container ">
      
    <h2 class="titleblog text-center">Sudo Su</h2>
    <hr>
  </div><!-- Fin portada -->