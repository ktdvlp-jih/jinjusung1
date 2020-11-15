$(document).ready(function() {

    $(".gnb > ul > li").hover(function() {
        $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
    }, function() {
        $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
    });

    $('.slider').bxSlider();

});



function next() {

    if (!apply1.checked) {
        alert("이용 약관 동의(필수)");
        apply1.focus();
        return false;
    };

    if (!apply2.checked) {
        alert("개인정보 수집 및 이용에 대한 안내(필수)");
        apply2.focus();
        return false;
    };
    document.terms_use.submit();
}