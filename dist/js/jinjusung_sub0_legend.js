$(document).ready(function () {

    $(".gnb > ul > li").hover(function () {
        $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
    }, function () {
        $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
    });
});

$(function () {
    // alert("냥?");

    // var gnulist = new Array("section2_snb_menu1", "section2_snb_menu2", "section2_snb_menu3", "section2_snb_menu4")
    $("#section2_snb_menu1 ul").hide();
    // $("#section2_snb_menu2 ul").hide();
    $("#section2_snb_menu3 ul").hide();
    $("#section2_snb_menu4 ul").hide();



    $(".section2_snb dd").click(function () {
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

    $(".section2_snb ul li a").hover(function () {
        $(this).css("color", "black");

    }, function () {
        $(this).css("color", "rgb(214, 214, 214)");
    });

});


function section2_snb_menu_button(id) {
    var sm1 = document.getElementById("section2_snb_menu1");
    var sm2 = document.getElementById("section2_snb_menu2");
    var sm3 = document.getElementById("section2_snb_menu3");
    var sm4 = document.getElementById("section2_snb_menu4");

    smlist = new Array(sm1, sm2, sm3,sm4);
    for (var i = 0; i < smlist.length; i++) {
        if (smlist[i].id == id) {
            smlist[i].className = "section2_snb_menu1_hover";
        } else if (smlist[i] != id) {
            smlist[i].className = "section2_snb_menu1";
        }
    }
}




