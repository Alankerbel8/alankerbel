<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }


function wpse_60056_load_scripts() {
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'jqueryexample', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
    wp_enqueue_script( 'jqueryexample' );

    wp_register_script('test', get_stylesheet_directory_uri() . '/js/extra.js'); 
    wp_enqueue_script('test');

    wp_register_script('bootjs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js'); 
    wp_enqueue_script('bootjs');

    wp_register_style('bootcss', get_stylesheet_directory_uri() . '/css/bootstrap.min.css'); 
    wp_enqueue_style('bootcss');

    wp_register_style('bootcss2', get_stylesheet_directory_uri() . '/css/bootstrap.css'); 
    wp_enqueue_style('bootcss2');

    wp_register_style('bootcss3', get_stylesheet_directory_uri() . '/style.css'); 
    wp_enqueue_style('bootcss3');




    

}    
add_action('wp_enqueue_scripts', 'wpse_60056_load_scripts');
?>