<?php

// function mytheme_post_thumbnails() {
//
// }
// add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
// Function file for Travel Essence theme
// Child theme of Responsive Mobile -->
// Joe Higgins 2019 -->

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'responsive-mobile-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', array('bootstrap') ); //loads bootstrap before child theme style
    wp_enqueue_style( 'travel-essence-style',
        array( $parent_style ),
        get_stylesheet_directory_uri() . '/style.css',
        wp_get_theme()->get('Version')
    );
}

// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// function theme_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style','wpbootstrap_bootstrap_main_css','wpbootstrap_bootstrap_theme_css'));
// }


/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function travel_essence_setup() {
          add_theme_support( 'post-thumbnails' );
          add_theme_support( 'wp-block-styles' );
        // Add support for editor styles.
          add_theme_support( 'editor-styles' );
          $args = array(
          	'width'         => 980,
          	'height'        => 60,
          	'default-image' => get_template_directory_uri() . '/images/banner.jpg',
          	'uploads'       => true,
          );
          add_theme_support( 'custom-header', $args );

          // Enqueue editor styles.
	        add_editor_style( 'css/editor-styles.css' );
}
add_action( 'after_setup_theme', 'travel_essence_setup' );

?>
