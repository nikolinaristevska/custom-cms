$(document).ready(function() {
    'use strict';

    $("#recent-column5").owlCarousel({
        autoPlay: 3000,
        items: 5,
        navigation: true,
        pagination: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
    });
    $("#recent-column4").owlCarousel({
        autoPlay: 3000,
        items: 4,
        navigation: true,
        pagination: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
    });
    $("#recent-column3").owlCarousel({
        autoPlay: 3000,
        items: 3,
        navigation: true,
        pagination: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 1],
    });
    $("#team").owlCarousel({
        autoPlay: false,
        items: 4,
        navigation: true,
        pagination: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
    });
    $("#recent-products").owlCarousel({
        autoPlay: false,
        items: 4,
        navigation: true,
        pagination: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
    });
    $("#popular-place").owlCarousel({
        autoPlay: false,
        items: 3,
        navigation: true,
        pagination: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [920, 3],
        itemsTabletSmall: [767, 2],
    });
    $("#testimonials").owlCarousel({
        autoPlay: 5000,
        singleItem: true,
        navigation: false,
        pagination: true,
    });
    $("#clients").owlCarousel({
        autoPlay: false,
        items: 5,
        navigation: true,
        pagination: false,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 4],
        itemsTablet: [920, 3],
        itemsTabletSmall: [767, 2],
    });
    $("#clients2").owlCarousel({
        autoPlay: 10000,
        items: 3,
        navigation: false,
        pagination: false,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [1024, 3],
        itemsTablet: [768, 3],
        itemsMobile: [480, 1]
    });
    $("#screenshot").owlCarousel({
        autoPlay: false,
        items: 3,
        navigation: true,
        pagination: false,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 4],
        itemsTablet: [768, 3],
    });
    $("#recent-comments").owlCarousel({
        autoPlay: 5000,
        singleItem: true,
        navigation: true,
        pagination: false,
    });
    $("#slider-app").owlCarousel({
        navigation: false,
        pagination: false,
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: 3000
    });
});