$(document).ready(function() {

    $(".gnb > ul > li").hover(function() {
        $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
    }, function() {
        $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
    });

    // $(".the").click(function()){

    // }
});

$(function() {

    // var gnulist = new Array("section2_snb_menu1", "section2_snb_menu2", "section2_snb_menu3", "section2_snb_menu4")
    // $("#section2_snb_menu1 ul").hide();
    // alert("11");
    $("#section2_snb_menu1 ul").hide();
    // $("#section2_snb_menu2 ul").hide();
    // $("#section2_snb_menu3 ul").hide();
    // $("#section2_snb_menu4 ul").hide();
    $(".section2_snb dd").click(function() {
        if (this.id == "section2_snb_menu1") {
            $("#section2_snb_menu1 ul").slideDown(500);
            $("#section2_snb_menu2 ul").slideUp(500);
            $("#section2_snb_menu3 ul").slideUp(500);
            $("#section2_snb_menu4 ul").slideUp(500);


        } else if (this.id == "section2_snb_menu2") {


            $("#section2_snb_menu1 ul").slideUp(500);
            $("#section2_snb_menu2 ul").slideDown(500);
            $("#section2_snb_menu3 ul").slideUp(500);
            $("#section2_snb_menu4 ul").slideUp(500);



        } else if (this.id == "section2_snb_menu3") {


            $("#section2_snb_menu1 ul").slideUp(500);
            $("#section2_snb_menu2 ul").slideUp(500);
            $("#section2_snb_menu3 ul").slideDown(500);
            $("#section2_snb_menu4 ul").slideUp(500);


        } else {
            $("#section2_snb_menu1 ul").slideUp(500);
            $("#section2_snb_menu2 ul").slideUp(500);
            $("#section2_snb_menu3 ul").slideUp(500);
            $("#section2_snb_menu4 ul").slideDown(500);
        };
    });

    $(".section2_information_in .tr_la").hide();
    $(".section2_information_in .tr_l").click(function() {
        var $s2 = (this.id + 'a');
        $('#' + $s2).toggle();
    });



    $(".section2_snb ul li a").hover(function() {
        $(this).css("color", "black");

    }, function() {
        $(this).css("color", "rgb(214, 214, 214)");
    });

});




function section2_snb_menu_button(id) {
    var sm1 = document.getElementById("section2_snb_menu1");
    var sm2 = document.getElementById("section2_snb_menu2");

    smlist = new Array(sm1, sm2);
    for (var i = 0; i < smlist.length; i++) {
        if (smlist[i].id == id) {
            smlist[i].className = "section2_snb_menu1_hover";
        } else if (smlist[i] != id) {
            smlist[i].className = "section2_snb_menu1";
        }
    }
}

function form_check() {
    var title = document.getElementById("title");
    var contents = document.getElementById("contents");
    var file = document.getElementById("file");

    if (!title.value) {
        alert("제목을 입력하세요");
        title.focus();
        return false;
    };

    //비번확인
    if (!contents.value) {
        alert("문의내용을 입력하세요");
        contents.focus();
        return false;
    };

    document.form_box.submit(); //버튼을 submit로 바꾸는것 유효성 검사 이후에 발생 하도록 설정


    // 이메일도 정규식을 사용해서 하기도 함 예외의 경우가 더 많아서 사용 안함
    // 하지만 연습용으로 해보기
}