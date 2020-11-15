<?php

// 세션 활성화
include "../inc/session.php";

// 세션 값 처리 & 데이터 가져오기

// 로그인 하지 않은 사용자 접근 시 페이지 변경
if (!$s_idx) {
    echo "
            <script type='text/javascript'>
                alert('로그인 사용자만 접근할 수 있습니다.');
                location.href='../../views/jinjusung_sign_up_page.php';
            </script>
        ";
    return false;
}


// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from members where idx='$s_idx';";
// echo "select * from members where idx='$s_idx';";
// return false;

// 쿼리 전송
$result = mysqli_query($con, $sql);

// DB에서 값 가져오기
$array = mysqli_fetch_array($result);
// 값 분할(텍스트 분리)
// explode("구분기호", "분리할 문자열");
// 구분 기호 기준으로 배열형태로 분리
// ex) 문자열이 010-1111-2222
// $mobile = explode("-", "010-1111-2222");
// 첫 번째 값 : $mobile[0] = 010
// 두 번째 값 : $mobile[1] = 1111
// 세 번째 값 : $mobile[2] = 2222
$uemail = explode("@", $array["uemail"]);
// echo $email[0]."/".$email[1];

// DB 종료
// mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>정보수정</title>
    <style type="text/css">
        body,
        input,
        select,
        option,
        button {
            font-size: 20px
        }
    </style>
    <script type="text/javascript">
        function edit_form_check() {
            // 객체 생성
            var upw = document.getElementById("upw");
            var reupw = document.getElementById("reupw");

            if (upw.value.length > 0) {
                if (upw.value.length < 5 || upw.value.length > 12) {
                    alert("비밀번호는 6~12글자만 입력할 수 있습니다.");
                    upw.focus();
                    return false;
                };

                if (upw.value != reupw.value) {
                    alert("비밀번호를 확인해 주세요.");
                    reupw.focus();
                    return false;
                };
            };

            document.edit_form.submit();
        };

        function del_con(){
            var i = confirm("정말 탈퇴하시겠습니까?");
            
            if(i){
                // 방법 1. 페이지 이동 후 delete.php에서 값 생성
                location.href = "./delete.php";
                
                // 방법 2. delete.php에 idx값을 GET 방식으로 전송
                // location.href = "delete.php?idx=<?php echo $s_idx;?>";
            };
        };

        // 옵션 선택시 email_dns에 텍스트 출력
        function change_email() {
            var uemail_dns = document.getElementById("uemail_dns");
            var uemail_sel = document.getElementById("uemail_sel");

            var idx = uemail_sel.options.selectedIndex;
            var selected_value = uemail_sel.options[idx].value;
            uemail_dns.value = selected_value;
        };
    </script>
</head>

<body>
    <form name="edit_form" action="edit_ok.php" method="post">
        <fieldset>
            <legend>정보수정</legend>

            <p>
                <label for="uid">아이디</label>
                <span> <?php echo $array["uid"]; ?> </span>
            </p>
            <p>
                <label for="uname">이름</label>
                <span> <?php echo $array["uname"]; ?> </span>
            </p>
            <p>
                <label for="upw">비밀번호</label>
                <span class="pa_span"><input type="password" class="p_input" name="upw" id="upw" placeholder="비밀번호" title="비밀번호"></span>
            </p>
            <p>
                <label for="reupw">비밀번호확인</label>
                <span class="pa_span"><input type="password" class="p_input" name="reupw" id="reupw" placeholder="비밀번호확인" title="비밀번호확인"></span>
            </p>

            <p>
                <label for="utel">전화번호</label>
                <span class="pa_span"><input type="tel" class="p_input" name="utel" id="utel" placeholder="전화번호  ' - ' 없이 입력하시오" title="전화번호" value=""></span>
                <input type="text" name="mobile" id="mobile" value="<?php echo $array["utel"];?>">
            </p>
            <p>
                <label for="uemail_id">이메일</label>
                <span class="pa_span2"><input type="text" class="p_input2" name="uemail_id" id="uemail_id" value="<?php echo $uemail[0];?>"></span>@
                <!-- <span class="gol">@</span> -->
                <!-- <label for="user_email_2" id="em">나머지주소</label> -->
                <span class="pa_span3"><input type="text" class="p_input2" name="uemail_dns" id="uemail_dns" value="<?php echo $uemail[1];?>"></span>
                <select class="s_button" name="uemail_sel" id="uemail_sel" onchange="change_email()">
                    <option value="직접입력">직접입력</option>
                    <option value="naver.com">네이버</option>
                    <option value="daum.net">다음</option>
                    <option value="gmail.com">지메일</option>
                </select>
            </p>


            <p>
                <label for="uadd1">주소</label>
                <span class="pa_span2"><input type="text" class="p_input2" name="uadd1" id="uadd1" placeholder="우편번호" title="우편번호"></span>
                <span class="pa_span3"> <input type="text" class="p_input2" name="uadd2" id="uadd2" placeholder="주소" title="주소"> </span>
                <button class="a_button" type="button" onclick="address_check()">주소검색</button>
            </p>
            <p>
                <label for="uadd3">상세주소</label>
                <span class="pa_span"><input class="p_input" type="text" name="uadd3" id="uadd3" placeholder="상세주소" title="상세주소"></span>
            </p>
            <p>
                <label for="usns" class="float_left1">sns수신동의</label> <input type="checkbox" name="usns" id="usns" title="sns">
            </p>


            <p>
                <button class="su_button" type="button" onclick="history.back()">이전</button>
                <button class="su_button" type="button" onclick="edit_form_check()">수정</button>
                <button class="su_button" type="button" onclick="del_con()">회원탈퇴</button>
            </p>

            <!-- <p><button type="button" onclick="idMessgeS()">회원가입 버튼</button></p> -->


            <!-- 버튼타입으로 하는 이유는 넘어가기전에 유효성 검사를 하기 위해서이다 -->
        </fieldset>
    </form>
</body>

</html>