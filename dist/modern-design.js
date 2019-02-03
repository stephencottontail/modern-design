jQuery( document ).ready( function( $ ) {
    var cookies = $( '.sc-cookies' );
    var acceptCookies = $( '#accept-cookies' );
    var rejectCookies = $( '#reject-cookies' );
    var navigation = $( '.sc-navigation' );
    var mobile = $( '.sc-mobile-app' );
    var mobileWrapper = $( '#sc-mobile-app-wrapper' );
    var acceptMobile = $( '#accept-mobile-app' );
    var rejectMobile = $( '#reject-mobile-app' );
    var newsletter = $( '.sc-newsletter' );
    var newsletterWrapper = $( '#sc-newsletter-wrapper' );
    var acceptNewsletter = $( '#accept-newsletter' );
    var rejectNewsletter = $( '#reject-newsletter' );

    function blink( el ) {
        el.fadeIn( 250 ).fadeOut( 100 ).fadeIn( 250 ).fadeOut( 100 ).fadeIn( 250 );
    };

    function stepSix() {
        var xMinimum = 32;
        var xMaximum = newsletter.width() - 32;
        var yMinimum = 32;
        var yMaximum = newsletter.height() - 32;
        var closeButtonX = Math.floor( Math.random() * ( xMaximum - xMinimum + 1 ) ) + xMinimum;
        var closeButtonY = Math.floor( Math.random() * ( yMaximum - yMinimum + 1 ) ) + yMinimum;

        rejectNewsletter.css( { 'top': closeButtonY, 'left': closeButtonX } );
        rejectNewsletter.on( 'click', function() {
            newsletter.css( 'display', 'none' );
            newsletterWrapper.css( 'display', 'none' );
        } );
    }

    function stepFive() {
        $( window ).off( 'scroll' );
        window.setTimeout( function() {

            blink( newsletter );
            newsletterWrapper.css( 'display', 'flex' );
            stepSix();

            acceptNewsletter.on( 'click', function() {
                window.location.href = 'https://youtu.be/dQw4w9WgXcQ';
            } );
        }, 750 );
    }

    function stepFour() {
        mobile.css( 'display', 'none' );
        mobileWrapper.css( 'display', 'none' );
        $( window ).on( 'scroll', function() {
            if ( $( window ).scrollTop() > ( $( 'body' ).height() * 0.15 ) ) {
                stepFive();
            }
        } );
    }

    function stepThree() {
        $( window ).off( 'scroll', stepThree );
        window.setTimeout( function() {
            blink( mobile );
            mobileWrapper.css( 'display', 'flex' );
        }, 750 );

        acceptMobile.on( 'click', function() {
            window.location.href = 'https://youtu.be/dQw4w9WgXcQ';
        } );
        rejectMobile.on( 'click', stepFour );
    }

    function stepTwo() {
        var navHeight = navigation.height();

        cookies.css( 'display', 'none' );

        $( 'body' ).css( 'padding-top', navHeight + 'px' );
        window.setTimeout( function() { navigation.css( 'display', 'block' ) }, 750 );

        $( window ).on( 'scroll', stepThree );
    }

    $( document ).ready( function() {
        blink( cookies );

        rejectCookies.on( 'click', function() {
            window.location.href = 'https://youtu.be/dQw4w9WgXcQ';
        } );
        acceptCookies.on( 'click', function() {
            stepTwo();
        } );
    } );
} );
