$(document).ready(function() {

    $(".gnb > ul > li").hover(function() {
        $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
    }, function() {
        $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
    });
});

$(function() {

    // var gnulist = new Array("section2_snb_menu1", "section2_snb_menu2", "section2_snb_menu3", "section2_snb_menu4")
    $("#section2_snb_menu2 ul").hide();
    $("#section2_snb_menu3 ul").hide();
    $("#section2_snb_menu4 ul").hide();



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

    $(".section2_snb ul li a").hover(function() {
        $(this).css("color", "black");
    }, function() {
        $(this).css("color", "rgb(214, 214, 214)");
    });
})

var small_bg1 = document.getElementById("small_bg1");
var small_bg2 = document.getElementById("small_bg2");
var small_bg3 = document.getElementById("small_bg3");
var small_bg4 = document.getElementById("small_bg4");
var section2_bg = document.getElementById("section2_bg");
// alert(small_bg4.title);
var bg_list = new Array(small_bg1, small_bg2, small_bg3, small_bg4);

function section2_snb_menu1_button() {
    var sm1 = document.getElementById("section2_snb_menu1");
    sm1.className = "section2_snb_menu1_hover";

    var sm2 = document.getElementById("section2_snb_menu2");
    sm2.className = "section2_snb_menu2";
}

function changeButton1() {
    // document.getElementById("ul_information1").className = "ul_information1";
    document.getElementById("ul_information1").style.display = "block"
    document.getElementById("map").style.display = "none"
    document.getElementById("ul_information3").style.display = "none"
    document.getElementById("ul_information4").style.display = "none"
}

function changeButton2() {
    // document.getElementById("ul_information2").className = "ul_information2";
    document.getElementById("ul_information1").style.display = "none"
    document.getElementById("map").style.display = "block"
    document.getElementById("ul_information3").style.display = "none"
    document.getElementById("ul_information4").style.display = "none"
}

function changeButton3() {
    // document.getElementById("ul_information1").className = "ul_information1";
    document.getElementById("ul_information1").style.display = "none"
    document.getElementById("map").style.display = "none"
    document.getElementById("ul_information3").style.display = "block"
    document.getElementById("ul_information4").style.display = "none"
}

function changeButton4() {
    // document.getElementById("ul_information2").className = "ul_information2";
    document.getElementById("ul_information1").style.display = "none"
    document.getElementById("map").style.display = "none"
    document.getElementById("ul_information3").style.display = "none"
    document.getElementById("ul_information4").style.display = "block"
}


function changeImage_left() {

    for (var i = 0; i < bg_list.length; i++) {
        if (section2_bg.title == bg_list[i].title) {
            section2_bg.src = bg_list[i - 1].src;
            section2_bg.alt = bg_list[i - 1].alt;
            section2_bg.title = bg_list[i - 1].title;
            break;
        }

    }
}

function changeImage_right() {

    for (var i = 0; i < bg_list.length; i++) {
        if (section2_bg.title == bg_list[i].title) {
            section2_bg.src = bg_list[i + 1].src;
            section2_bg.alt = bg_list[i + 1].alt;
            section2_bg.title = bg_list[i + 1].title;
            break;
        }
    }

}

function changeImage(img_url, img_alt, img_title) {
    var section2_bg = document.getElementById("section2_bg");
    section2_bg.src = img_url;
    section2_bg.alt = img_alt;
    section2_bg.title = img_title;
    // ci2.class = img_class; //현재 ID는 되는데 클래스는 안됨 아마 우선순위의 문제인거 같음
}


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


//네이버지도 API부분

var mapOptions = {
    center: new naver.maps.LatLng(35.1760766, 128.0383744),
    zoom: 15
};


var map = new naver.maps.Map('map', mapOptions);

var markerOptions = {
    position: new naver.maps.LatLng(35.1760766, 128.0383744),
    map: map
};

var marker = new naver.maps.Marker(markerOptions);