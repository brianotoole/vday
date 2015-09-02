<?php
/**
 * The template for displaying 404 pages (not found).
 */
 
get_header(); ?> 
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">
	
	<div id="secondary" class="classes-sidebar widget-area col-3-12" role="complementary">
		<h3 class="page-title animate fadeIn">Search the Site</h3>
		<p class="info">Select an option below to filter content within the website. Content searched includes news, events &amp; classes.</p>
		  <?php echo do_shortcode('[ULWPQSF id=66 formtitle="0" button=0]'); ?>
	</div><!-- .sidebar --> 
	
		<div id="primary" class="col-9-12">
			<main id="main" class="site-main entry-content" role="main">
			
			  <div class="results-total">
				<h3>Page Not Found - 404. </h3>
				<p>The page you are looking for can not be found. Perhaps try using the filter on the left to help you find what you are looking for.</p>
			  </div><!--/.results-total-->
			  
			  <div class="class-list">
			 
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; // end of the loop. ?>
			</div><!--/.class-list-->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- grid -->
	<?php get_footer(); ?>