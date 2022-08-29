<?php

/**
 * Theme setup.
 */

namespace App;

use Carbon_Fields\Block;
use Carbon_Fields\Carbon_Fields;
use Carbon_Fields\Field;
use function Roots\bundle;

add_action('carbon_fields_register_fields', function () {
    require(get_stylesheet_directory() . '/app/inc/carbon_fields.php');
    Block::make( 'Flight' )
         ->add_fields( [
             Field::make( 'map', 'from' ),
             Field::make( 'date_time', 'departure_timestamp' ),
             Field::make( 'map', 'destination' ),
             Field::make( 'date_time', 'arrival_timestamp' ),
         ] )
         ->set_render_callback( function( $flight ) {
             ?>
             <p>
                 Flight departs
                 from <?php echo esc_html( $flight['from']['address'] ) ?> at
                 <?php echo $flight['departure_timestamp'] ?>
                 and arrives
                 to <?php echo esc_html( $flight['destination']['address'] ) ?> at
                 <?php echo $flight['arrival_timestamp'] ?>
             </p>
             <?php
         });
});

add_action('after_setup_theme', function () {
    require_once(get_stylesheet_directory() .'/vendor/autoload.php');
    Carbon_Fields::boot();

    add_image_size('r1-logo', 200, 200, true);

});


/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     *
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
        'align-wide'
    ]);


    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'footer_navigation'  => __('Footer Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');
    add_theme_support(
        'category-thumbnails',
        array( 'post', 'page', 'service', 'home' )
    );
    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * image Sizes
     *
     */
    add_image_size('thumbnail', 300, 300, true);
    add_image_size('mobile-logo', 100, 'auto', true);


    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Custom Logo
 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
 */
add_theme_support('custom-logo');

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ];

    register_sidebar([
                          'name' => __('Primary', 'sage'),
                          'id'   => 'sidebar-primary',
                      ] + $config);

    register_sidebar([
                          'name' => __('Footer', 'sage'),
                          'id'   => 'sidebar-footer',
                      ] + $config);
});

require "inc/custom-post-types.php";

/*
 * image Sizes
 * @link https://developer.wordpress.org/reference/functions/add_image_size/
 */
add_action('after_setup_theme', function () {
    add_image_size('r1-logo', 200, 200, true);
});



