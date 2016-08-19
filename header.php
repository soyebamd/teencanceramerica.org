<!DOCTYPE html><!--[if IE 7]>
<html class="ie ie7"<?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8"<?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />  <meta charset="<?php bloginfo( 'charset' ); ?>">  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">  <title>
    <?php wp_title( '|', true, 'right' ); ?>
  </title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->  <!-- TCA -->  
  <!-- CSS -->  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet">
 <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet">

 <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/colorbox.css" rel="stylesheet">

<!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->      
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">      
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
     <?php wp_head(); ?>    </head>
    <body>      <!--mob menu-->      <?php wp_nav_menu ( array( 'theme_location' => 'primary', 'menu_class' => 'list-unstyled', 'container_id' => 'slide-menu' ) ) ?>
      <!--end mob menu-->      <section id="wrapper">
        <div class="container">
          <header role="banner">
            <section  id="top-header">
              <div class="row">
                <div class="col-sm-3">
                  <section  id="logo">
                    <h1 class="hidden">Teen Cancer America</h1>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="//teencanceramerica.org/wp-content/uploads/2015/04/TCA-Logo-dark-red1.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"> </a></section>
                  </div>
                  <!--#top advertisement  area widget-->
                  <div class="col-sm-9">

                    <?php if(is_page('first-citizens-bank')){ echo " "; } else { ?>

                    <a class="header-donate" href="/donate">Donate Now</a>

                    <?php } ?>

                    <?php if ( is_active_sidebar( 'top-right-add' ) ) : 

                    dynamic_sidebar( 'top-right-add' ); 

                    endif; ?>
                  </div>
                  <!--#top advertisement  area widget-->
                </div>
              </section>
              <!--Navigation-->
              <nav class="navbar navbar-default" role="navigation" id="mob-nav">

                <ul class="list-unstyled list-inline">                  <li class="col-sm-4" id="mob-expand-button"><i class="fa fa-bars"></i> </li>

                  <li id="close-the-mobnav" class="img-circle col-sm-4"> <i class="fa fa-times"></i> </li>
                  <li  class="col-sm-8" >Navigation</li>                </ul>

                <!-- /.container-fluid -->

              </nav>
                            <nav role="navigation" id="top-nav">                <?php if (  is_front_page() ) { wp_nav_menu ( array( 'theme_location' => 'primary', 'menu_class' => 'nav nav-tabs nav-justified page-nav' ) ); } else {wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav nav-tabs nav-justified  page-nav' ) );}  ?>
              </nav>

            </ul>
            <?php if(is_page('teen-stories') || is_page('road-rebellion') || is_page('news-views') ||  is_page('la-marathon-2017')){ ?>
            <ul id="no-news-event" class="submenu list-inline list-unstyled">
              <?php } else { ?>

              <ul id="news-event" class="submenu list-inline list-unstyled">

               <?php }  ?>                <li <?php if(is_page('road-rebellion')){ echo "class='active'";} ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>road-rebellion">Road-Rebellion</a></li>
               <li <?php if(is_page('teen-stories')){ echo "class='active'";} ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>in-the-news/teen-stories"> Teen &amp; Young Adult Stories</a></li>               <li <?php if(is_page('la-marathon-2017')){ echo "class='active'";} ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>/la-marathon-2017"> La Marathon</a></li>
             </ul>           </header>

           <?php
           if (  is_front_page() ) {

            ?>

            <!--home slider-->
            <section id="home-slider">
    <?php //Post type for CPT
    
    query_posts( array( 'post_type' => 'homeslider' ) );    if ( have_posts() ) :
        // Start the Loop.
      while ( have_posts() ) : the_post();
              /*
           included file - content-slider.php
           */
           get_template_part( 'content-slider', get_post_format() );           endwhile;

           else :
        // If no content, include the "No posts found" template.
            get_template_part( 'content', 'none' );          endif;
          ?>
        </section>

        <?php } ?>
      </div>
      <!--end container-->
      <!--main container-->
      <div role="main" id="main">
        <div class="container">
          <div class="row">