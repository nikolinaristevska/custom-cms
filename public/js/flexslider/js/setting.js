var flexSlider = function() {
    'use strict';
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
    });
    $('.flexslider1').flexslider({
        animation: "fade",
        slideshowSpeed: 9000,
    });
    $('.flexslider-photo').flexslider({
        animation: "slide",
        direction: "vertical",
        slideshowSpeed: 3000,
    });
}();