<?php
/**
 * The main template file used to display a page when nothing more specific matches a query.
 */
get_header(); ?>
        
	<header class="entry-header">
    </header><!-- .entry-header -->
    
   	<div class="grid">
			<div id="primary" class="col-9-12">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

					<?php endwhile; ?>

						<?php vday_paging_nav(); ?> 

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- grid -->

	<?php get_sidebar(); ?>
	</div><!-- grid -->
	<?php get_footer(); ?>