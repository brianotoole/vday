<?php
/**
 * The template for displaying the footer.
 */
?>

	</section><!--/#content --> 

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="footer-top grid grid-pad">
			<div class="award col-4-12">
				<h6>Title</h6>
				<p>logo here?</p>
			</div><!-- .site-info -->
			<div class="links col-4-12">
				<h6>Sitemap</h6>
				<ul>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">About</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Tickets</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Sponsors</a></li>
				</ul>
			</div><!-- .site-info -->

			<div class="ph col-4-12">
				<h6>Contact</h6>
					<p>
						<a href="tel:#">850-555-5555</a>
					</p>
					<p>
						1234 Elm St. Tallahassee, FL
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
			</div><!-- /.sm -->
        </div><!-- /grid --> 
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