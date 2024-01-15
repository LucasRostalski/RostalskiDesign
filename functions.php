<?php



function theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Theme test, use a find and replace
		* to change 'theme-test' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'rostalski-design', get_template_directory() . '/languages' );
	   add_theme_support('automatic-feed-links');

   add_theme_support( 'title-tag' );  

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'main-menu', 'rostalski-design' ),
		)
	);


	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 350,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'theme_setup' );



function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array());
	wp_enqueue_style( 'main-style', get_template_directory_uri(). '/css/main.css');
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css');
		wp_enqueue_style( 'fancybox-style', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
		
	wp_style_add_data( 'theme-style', 'rtl', 'replace' );

// instead of "jquery-core" just "jquery", to disable jquery-migrate
wp_deregister_script( 'jquery-core' );
wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.6.0.min.js');
wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), true );
	wp_enqueue_script( 'bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'bootstrap-pooper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array('jquery'));
		wp_enqueue_script( 'facncybox-script', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array('jquery'));
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/custom.js', array('jquery'));
wp_enqueue_style( 'load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' );


	https://use.fontawesome.com/releases/v5.7.1/css/all.css
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );




function enqueue_custom_fonts(){
	if(!is_admin()){
		wp_register_style('Poppins','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,700;0,800;1,300&display=swap');
		wp_enqueue_style('Poppins');
	}
}
add_action('wp_enqueue_scripts','enqueue_custom_fonts');


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


