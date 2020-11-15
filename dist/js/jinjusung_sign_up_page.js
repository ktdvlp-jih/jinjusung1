$(document).ready(function() {

    $(".gnb > ul > li").hover(function() {
        $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
    }, function() {
        $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
    });

    $('.slider').bxSlider();

    $('.section1_bg').bxSlider({
        mode: "fade",
        auto: true
    });

});


function login_form_check() {
    var uid = document.getElementById("uid");
    var upw = document.getElementById("upw");

    if (!uid.value) {
        alert("아이디를 입력하세요");
        uid.focus();
        return false;
    };

    //비번확인
    if (!upw.value) {
        alert("비밀번호를 입력하세요");
        upw.focus();
        return false;
    };


    document.login_form.submit(); //버튼을 submit로 바꾸는것 유효성 검사 이후에 발생 하도록 설정
}