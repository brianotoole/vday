<?php
/**
Template Name: Page - Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
 <!-- <div class="img" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/img/hero_placeholder.jpg') 50% center no-repeat;background-size:cover;"></div> -->
    <div class="img"></div>
</section><!--/section.hero-->

<section class="history">
	<div class="intro row" id="contain">
		<div class="col-sm-3 visit">
			<p>About the Event</p>
			  <a href="<?php bloginfo('url'); ?>/about">View</a>
			<hr />
			<p>View our Sponsors</p>
			  <a href="<?php bloginfo('url'); ?>/sponsors">View</a>
		</div><!--/.col-->
		<div class="col-sm-9 quotes b-left">
			<h2 class="section-title">Tagline: Lorem ipsum dolor sit amet, consectetuer adipiscing elit
			</h2> 
			<h5 class="breakout">Breakout: Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h5>
			<p>Intro paragraph: fdsafsdafsed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->



<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title">Create Lasting Memories</h2> 
			<p>And build friendships for life.</p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->

<section class="memories-images">
	<div class="intro row" id="contain">
		<div class="col-sm-12 images">
		  <div class="stack rotated-left">
	        	<img src="http://placeimg.com/290/292/nature">
	      </div>
	      <div class="stack rotated-middle">
	        	<img src="http://placeimg.com/290/292/people">
	      </div>
	      <div class="stack rotated-right">
	        	<img src="http://placeimg.com/290/292/art">
	      </div>
		</div>
		<p>Another text paragraph: fdsafsdafsed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
	</div><!--/.intro-->
</section><!--/.memories-images-->


<div class="footer-contact overlay">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
			<h3>Can't wait for the event?</h3>
			<p>Purchase your tickets today.</p>
			<a class="button gold" href="<?php bloginfo('url'); ?>/purchase-tickets">Purchase Tickets</a>
		</div>
		
	</div><!-- grid -->
</div><!-- footer-contact -->


<?php get_footer(); ?>