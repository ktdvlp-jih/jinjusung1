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


var uid = document.getElementById("uid");
var upw = document.getElementById("upw");
var reupw = document.getElementById("reupw");
var uname = document.getElementById("uname");
var utel = document.getElementById("utel");
var uemail_id = document.getElementById("uemail_id");
var uemail_dns = document.getElementById("uemail_dns");
var uadd1 = document.getElementById("uadd1");
var uadd2 = document.getElementById("uadd2");
var uadd3 = document.getElementById("uadd3");
var uemail_sel = document.getElementById("uemail_sel");
var usns = document.getElementById("usns");


function sign_form_check() {


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

    // 비밀번호 자릿수확인
    // var cnt = up.value.length;
    if (upw.value.length < 6 || upw.value.length > 12) {
        alert("비밀번호를 입력하세요");
        upw.focus();
        return false;
    };

    //비밀번호 재확인
    if (reupw.value != upw.value) {
        alert("재입력된 비밀번호가 틀립니다.");
        reupw.focus();
        return false;
    };
    //이름 입력
    if (!uname.value) {
        alert("이름을 입력하세요");
        uname.focus();
        return false;
    };

    //정규식 숫자가 아닌게 들어있는지 검사 정규식 규칙대로 test()검사해주는함수를 사용 해서 검사
    //정규식 휴대폰번호 확인 검사 test(); 
    var reg_tel = /^[0-9]+$/g;
    if (!reg_tel.test(utel.value)) {
        alert("숫자만 입력하세요");
        utel.focus();
        return false;
    }



    document.user_form.submit(); //버튼을 submit로 바꾸는것 유효성 검사 이후에 발생 하도록 설정


    // 이메일도 정규식을 사용해서 하기도 함 예외의 경우가 더 많아서 사용 안함
    // 하지만 연습용으로 해보기
}




// 아이디 중복 확인
function search_addr() {
    //다른 페이지로     

    window.open("../../src/components/members/search_id.php", 'a', "width=400 height=200px left=200 top=50")
}

//주소확인
function address_check() {
    window.open("../../src/components/members/address_check.html", 'a', "width=400 height=200px left=200 top=50")
}

function change_email() {
    // var uemail_dns = document.getElementById("uemail_dns");
    // var uemail_sel = document.getElementById("uemail_sel");
    var idx = uemail_sel.options.selectedIndex; //고른 셀렉트의 번호를 골라줌 (index)

    var dns = uemail_sel.options[idx].value;

    // document.write("ue2").value;
    uemail_dns.value = dns;
    // document.getElementById("user_address_2").value = title;

}

// 비밀번호 확인


// function pw_check() {
//     if (cnt < 6 || cnt > 12) {
//         alert("비밀번호를 입력하세요");
//         up.focus();
//         // return false;
//     }

//     else if (reup.value != up.value) {
//         alert("재입력된 비밀번호가 틀립니다.");
//         reup.focus();
//         // return false;
//     }

//     document.join_from.submit();
// }

// 체크박스 확인
// function sns_check(){
//     if(!us.checked){
//         alert("약관동의필요");
//         us.focus();
//         return false;
//     }
//     document.join_from.submit();
// }


// var un = document.getElementById("user_name");
// var ui = document.getElementById("user_id");
// var up = document.getElementById("user_password");
// var reup = document.getElementById("re_user_password");
// var ut = document.getElementById("user_tel");
// var ue1 = document.getElementById("user_email_1");
// var ue2 = document.getElementById("user_email_2");
// var ua1 = document.getElementById("user_address_1");
// var ua2 = document.getElementById("user_address_2");
// var ua3 = document.getElementById("user_address_3");
// var eo = document.getElementById("email_option");
// var us = document.getElementById("user_sns");


// var formArray = new Array(un, ui, up, reup, ut, ue1, ue2, ua1, ua2, ua3, eo);
// function idMessgeS() {

//     for (var i = 0; i < formArray.length; i++) {
//         if (!formArray[i].value) {
//             alert(formArray[i].title + "값이 수정하십시요");
//             formArray[i].focus();
//             return true;
//         }
//     }

//     var cnt = up.value.length;
//     if (cnt < 6 || cnt > 12) {
//         alert("비밀번호를 입력하세요");
//         up.focus();
//         return false;
//     };

//     //비밀번호 재확인
//     if (reup.value != up.value) {
//         alert("재입력된 비밀번호가 틀립니다.");
//         reup.focus();
//         return false;
//     };

//     var reg_tel = /^[0-9]+$/g;
//     if (!reg_tel.test(ut.value)) {
//         alert("숫자만 입력하세요");
//         ut.focus();
//         return true;
//     }

//     if (!us.checked) {
//         alert("약관동의필요");
//         us.focus();
//         return true;
//     };

//     document.user_form.submit(); //버튼을 submit로 바꾸는것 유효성 검사 이후에 발생 하도록 설정
// }