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

add_action( 'wp_footer', function() { ?>
   <div class="sc-modal sc-cookies">
       <img class="sc-modal__image" src="<?php echo plugins_url( 'img/flower.png', __FILE__ ); ?>" />
       <p><strong>Attention!</strong> This website doesn't just use cookies, it dispatches invisible drones to watch you and your loved ones. If you'd like to learn more about the technology behind these invisible drones, click "Learn More". Otherwise, click "I Understand" to demonstrate that you really don't care whether invisible drones stalk you and your loved ones.</p>
       <div class="sc-cookies__buttons">
           <button class="sc-button sc-button__primary sc-button__primary--blue" id="accept-cookies">I Accept!</button>
           <button class="sc-button sc-button__secondary sc-button__secondary--blue" id="reject-cookies">Learn More</button>
        </div>
    </div>
<?php }, 50 );
