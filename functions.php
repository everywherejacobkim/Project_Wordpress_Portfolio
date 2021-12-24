<?php

if ( ! function_exists( 'portfolio_setup' ) ) :
 
   function portfolio_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );

     register_nav_menus( array(
        'menu-main' => 'Main Menu',
        'menu-footer' => 'Footer Menu'
     ) );
   }
 
endif;
 
add_action('after_setup_theme', 'portfolio_setup');
 
function portfolio_scripts_styles(){
   wp_enqueue_style('portfolio_style', get_stylesheet_uri(), array(), time());
   wp_enqueue_style('portfolio_style_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
   wp_enqueue_script('portfolio_script_navigation_js', get_template_directory_uri() . '/js/navigation.js', array(), null, true);
   wp_enqueue_style( 'portfolio_style_googlefonts','https://fonts.googleapis.com/css2?family=Smooch', array(), null);
}

 
add_action('wp_enqueue_scripts', 'portfolio_scripts_styles');

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );