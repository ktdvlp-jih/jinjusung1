$(document).ready(function() {



    // reload();
    // document.getElementById("s_vt").value="";
    // document.getElementsByTagName("body").reload();

});


//체크 해제할 라디오버튼 불러오기
var sur = document.getElementsByName("survey_radio");


function survey_submit() {

    for (var i = 0; i < sur.length; i++) {
        if (sur[i].checked)
        // var sur_v = sur[i].value;
            if (sur[i].value) {
            document.survey_form.submit(); //버튼을 submit로 바꾸는것 유효성 검사 이후에 발생 하도록 설정
            return false;

        }
    }
    alert("만족도를 체크안하셧습니다.")
}