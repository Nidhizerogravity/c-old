<?php
add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_enqueue_styles' );
function twentyseventeen_child_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}


function twentyseventeen_style_script()
{
	wp_enqueue_style('boostrap-min','https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css','all');
	wp_enqueue_style('font-awesome-min','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css','all');
	wp_enqueue_style('montserrat-font','https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap','all');
    wp_enqueue_style('animate-css','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css','all');
}
add_action('wp_enqueue_scripts','twentyseventeen_style_script');
