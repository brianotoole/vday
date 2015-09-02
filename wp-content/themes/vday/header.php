<?php
/**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!--<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/ico">-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="top-bar hidden-xs">
    <div class="grid head-overflow">
      <div id="sb-search" class="sb-search">
	    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		  <input class="sb-search-input" placeholder="SEARCH SITE..." type="text" value="" name="s" id="search">
		  <input class="sb-search-submit" type="submit" value="">
		  <span class="sb-icon-search"></span>
		</form>
	  </div><!--.sb-search-->
  	  <div class="links">
        <?php wp_nav_menu( array( 'theme_location' => 'top-bar' ) ); ?>
  	  </div><!--/.links-->
    </div><!--/.grid-->
  </div><!--/.top-bar-->
 
 
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'vday' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    	<div class="grid head-overflow">
    
			<div class="site-branding">
			    <div class="site-logo"> 
       				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php bloginfo('stylesheet_directory'); ?>/img/logo.png'alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="logo"></a> 
    			</div><!-- site-logo -->
            </div><!-- site-branding -->
            
			<div class="navigation-container">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle toggle-menu menu-right push-body"><?php _e( '<i class="fa fa-bars"></i> Menu', 'vday' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
        	</div><!-- navigation-container -->
        	
        </div>
	</div><!--/grid-->        
    </header><!-- #masthead -->
    
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
				<div id="sb-search" class="sb-search visible-xs">
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
						<input class="sb-search-input" placeholder="SEARCH SITE..." type="text" value="" name="s" id="search">
						<input class="sb-search-submit" type="submit" value="">
				    </form>
				</div><!--.sb-search-->
		<?php wp_nav_menu( array( 'theme_location' => 'mobile' ) ); ?>
		<button class="close menu-toggle toggle-menu menu-right push-body"><?php _e( 'Close', 'vday' ); ?></button> 
	</nav>

	<section id="content" class="site-content">
