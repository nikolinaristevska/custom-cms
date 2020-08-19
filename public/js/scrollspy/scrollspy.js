(function($) {
    "use strict";
    /*
    Scrollspy
    =========================== */
    // Scrollspy Option
    var $body = $('body'),
        $navtop = $('nav.navbar'),
        offset = $navtop.outerHeight();
    $body.scrollspy({
        target: '.navbar',
        offset: offset
    });
    // Animation Scrollspy
    $('.scroll').on('click', function(event) {
        event.preventDefault();
        $(".navbar-collapse").removeClass("in");
        // Toggle Bars
        $(".navbar-toggle").each(function() {
            $(".fa", this).removeClass("fa-times");
            $(".fa", this).addClass("fa-bars");
        });
        var scrollTop = $(window).scrollTop(),
            $anchor = $(this).find('a'),
            $section = $($anchor.attr('href')).offset().top;
        if (scrollTop < 34) {
            var $position = $section - 190;
        } else {
            var $position = $section - 77;
        }
        $('html, body').stop().animate({
            scrollTop: $position
        }, 1500, 'easeInOutExpo');
        return true;
    });
    // Activate Navigation
    function fixSpy() {
        var data = $body.data('bs.scrollspy');
        if (data) {
            offset = $navtop.outerHeight();
            data.options.offset = offset;
            $body.data('bs.scrollspy', data);
            $body.scrollspy('refresh');
        }
    }
    // Activate Navigation on resize
    var resizeTimer;
    $(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(fixSpy, 200);
    });
}(jQuery));