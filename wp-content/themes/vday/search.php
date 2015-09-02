<?php
/**
Template for displaying search results.
 */
get_header(); ?> 
            
<section class="hero">
  <div class="img" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/img/brick.png');"></div>
</section><!--/section.hero-->

	<div class="grid">
	
		<div id="primary" class="col-1-1 pull-right">
			<main id="main" class="site-main entry-content" role="main">

	
			  <div class="results-total">
				<h3><?php printf( __( 'Search results for: "%s"', 'vday' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			  </div><!--/.results-total-->
			  
			  <div class="class-list">
			  <?php if ( have_posts() ) : ?>
			  <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; // end of the loop. ?>
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
			</div><!--/.class-list-->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- grid -->
	<?php get_footer(); ?>