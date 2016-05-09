<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package unite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>


<link rel="stylesheet" type="text/css" href="<?= bloginfo('template_directory'); ?>/inc/js/bxslider/jquery.bxslider.css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>



<div id="page" class="hfeed site">
	<div class="container header-area">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header col-sm-12" role="banner">

				<div class="site-branding col-md-6 col-">
				
						<h1 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?= bloginfo('template_directory'); ?>/images/logo.png" alt="Azamscorp logo" width="210px"/></a></h1>

					
							
						</div><!-- end of #logo -->


                       <div class="social-header col-md-6 col-sm-12">
				 <div  id="search-box">
                         <?php get_product_search_form(); ?>
                        </div>
				
			</div> 

                       
				

				</div>

			

		</header><!-- #masthead -->
	</div>
		<nav class="navbar navbar-default"  id="top-navigation" role="navigation">
			<div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>

		        </div>

				<?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
		    </div>
		</nav><!-- .site-navigation -->



	<div id="content" class="site-content container">
<!--slider -- start -->

    
