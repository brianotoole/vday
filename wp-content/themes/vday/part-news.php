<?php

// WP_Query arguments for custom post type...
$args = array (
	'post_type'	     => array( 'post' ),
	'order'			 => 'DESC',
	'posts_per_page' => -1
);
// The Query
$loop = new WP_Query( $args );

// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
		$loop->the_post(); ?>
			<a href="<?php the_permalink() ?>">
				<div class="col-sm-4">
				  <?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
				  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
				  <img class="thumbnail" src="<?php echo $image; ?>">
				  <?php else: //if no featured image is uploaded, show default icon img ?>
				  <div class="thumbnail default"><i class="fa fa-music"></i></div>
				  <?php endif; ?>
				</div><!--/.col-->
				<div class="col-sm-8 descrip">
				  <h3 class="class-title"><?php the_title(); ?></h3>
				  <p class="date"><span class="cat-title"><?php global $post; $category = get_the_category($post->ID); echo $category[0]->name; ?></span> <?php echo get_the_date( '/ l, F j' ); ?></p>  
				  <p><?php vday_excerpt('vday_excerpt_length','vday_view_more_news'); ?></p>
				</div><!--/.col-->
			</a>
				<div class="clear"></div><hr />

<?php } 
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>