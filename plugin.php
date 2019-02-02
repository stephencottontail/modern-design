<?php

/**
 * Plugin Name: WP Modern Design
 * Description: Brings WordPress into 2019 by introducing modern web design concepts
 * Author: Stephen Dickinson <stephencottontail@me.com>
 * License: GPL 2.0
 * Version: 0.1.0
 */

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'sc-modern-google-fonts', 'https://fonts.googleapis.com/css?family=Eczar|Poppins' );
    wp_enqueue_style( 'sc-modern-styles', plugins_url( 'dist/style.css', __FILE__ ) );

    wp_enqueue_script( 'sc-modern-script', plugins_url( 'dist/modern-design.js', __FILE__ ), array( 'jquery' ), null, true );
} );
