$(document).ready(function () {

    $(".gnb > ul > li").hover(function () {
        $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
    }, function () {
        $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
    });

    $('.slider').bxSlider();

    $('.section1_bg').bxSlider({
        mode: "fade",
        auto: true
    });

    $('.slider').bxSlider();

    $('.section3_bg').bxSlider({
        mode: "fade",
        // auto:true
    });

});