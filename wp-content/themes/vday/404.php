<?php
/**
 * The template for displaying 404 pages (not found).
 */
 
get_header(); ?> 
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<section class="hero">
  <div class="img" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/img/brick.png');"></div>
</section><!--/section.hero-->
        
	<div class="grid">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">
			
			  <div class="results-total">
				<h3>Page Not Found - 404. </h3>
				<p>The page you are looking for can not be found. Perhaps try using the filter on the left to help you find what you are looking for.</p>
			  </div><!--/.results-total-->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>