<?php
/**
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="entry-content animate fadeIn">
		  <h2 class="page-title"><?php the_title(); ?></h2>
		  <?php the_content('<p>'); ?>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->


