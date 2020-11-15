$(document).ready(function() {
    // $('#fullpage').fullpage({
    //     // sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
    //     anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
    //     menu: '#menu',
    //     scrollingSpeed: 1000
    // });

    function getCookie(name) {
        var cookie = document.cookie;
        if (document.cookie != "") {
            var cookie_array = cookie.split("; ");
            for (var index in cookie_array) {
                var cookie_name = cookie_array[index].split("=");
                if (cookie_name[0] == "popupYN") {
                    return cookie_name[1];
                }
            }
        }
        return;
    }

    function openPopup(url) {
        var cookieCheck = getCookie("popupYN");
        if (cookieCheck != "N")
            $("#popupDiv").css({
                top:
                    ($(window).height() - $("#popupDiv").outerHeight()) / 2 +
                    $(window).scrollTop() +
                    "px",
                left:
                    ($(window).width() - $("#popupDiv").outerWidth()) / 2 +
                    $(window).scrollLeft() +
                    "px",
                //팝업창을 가운데로 띄우기 위해 현재 화면의 가운데 값과 스크롤 값을 계산하여 팝업창 CSS 설정
            });

        $("#popup_mask").css("display", "block"); //팝업 뒷배경 display block
        $("#popupDiv").css("display", "block"); //팝업창 display block

        $("body").css("overflow", "hidden"); //body 스크롤바 없애기

        $("#popCloseBtn").click(function(event) {
            $("#popup_mask").css("display", "none"); //팝업창 뒷배경 display none
            $("#popupDiv").css("display", "none"); //팝업창 display none
            $("body").css("overflow", "auto"); //body 스크롤바 생성
        });
    }

    $(".gnb > ul > li").hover(
        function() {
            $(".gnb ul ul, .nav_bg").stop().slideDown("fast");
        },
        function() {
            $(".gnb ul ul, .nav_bg").stop().slideUp("fast");
        }
    );

    $(".slider").bxSlider();

    $(".section1_bg").bxSlider({
        mode: "fade",
        auto: true,
    });

    $(".slider").bxSlider();

    $(".section3_bg").bxSlider({
        mode: "fade",
        // auto:true
    });

    $(".slider").bxSlider();

    $(".bg_list").bxSlider({
        // mode: "fade",
        auto: true,
    });

    var apiURI =
        "http://api.openweathermap.org/data/2.5/weather?q=Hadong&appid=486f24838a50fa6724805dca9c76a4b2";
    // url : 요청 url을 의미한다.
    // type : 데이터 전송방식. GET 또는 POST
    // cache : 요청 페이지의 캐시 여부. false 또는 true
    // datatype : 서버에서 받아올 데이터를 어떤 형태로 해석할 것인지. xml, json, html, script를 선택할 수 있다.
    // data : 서버로 데이터를 전송할 때 사용한다. "name="+name 이런 형태로
    // success : Ajax 통신에 성공했을 때 실행되는 이벤트.
    // error : Ajax 통신에 실패했을 때 실행되는 이벤트. request, status, error로 에러 정보를 확인할 수 있다.
    var gnb_ck = 0;
    $(".ff a").click(function() {
        if (gnb_ck == 0) {
            // $(".ff").css({ right: "0px" });
            $(".ff").animate({
                    right: "0px",
                },
                "fast"
            );
            $(".ff a").animate({
                    right: "233px",
                },
                "fast"
            );
            gnb_ck = 1;
        } else {
            $(".ff").animate({
                    right: "-250px",
                },
                "fast"
            );
            $(".ff a").animate({
                    right: "-20px",
                },
                "fast"
            );
            gnb_ck = 0;
        }
    });
    document.getElementById("ff");

    $.ajax({
        url: apiURI,
        dataType: "json",
        type: "GET",
        async: "false",
        success: function(resp) {
            console.log(resp);
            // units=metric

            // 1번 방법
            // &
            // units = metric
            // $('#ff').append("현재온도asd : " + (resp.main.temp - 15) + '°C </br>');
            // $('#ff').append("현재습도 : " + resp.main.humidity + '</br>');
            // $('#ff').append("날씨 : " + resp.weather[0].main);
            // $('#ff').append("상세날씨설명 : " + resp.weather[0].description);
            // $('#ff').append("날씨 이미지 : " + resp.weather[0].icon);
            // $('#ff').append("바람   : " + resp.wind.speed);
            // $('#ff').append("나라   : " + resp.sys.country);
            // $('#ff').append("도시이름  : " + resp.name);
            // $('#ff').append("구름  : " + (resp.clouds.all) + "%");

            // 2번 방법
            // $('#tt').html("현재온도 : " + (resp.main.temp - 273.15).toFixed(1) + '°C </br>');
            $("#tt").html((resp.main.temp - 273.15).toFixed(1) + " °C");
            $("#ww").html(resp.weather[0].main);
            // $('#ll').html(resp.name);
            $("#ll").html("Hadong-eup");
            $("#wind").html(resp.wind.speed + "m/s");
            $("#hum").html(resp.main.humidity + "%");
            $("#cl").html(resp.clouds.all + "%");

            // 3번 방법
            // $('<span>현재온도1</span>').insertAfter($('#ff3'));
            // $('<span>현재온도2</span>').insertBefore($('#ff3'));
            // $('<span>현재온도3</span>').appendTo($('#ff3'));

            // 4번 방법
            // $('#ff4').text("현재온도 : " + (resp.main.temp - 275.15).toFixed(1) + '</br>');

            // 5번 이미지
            var imgURL =
                "http://openweathermap.org/img/w/" + resp.weather[0].icon + ".png";
            // var imgURL2 = "http://openweathermap.org/img/w/" + resp.weather[0].description + ".png";
            $("#imageid").attr("src", imgURL);
            // $('#imageid2').attr('src', imgURL2);

            // $("html컴포넌트").attr("src", imgURL);

            // document.write("구름  : " + (resp.clouds.all) + "%");
            // alert("현재온도" + (resp.main.temp - 273.15));
            // alert("현재습도 : " + resp.main.humidity);
            // alert("날씨 : " + resp.weather[0].main);
            // alert("상세날씨설명 : " + resp.weather[0].description);
            // alert("날씨 이미지 : " + resp.weather[0].icon);
            // alert("바람   : " + resp.wind.speed);
            // alert("나라   : " + resp.sys.country);
            // alert("도시이름  : " + resp.name);
            // alert("구름  : " + (resp.clouds.all) + "%");

            // alert(
            //     "현재온도" + (resp.main.temp - 273.15) +
            //     "\n현재습도 : " + resp.main.humidity +
            //     "\n날씨 : " + resp.weather[0].main +
            //     "\n상세날씨설명 : " + resp.weather[0].description +
            //     "\n날씨 이미지 : " + resp.weather[0].icon +
            //     "\n바람   : " + resp.wind.speed +
            //     "\n나라   : " + resp.sys.country +
            //     "\n도시이름  : " + resp.name +
            //     "\n구름  : " + (resp.clouds.all) + "%"
            // );
        },
    });

    function asd() {
        var imgURL =
            "http://openweathermap.org/img/w/" + resp.weather[0].icon + ".png";
        $("html컴포넌트").attr("src", imgURL);
    }
});

function link1(link) {
    var linka = "jinjusung_sub2_participation_yard_noticeboard_the.php?idx=";
    location = linka + link;
}