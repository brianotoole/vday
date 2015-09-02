<?php
/**
 * The main template file.
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */
get_header(); ?>

	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="page-about default">
	<section class="history">
		<div class="intro row" id="contain">
			<div class="col-sm-12">
				<h3 class="section-title">Archives</h3>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->
	
	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="entry-content">
						<?php get_template_part( 'content', 'news' ); ?>
					</div>
				<?php endwhile; // end of the loop. ?>
			</div><!--/.col-->
			
			<div class="col-sm-4 latest-news">
				<?php get_sidebar(); ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->
	</div><!--/.page-about-->

	<?php get_footer(); ?>