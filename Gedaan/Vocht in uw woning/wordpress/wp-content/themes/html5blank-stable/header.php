<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php the_title(); ?>></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
      <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/afbeeldingen/logo_favi.png"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/afbeeldingen/logo.png" alt="Vocht in uw woning"></a>
          <img id="logo" class="logo" src="<?php bloginfo('template_directory'); ?>/afbeeldingen/Naam.png" alt="Vocht in uw woning">
          
        </div>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'nav navbar-nav navbar-right') ); ?>
      </div>
      </div>
    </nav>
