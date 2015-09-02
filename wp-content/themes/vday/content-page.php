<?php
/**
 * The template used for displaying page content in page.php
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content('<p>'); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'vday' ),
				'after'  => '</div>',
			) );
		?>
		<?php if (is_page('news')) { ?>
			<?php get_template_part( 'part', 'news' ); ?>
		<?php } else { ?>
		<?php } ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->