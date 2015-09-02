<?php
/**
 * The template for displaying the footer.
 */
?>
	<div class="testimonials">
	  <div class="footer-contact">
		<div class="grid row">
			<div class="col-sm-12 no-padding">
				<?php get_template_part( 'part', 'testimonials' ); ?>
			</div>
		</div><!--/.grid -->
	  </div><!--/.footer-contact -->
	</div><!--/.testimonials -->

	</section><!--/#content --> 

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="footer-top grid grid-pad">
			<div class="award col-3-12">
				<h6>Awards</h6>
				<p>- Victory Cup Winner </p>
				<p>- Best of N. Tampa, 2014</p>
				<p>- FDC Studio of Excellence</p>
				<p></p>
			</div><!-- .site-info -->
			<div class="links col-3-12">
				<h6>Links</h6>
				<ul>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Link</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Careers</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Donation Requests</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">FAQ</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Press</a></li>
				</ul>
			</div><!-- .site-info -->
			<div class="family col-3-12">
				<h6>vday Family</h6>
				<ul>
					<li><i class="fa fa-chevron-right"></i><a href="http://tbttt.org" target="_blank">Tampa Bay Triple Threat Theatre</a></li>
					<li><i class="fa fa-chevron-right"></i></i><a href="#">Classical Ballet of Tampa</a></li>
			</div><!-- .site-info -->
			<div class="ph col-3-12">
				<h6>Contact</h6>
					<p>
						<a href="tel:#">813-555-5555</a>
					</p>
					<p>
						1234 Elm St. Tampa, FL
					</p>
			</div><!-- .site-info -->
        </div><!-- grid --> 
        
    	<div class="footer-bottom grid grid-pad">
			<div class="site-info col-12-6">
				&copy; <?php echo date('Y'); ?> Valentines Day Soiree | <a id="top" href="#"> Back To Top</a>
			</div><!-- .site-info -->
			<div class="social-media col-6-12">
				<ul>
					<a href="" target="_blank">
						<li><i class="fa fa-facebook"></i></li>
					</a>
					<a href="" target="_blank">
						<li><i class="fa fa-twitter"></i></li>
					</a>
					<a href="" target="_blank">
						<li><i class="fa fa-instagram"></i></li>
					</a>
					<a href="" target="_blank">
						<li><i class="fa fa-youtube"></i></li>
					</a>
				</ul>
			</div><!-- .site-info -->
        </div><!-- grid --> 
	</footer><!-- #colophon -->

</div><!-- #page --> 

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<?php wp_footer(); ?>
<script>
//init top-bar search
new UISearch( document.getElementById( 'sb-search' ) );
</script>
</body>
</html>