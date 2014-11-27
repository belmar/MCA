<!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="icon" type="image/png" href="favicon.png">
    <!--[if IE]><link rel="shortcut icon" href="favicon.ico"/><![endif]-->

    <!-- Bootstrap -->
    <link href="<?php bloginfo("stylesheet_directory"); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo("stylesheet_directory"); ?>/css/design.elements.css" rel="stylesheet">
    <link href="<?php bloginfo("stylesheet_directory"); ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo("stylesheet_directory"); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php bloginfo("stylesheet_directory"); ?>/css/keyframes.css" rel="stylesheet">
    <link href="<?php bloginfo("stylesheet_directory"); ?>/css/animation.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

    <body class="hideAnimation">


<span id="loader-main-control">
  <section data-splash-image-left></section>
  <section data-splash-image-right></section>
  <div class="clearfix"></div>
  <section loading>
    <li></li><li></li><li></li><li></li><li></li><li></li><li></li>
    <section data-wrapper>
      <section data-splash-value></section>
    </section>
  </section>
</span>

<span id="loader-view-control">
  <header>
    <div class="wrap">
      <a class="logo" href="<?php bloginfo("home"); ?>"><img src="<?php bloginfo("stylesheet_directory"); ?>/images/logo.png"></a>
      <a href="#" id="mobile-menu"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></a>
      <nav>
        <?php wp_nav_menu( array( 'menu_class' => 'menu', 'menu' => 'Main Menu') ); ?>
        <?php /*<ul class="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="page-why-i-coach.html">Why I Coach</a></li>
          <li><a href="page-what-you-get.html">What You Get</a></li>
          <li><a href="page-courses.html">Courses</a></li>
          <li><a href="page-live-events.html">Live Events</a></li>
          <li><a href="log-in.html">Log In</a></li>
        </ul> */
        ?>
      </nav>
    </div>
  </header>