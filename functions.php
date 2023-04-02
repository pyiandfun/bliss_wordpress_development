<?php

function my_Register_styles() {
  wp_enqueue_style('my_style',get_template_directory_uri().'/style.css',array(),'1.0','all');
  wp_enqueue_style('my_bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',array(),'4.4.1','all');
  wp_enqueue_style('my_responsive',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0','all');
  wp_enqueue_style('my_owl.carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0','all');
  wp_enqueue_style('my_icomoon',get_template_directory_uri().'/assets/css/icomoon.css',array(),'1.0','all');
  wp_enqueue_style('my_nice-select',get_template_directory_uri().'/assets/css/nice-select.css',array(),'1.0','all');
  wp_enqueue_style('my_niceCountryInput',get_template_directory_uri().'/assets/css/niceCountryInput.css',array(),'1.0','all');
  wp_enqueue_style('my_bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css',array(),'1.0','all');

}
add_action('wp_enqueue_scripts','my_Register_styles');

function my_Register_scripts() {
  wp_enqueue_script('my_script',get_template_directory_uri().'/assets/js/jquery-3.0.0.min.js',true);
  wp_enqueue_script('my_script',get_template_directory_uri().'/assets/js/jquery.min.js',true);
  wp_enqueue_script('my_script',get_template_directory_uri().'/assets/js/jquery.nice-select.min.js',true);
  wp_enqueue_script('my_script',get_template_directory_uri().'/assets/js/niceCountryInput.js',true);
  wp_enqueue_script('my_script',get_template_directory_uri().'/assets/js/owl.carousel.min.js',true);

}
add_action('wp_enqueue_scripts','my_Register_scripts');

function my_menus() {
  $locations = array(
    'primary' => 'Desktop Primary Left Sidebar',
    'footer'  => 'Footer Menu Items'
  );
  register_nav_menus($locations);
}
add_action('init','my_menus');

function my_theme_support() {
  add_theme_support('title-tag');
}
add_action('after_theme_setup','my_theme_support');


add_theme_support('post-thumbnails');
add_post_type_support( 'blogs', 'thumbnail' );  
function Blog_post_type() {
	register_post_type( 'blogs',
	array(
		  'labels' =>array(
			  'name' => __('blogs'),
			  'singular_name' => __('blog')
		),
		'public' => true,
  		'has_archive' => false,
  		'rewrite' => array('slug' => 'blogs'),
      'supports' => array('title', 'editor', 'thumbnail'),
	));
}

add_action('init','Blog_post_type');

function my_register_taxonomy_technologies() {
	$labels = array(
		'name'              => 'Technologies',
		'singular_name'     => 'Technology',
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'public' => true
	);
	register_taxonomy( 'technology', [ 'blogs' ], $args );
}

add_action( 'init', 'my_register_taxonomy_technologies' );

function my_register_taxonomy_business() {
	$labels = array(
		'name'              => 'Business',
		'singular_name'     => 'Business',
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'public' => true
	);
	register_taxonomy( 'business', [ 'blogs' ], $args );
}

add_action( 'init', 'my_register_taxonomy_business' );
?>



