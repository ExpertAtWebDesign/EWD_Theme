// --------------
// Custom jQuery
// --------------

jQuery(document).ready( function($) {


    // Mobile Menu Functionality

    $('.mobile-btn').click( function() {

        var delayTime = 200;

        $('.mobile-menu')
            .css( 'visibility', 'visible' )
            .animate({
                top: '0',
                opacity: .9
        }, 300);

        $('.mobile-menu-nav > li > a').each( function() {
            $(this).delay( delayTime ).animate({
                opacity: 1
            }, 250);
            delayTime += 100;
        });
    });

    $('.mobile-menu .clear').click( function() {
        $('.mobile-menu')
            .animate({
                top: '10%',
                opacity: 0
        }, 200, function() {
            $(this).css( 'visibility', 'hidden' );
            $('.mobile-menu-nav > li > a').css( 'opacity', '0' );
        });
    });

    // -------------------------------------



    // Sticky Header

    var curPoint = 0;

    $(window).scroll( function() {

        var st = $(this).scrollTop();
        var introDistance = $('#intro + div').position().top;
        var headerHeight = $('header.sticky-header').height();


        if ( st < curPoint && st > introDistance ) {
            // Scrolling Up

            if ( $('header.sticky-header').hasClass('showMenu') ) {

            } else {

                $('header.sticky-header').addClass('showMenu');
                $('header.sticky-header').removeClass('removeMenu');

            }

            //$('body').css('padding-top', headerHeight);

        } else if ( st > curPoint && st > introDistance ){
            // Scrolling Down



            if( $('header.sticky-header').hasClass('showMenu') ) {

                $('header.sticky-header').removeClass('showMenu');
                $('header.sticky-header').addClass('removeMenu');

            }

        } else {

            $('header.sticky-header').removeClass('removeMenu');
            $('header.sticky-header').removeClass('showMenu');
            //$('body').css('padding-top', '0');

        }


        curPoint = st;


    });

    // -------------------------------------



    // Mobile Menu -> Handle Sub-Nav

    var mobileNav = $('.mobile-menu-nav > li');
    var subNav = $('.sub-menu');

    var subNavButtonRight = '.mobile-menu-nav > .menu-item > i';
    var subNavButtonLeft = '.sub-menu > i';


    mobileNav.each( function() {

        if ( $(this).children( '.sub-menu' ).length > 0 ) {
            $(this).append('<i class=\'material-icons\'>chevron_right</i>');
            $(this).children('.sub-menu').prepend('<i class=\'material-icons\'>chevron_left</i>');
        }

    });

    $(document).on( 'click', subNavButtonRight, function(event) {
        $('.mobile-menu-nav').addClass('menu-push-left');
        $(this).siblings('.sub-menu').addClass('show-sub-nav');
    });

    $(document).on( 'click', subNavButtonLeft, function(event) {
        $('.mobile-menu-nav').removeClass('menu-push-left');
        $(this).siblings('.sub-menu').removeClass('show-sub-nav');
    });

    // -------------------------------------



    // Scrollto Button

    var scrollButton = $('.scroll-button');

    scrollButton.click( function () {
        var scrollPoint = $('#intro + div').position().top;

        $("html, body").animate({
            scrollTop: scrollPoint - 40
        }, 600, "swing");
    });

    // -------------------------------------



});

// --------------
// end Custom jQuery
// --------------