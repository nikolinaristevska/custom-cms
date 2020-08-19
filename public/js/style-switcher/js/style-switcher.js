/* =============================================================================

* Template name : Ecada - Responsive Multipurpose Template
* Author : @encodeslife
* Version : v2.0
* Website: http://encodeslife.com
* Created : 22 November 2017
* Last update : 12 June 2019

============================================================================= */

(function() {
    'use strict';

    var panel = $('.style-switcher');
    $('.style-switcher-btn').on('click', function() {
        panel.show();
    });
    $('.style-switcher-close').on('click', function() {
        panel.hide();
    });
    $('li', panel).on('click', function() {
        var color = $(this).attr('data-style');
        setColor(color);
        $('.list-unstyled li', panel).removeClass('theme-active');
        $(this).addClass('theme-active');
    });
    $('.style-switcher .header-light').on('click', function() {
        $('nav').removeClass('navbar-dark').addClass('navbar-white');
    });
    $('.style-switcher .header-dark').on('click', function() {
        $('nav').removeClass('navbar-white').addClass('navbar-dark');
    });
    var setColor = function(color) {
        $('#skin').attr('href', 'css/theme-colors/' + color + '.css');
        $('.logo img').attr('src', 'img/themes/logo-' + color + '.png');
        $('.footer-logo').attr('src', 'img/themes/logo-' + color + '.png');
    }
})();