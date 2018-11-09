<?php
function my_theme_enqueue_styles() {

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css');

    wp_enqueue_style( 'leaflet-style','https://unpkg.com/leaflet@1.3.4/dist/leaflet.css');

    wp_enqueue_style( 'font-awesome',  'https://use.fontawesome.com/releases/v5.4.1/css/all.css' );

    wp_enqueue_script( 'leaflet-script', 'https://unpkg.com/leaflet@1.3.4/dist/leaflet.js');
    wp_enqueue_script( 'my-script',
        get_stylesheet_directory_uri() . '/script.js',array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



function create_post_type() {

	$arg = array(
      	'labels' => array(
        	'name' => 'Services' ,
        	'singular_name' => 'Service',
      		'menu_name' => 'Services'
      	),
      	'public' => true,
      	'show_in_nav_menues' => true,
    );
  	register_post_type( 'service',$arg);

    $arg = array(
        'labels' => array(
          'name' => 'Reviews' ,
          'singular_name' => 'Review',
          'menu_name' => 'Reviews'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'review',$arg);

    $arg = array(
        'labels' => array(
          'name' => 'Locations' ,
          'singular_name' => 'Location',
          'menu_name' => 'Locations'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'location',$arg);

}
add_action( 'init', 'create_post_type' );





?>

