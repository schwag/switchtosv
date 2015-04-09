<?php
/**
 * Theme Name: afusa Blog
 *
 *
 * @package WordPress
 * @subpackage afusa Blog
 */


// Enque Styles
function afusa_styles() {

	// Styles
	wp_register_style ( 'bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css' );
	wp_register_style ( 'static_styles', 'http://www.afusa.net/css/custom.css' );
	wp_register_style ( 'blog_style', get_stylesheet_uri() , false, 1.0, false);
	
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'static_styles' );
	wp_enqueue_style( 'blog_style' );
	
	//wp_enqueue_style( 'modals', get_template_directory_uri() . '/css/modals.css' , false, 1.0, false, 2 );
	// Deregister
	
}

add_action( 'wp_enqueue_scripts', 'afusa_styles' );

function afusa_scripts() {
	
	// Deregester WP jQuery
	wp_deregister_script('jquery');	
	
	// Register Scripts
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), false, '', true);
	wp_register_script('bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', false, '', true);	
	
	// Enqueue Scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');

	
}

add_action( 'wp_enqueue_scripts', 'afusa_scripts' );

// Adds theme support for the featured image

add_theme_support( 'post-thumbnails' ); 

// Menus

function remove_menus(){
  
  //remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  //remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );


// Adds shortcode support to widget area
add_filter('widget_text', 'do_shortcode');

// Enable PHP in widgets
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}




// Register Widget Areas

// Main Sidebar Widget Area

function mainsidebar_widgets_init() {

	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'main_sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="main-sb-widget-title">',
		'after_title' => '</h6>',
	) );
}
add_action( 'widgets_init', 'mainsidebar_widgets_init' );


// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
    global $post;
	return '<a class="mc-read-more" href="'. get_permalink($post->ID) . '">&nbsp;&nbsp;[Read More]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	global $post;
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );