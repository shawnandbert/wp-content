<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Shawn-and-Bert
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
        <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.0.min.js'></script>
        <script type="text/javascript">
              $("document").ready(function($){
                    var nav = $('#main-nav');
                    var leftRibbon = $('#left-ribbon');
                    var rightRibbon = $('#right-ribbon');

              $(window).scroll(function () {
                    if ($(this).scrollTop() > 135) {
                        nav.addClass("f-nav");
                        leftRibbon.addClass("f-ribbon");
                        rightRibbon.addClass("f-ribbon");
                        } else {
                        nav.removeClass("f-nav");
                        leftRibbon.removeClass("f-ribbon");
                        rightRibbon.removeClass("f-ribbon");
                    }
              });
             });
         </script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php if ( of_get_option( 'favicon' ) ) echo '<link rel="shortcut icon" href="'.esc_url( of_get_option( 'favicon' ) ).'" />'; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--==========================================-->

<?php do_action( 'before' ); ?>
	<header id="header" class="site-header" role="banner">
	<div class="page-icon">



                       <?php if (of_get_option('logo_image')) : ?>
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-img"><img src="<?php echo esc_attr( of_get_option('logo_image') ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
                       <?php else : ?>
                           <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                           <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        
                       <?php endif; ?>


        </div><!--END PAGE-ICON-->

        <div id="nav-wrapper">
            
            <nav id="main-nav" class="main-navigation" role="navigation">
                <!--div id="left-ribbon" class="ribbon"></div-->
                <div class="skip-link"><a class="screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sugarspice' ); ?></a></div>
                <?php 
                if(has_nav_menu('primary')){
                    wp_nav_menu( array( 
                        'theme_location'=> 'primary', 
                        'container'     => false,
                        'menu_id'       => 'nav',
                        'fallback_cb'   => 'wp_page_menu' 
                    ) ); 
                } else {
                ?>
                    <ul id="nav">
                        <?php wp_list_pages('title_li='); ?>
                    </ul>
                <?php
                }
                ?>
                <!--div id="right-ribbon" class="ribbon"></div-->
            </nav><!-- #site-navigation -->
            
        </div>
       
	</header><!-- #header -->
<div id="page" class="hfeed site">


	<div id="main" class="site-main">
 