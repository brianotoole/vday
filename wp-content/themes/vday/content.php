

<div class="entry-content">
<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"> 
<div class="col-sm-12 no-padding">
	<div class="col-sm-2 no-padding img">
	  <?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
	  <img class="thumbnail" src="<?php echo $image; ?>">
	  <?php elseif( get_field('event_img')): //if event thumb is entered...?>
	  <img class="thumbnail" src="<?php the_field('event_img'); ?>">
	  <?php else: //if no featured image is uploaded, show default icon img ?>
	  <div class="thumbnail default"></div>
	  <?php endif; ?>
	</div>
	<div class="col-sm-8 descrip">
	  <h3><a href="<?php the_permalink() ?>" title="Click to View: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	  <p><em>
	  <?php if( get_field('event_start_date') && !get_field('event_end_date') )://if only start is entered..?>
	  <?php the_field('event_start_date'); ?>
	  
	  <?php elseif( get_field('event_start_date') && get_field('event_end_date') ): //start & end date...?> 
      <?php the_field('event_start_date'); ?> - <?php the_field('event_end_date'); ?>

      <?php else: //no event date is entered...?> 
      <?php endif; ?></em></p>  
	  <p><?php the_excerpt() ?></p>
	</div>
	<div class="clear"></div>
