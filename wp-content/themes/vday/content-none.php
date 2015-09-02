<?php
/**
 * The template part for displaying a message that posts cannot be found.
 */
?>


				<p class="left-20">The content you are looking for can not be found. Try using different keywords, or use the filter in the sidebar to help you search the site.</p>
				<form class="left-20" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			    <div><label class="screen-reader-text" for="s">Search:</label>
			        <input type="text" value="" name="s" id="s" />
			        <input type="submit" id="searchsubmit" value="Search" />
			    </div>
			</form>

