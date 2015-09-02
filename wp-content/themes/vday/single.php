<?php
/**
 * The template for displaying all single posts.
 *
 */
get_header(); ?> 

	<header class="entry-header">
	</header><!-- .entry-header -->
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="page-about faculty">
	<section class="history">
		<div class="intro row" id="contain">
			<div class="col-sm-12 no-padding">
				<h1 class="section-title"><?php the_title(); ?></h1> 
				<span class="position"><?php the_field('faculty_position'); ?></span>
								
				<?php if ( is_singular( 'post' ) && in_category( 'news' ) || in_category() ) :?>
				  <span>Published on: <em><?php echo get_the_date( 'l, F j' ); ?></em></span>
				<?php endif ; //close if is sinlge post in category news or no category is checked ?>
				
				<?php if ( is_singular( 'class' ) ) :  ?>
				<div class="">
				  <p><strong>Session: </strong>
				    <em><?php $sessions = get_the_terms( $post->ID , 'session' );
						foreach ( $sessions as $session ) {		
							if(count($sessions) > 1) {
							    echo "$session->name, ";
							}
							else {
								echo $session->name;
							}
						 }
					?></em>
				  </p>
				</div>
				<div class="">
				  <p><strong>Grade Level: </strong>
				    <em><?php $grades = get_the_terms( $post->ID , 'grade' );
						foreach ( $grades as $grade ) {		
							if(count($grades) > 1) {
							    echo "$grade->name, ";
							}
							else {
								echo $grade->name;
							}
						 }
					?></em>
				  </p>
				</div>
				<?php endif ; ?>
				<?php if ( is_singular( 'post' ) && in_category( 'event' ) ) :?>
				  <p><strong>Event Date:</strong> <?php the_field('event_start_date'); ?>
				    <?php if( get_field('event_end_date') ): //if end date is entered... ?>
				    - <?php the_field('event_end_date'); ?>
				    <?php endif; ?></p>
				  <?php if( get_field('event_location_link') != get_field('event_location_link') ): ?>
				    <p><strong>Event Location: <strong> <?php the_field('event_location_name'); ?></p>
				  <?php endif ; ?>		
				  <?php if( get_field('event_location_link') && get_field('event_location_link') ): ?>
				  	<p><strong>Event Location: </strong> <a href="<?php the_field('event_location_link'); ?>"><?php the_field('event_location_name'); ?></a></p>
				  <?php endif ; ?>			    
				    
				  <?php endif ; ?>
				
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->

	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
				<div id="primary">
					<main id="main" class="site-main" role="main">
					  <div class="entry-content">
					  	<?php if ( is_singular( 'faculty' ) ) :  ?>
					  		<div class="col-sm-5">
							  <img class="faculty" src="<?php the_field('faculty_img'); ?>" />
					  		</div>
						<?php endif ; //close if is single post_type 'facutly' ?>
					    <?php the_content(); ?> 
					  </div>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!--/.col-->
			<div class="col-sm-4 latest-news">
				<?php if ( is_singular( 'post' ) && in_category( 'news' ) || in_category() ) :?>
					<h4 class="latest-title">News &amp; Events</h4>
					<?php get_template_part( 'part', 'latest_news' ); ?>
				<?php endif ; ?>
				<?php get_sidebar(); ?>
				<?php if ( is_singular( 'faculty' ) ) :  //if "faculty" post_type single ?>
					<h4 class="latest-title">Our Faculty</h4>
					<?php
						// WP_Query arguments for custom post type...
						$args = array (
							'post_type'	     => array( 'faculty' ),
							'orderby' 		 => 'menu_order',
							'order'			 => 'ASC',
							'posts_per_page' => -1
						);
						// The Query
						$loop = new WP_Query( $args );
						
						// The Loop
						if ( $loop->have_posts() ) {
							while ( $loop->have_posts() ) {
								$loop->the_post(); ?>
									<a href="<?php the_permalink() ?>">
								    	<li><?php the_title(); ?></li>
									</a>						
						<?php } 
						} else {
							// no posts found
						}
						// Restore original Post Data
						wp_reset_postdata();
						
						?>
				<? endif ; ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->	

	

	<?php if ( is_singular( 'class' ) && get_field('class_registration_link') || is_singular('post') && in_category('event') && get_field('event_registration_link') ): //registration link ?>
	<div class="footer-contact overlay">
		<div class="grid grid-pad row">
			<div class="col-sm-12">
				<h3>Sign up for: <strong><?php the_title(); ?></strong></h3>
				<p>To register for this class, click the button below.</p>
				<?php if ( is_singular( 'class' ) && get_field('class_registration_link') ) {  ?>	
				  <a class="button gold" href="<?php the_field('class_registration_link'); ?>" target="_blank">Register Now</a>
				<?php } else if ( is_singular( 'post' ) && in_category('event') && get_field('event_registration_link') ) {   ?>	
				  <a class="button gold" href="<?php the_field('event_registration_link'); ?>" target="_blank">Register Now</a>
				<?php } else {  ?>
				<?php } ?>
			</div>
		</div><!-- grid -->
	</div><!-- footer-contact -->
	

	
	<?php endif ; ?>

	<?php endwhile; // end of the loop. ?>
	<?php get_footer(); ?>