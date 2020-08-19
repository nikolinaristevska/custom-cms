var vegas = function() {
    'use strict';
    $('#home-land').vegas({
        slides: [
            {
                src: "img/slider/vegas/landing-page/001.jpg"
            },
            {
                src: "img/slider/vegas/landing-page/002.jpg"
            },
            {
                src: "img/slider/vegas/landing-page/003.jpg"
            }
        ],
        animation: ['fadeLeft', 'fadeRight'],
        transitionDuration: 5000,
        delay: 7000
    });
    $('#bg-slideestate').vegas({
        slides: [
            {
                src: "img/slider/vegas/real-estate/001.jpg"
            },
            {
                src: "img/slider/vegas/real-estate/002.jpg"
            },
            {
                src: "img/slider/vegas/real-estate/003.jpg"
            }
        ],
        animation: 'kenburnsLeft',
        transitionDuration: 5000,
        delay: 7000
    });
}();