<?php
/**
Template Name: Page - Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
  <div class="img" style="background: url('<?php the_field('home_hero_img'); ?>') 50% center no-repeat;background-size:cover;"></div>

</section><!--/section.hero-->

<section class="history">
	<div class="intro row" id="contain">
		<div class="col-sm-3 visit">
			<p>View</p>
			  <a href="<?php the_field('home_link1_url'); ?>"><?php the_field('home_link1_name'); ?></a>
			<hr />
			<p>View</p>
			  <a href="<?php the_field('home_link2_url'); ?>"><?php the_field('home_link2_name'); ?></a>
		</div><!--/.col-->
		<div class="col-sm-9 quotes b-left">
			<h3 class="section-title"><?php the_field('home_tagline'); ?></h3> 
			<h6 class="breakout"><?php the_field('home_intro'); ?></h6>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->



<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title"><?php the_field('home_middle_text'); ?></h2> 
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->

<section class="memories-two">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<?php while ( have_posts() ) : the_post(); ?>
			  <div class="entry-content">
			    <?php the_content(); ?>
			  </div>
			<?php endwhile; // end of the loop. ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->

<div class="footer-contact overlay">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
			<h3><?php the_field('footer_tagline'); ?></h3>
			<p><?php the_field('footer_text'); ?></p>
			<a class="button gold" href="<?php bloginfo('url'); ?>/purchase-tickets">Purchase Tickets</a>
		</div>
		
	</div><!-- grid -->
</div><!-- footer-contact -->


<?php get_footer(); ?>