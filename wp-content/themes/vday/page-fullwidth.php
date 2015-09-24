<?php
/**
Template Name: Page - Fullwidth
 * 
 */
get_header(); ?> 

<section class="hero">
  <div class="img" style="background: url('http://valentinesdaysoiree.sachsdigital.com/wp-content/uploads/2015/09/iStock_000054746838_Full.jpg');background-size:cover;background-position:center center;"></div>
</section><!--/section.hero-->
        
	<div class="grid">
		<div id="primary" class="content-area col-1-1">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>
				
			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- grid -->
<?php get_footer(); ?>
