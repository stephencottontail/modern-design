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

add_action( 'wp_head', function() {
    $phrases = array(
        'Home',
        'About',
        'Mess May Serve Creatives, Or, Do Everything Like Me Or You\'re Not Actually a Creative',
        'Using Dopamine to Enhance',
        'Wear the Same Color Every Day to Avoid Decision-Making in the Morning',
        'Irrelevant Industry Buzzwords',
        'I Was Unknowingly Aiming For a Goal That Didn\'t Resonate With Me',
        'More Irrelevant Industry Buzzwords',
        'Avoiding Decision Fatigue'
    );

    echo '<div class="sc-modal sc-navigation">'; ?>
    <span class="sc-modal__title">Modern Design</span>
    <img class="sc-modal__image" src="<?php echo plugins_url( 'img/smiles.png', __FILE__ ); ?>" />
    <div class="sc-navigation__links">
    <?php foreach ( $phrases as $phrase ) {
        printf( '<a href="%s">%s</a>', 'https://www.apple.com/', $phrase );
    }
    echo '</div>';
    echo '</div>';
}, 50 );

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

add_action( 'wp_footer', function() { ?>
    <div class="sc-modal__wrapper" id="sc-mobile-app-wrapper">
        <div class="sc-modal sc-mobile-app">
            <span class="sc-modal__title">Learn About Our Mobile App?</span>
            <p><strong>Hey!</strong> We now have a mobile app. It's been scientifically proven that using our mobile app instead of our website makes you 18.756% less likely to get scurvy.</p>
            <div class="sc-mobile-app-buttons">
                <button class="sc-button sc-button__primary sc-button__primary--blue" id="accept-mobile-app"><strong>Yes!</strong> I enjoy mobile apps.</button>
                <button class="sc-button sc-button__secondary sc-button__secondary--blue" id="reject-mobile-app"><strong>No</strong>, I want to contract scurvy.</button>
            </div>
        </div>
    </div>
<?php }, 70 );

add_action( 'wp_footer', function() { ?>
    <div class="sc-modal__wrapper" id="sc-newsletter-wrapper">
        <div class="sc-modal sc-newsletter">
            <span class="sc-modal__title">Sign Up For Our Newsletter</span>
            <img class="sc-modal__image" src="<?php echo plugins_url( 'img/landscape.png', __FILE__ ); ?>" />
            <p><strong>Good news!</strong> We now have a newsletter. Please commit to receiving email notifications about new content before you even get a chance to check us out. And as a bonus, we'll sell your email address to a bunch of dodgy companies so you can receive hundreds of useless emails per week!</p>
            <form>
                <label for="sc-email">Email:</label>
                <input type="email" name="sc-email" />
            </form>
            <div class="sc-newsletter-buttons">
                <button class="sc-button sc-button__primary sc-button__primary--blue" id="accept-newsletter"><strong>Yes</strong>, sign me up!</button>
                <button class="sc-button sc-button__secondary sc-button__secondary--blue" id="reject-newsletter">X</button>
            </div>
        </div>
    </div>
<?php }, 60 );
