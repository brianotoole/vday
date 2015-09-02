<?php
/**
 * functions and definitions
 */
 

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'vday_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vday_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	//add_image_size( 'home-blog', 400, 250, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vday' ),
		'top-bar' => __( 'Top Bar', 'vday' ),
		'mobile' => __( 'Mobile Menu', 'vday' )
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vday_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // vday_setup
add_action( 'after_setup_theme', 'vday_setup' );

/**
 * Load Google Fonts.
 */
function load_fonts() {
            wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Merriweather|Lato:200,300,400,700', array(), '1.0');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function vday_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'vday' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	
}
add_action( 'widgets_init', 'vday_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vday_scripts() {
	wp_enqueue_style( 'sass', get_stylesheet_uri(), array(), '1.0.0');
	

	//show contact form 7 plugin scripts, only on contact page...
	
	if (is_page('contact') ) {
     	 wpcf7_enqueue_scripts();
	 	 wpcf7_enqueue_styles();
    }
   
	
	//wp_enqueue_script('jquery');
	wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/js/site.js', array(), '1.0.0', true );
	
	//wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	//wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/vday.scripts.js', array(), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		//wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vday_scripts' );

/**
 * Load html5shiv
 */
function vday_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.min.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'vday_html5shiv' ); 

/**
 * Change the excerpt length
 */
function vday_excerpt_length( $length ) {
	
	$excerpt = get_theme_mod('exc_length', '22');
	return $excerpt; 

}

add_filter( 'excerpt_length', 'vday_excerpt_length', 75 ); 



// Create Custom Excerpt callback
function vday_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

function vday_view_more_class($more){
global $post;
return '... <p class="view" href="' . get_permalink($post->ID) . '">' . __('Read More', 'vday') . '</a>';
}
function vday_view_more_news($more){
global $post;
return '... <p class="view" href="' . get_permalink($post->ID) . '">' . __('Read More', 'vday') . '</a>';
}
function vday_view_more_latest_news($more){
global $post;
return '...';
}



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';



/**
 * Classes search custom output
 */
add_filter('uwpqsf_result_tempt', 'customize_output', '', 4);
function customize_output($results , $arg, $id, $getdata ){
	 // The Query
            $apiclass = new uwpqsfprocess();
            $query = new WP_Query( $arg ); ?>
	<div class="results-total">
		<?php  
			$numberOfQueries = $query->found_posts;
			
			if ($numberOfQueries == 1) {?>
				<h5><?php echo $numberOfQueries; ?> result found:</h5>
				
			<?}elseif ($numberOfQueries == 0){?>
				<h5>No results found.</h5>
				
			<?}else{?>
				<h5><?php echo $numberOfQueries; ?> results found:</h5>
			<?}
			

			
		?> 
	</div>

<?php	ob_start();	$result = '';
	// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
			$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'medium', true);
			$thumb_url = $thumb_url_array[0];
			
			?>
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
				  <?php if( get_field('class_start_date') ): ?>
				  <p class="date"><?php the_field('class_start_date'); ?> - <?php the_field('class_end_date'); ?></p>  
				  <?php else: //is "post" not "class" ?>
				  <p class="date"><span class="cat-title"><?php global $post; $category = get_the_category($post->ID); echo $category[0]->name; ?></span> <?php echo get_the_date( '/ l, F j' ); ?>
				  <?php endif; ?>
				  <p><?php vday_excerpt('vday_excerpt_length','vday_view_more_class'); ?></p>
				</div><!--/.col-->
			  </a>
				<div class="clear"></div><hr />
	<?}
                        echo  $apiclass->ajax_pagination($arg['paged'],$query->max_num_pages, 4, $id, $getdata);
		 } else {
					 echo  '<p style="padding: 0 20px;">There were no results found with your criteria. Please try selecting different options.</p>';
				}
				/* Restore original Post Data */
				wp_reset_postdata();
		$results = ob_get_clean();		
			return $results;
}

//* Remove header junk
/*Removes RSD, XMLRPC, WLW, WP Generator, ShortLink and Comment Feed links*/
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3 );

/*Removes prev and next article links*/
add_filter( 'index_rel_link', '__return_false' );
add_filter( 'parent_post_rel_link', '__return_false' );
add_filter( 'start_post_rel_link', '__return_false' );
add_filter( 'previous_post_rel_link', '__return_false' );
add_filter( 'next_post_rel_link', '__return_false' );
