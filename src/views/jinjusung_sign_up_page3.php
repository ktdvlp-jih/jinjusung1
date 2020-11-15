<?php include "../components/inc/session.php"; ?>

<?php
// if(!$s_idx){
//     echo "
//         <script type='text/javascript'>
//             alert(\"접근 불가한 페이지 입니다.\");            
//             history.back();
//         </script>
//     ";
//     return false;
// }
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 로그인화면</title>

    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sign_up_page3.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>



</head>

<body>

    <?php include "../components/layout/header.php"; ?>

    <!-- </nav> -->

    <div class="visual_img">

    </div>


    <section class="sign_page_wrap">
        <form action="../components/members/join_ok.php" class="sign_page" method="POST" name="user_form" id="user_form">
            <fieldset>
                <legend>회원가입</legend>

                <p>
                    <label for="uid">아이디</label>
                    <span class="pa_span4"><input type="text" class="p_input3" name="uid" id="uid" placeholder="아이디" title="아이디"></span>
                    <button class="s_button" type="button" onclick="search_addr()">중복확인</button>
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
                    <label for="uname">이름</label>
                    <span class="pa_span"><input type="text" class="p_input" name="uname" id="uname" placeholder="이름" title="이름"></span>
                </p>

                <p>
                    <label for="utel">전화번호</label>
                    <span class="pa_span"><input type="tel" class="p_input" name="utel" id="utel" placeholder="전화번호  ' - ' 없이 입력하시오" title="전화번호"></span>
                </p>
                <p>
                    <label for="uemail_id">이메일</label>
                    <span class="pa_span2"><input type="text" class="p_input2" name="uemail_id" id="uemail_id"></span>
                    <!-- <span class="gol">@</span> -->
                    <!-- <label for="user_email_2" id="em">나머지주소</label> -->
                    <span class="pa_span3"><input type="text" class="p_input2" name="uemail_dns" id="uemail_dns"></span>
                    <select class="s_button" name="uemail_sel" id="uemail_sel" onchange="change_email()">
                        <option value="직접입력">직접입력</option>
                        <option value="@naver.com">네이버</option>
                        <option value="@daum.net">다음</option>
                        <option value="@gmail.com">지메일</option>
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


                <p><button class="su_button" type="button" onclick="sign_form_check()">가입하기</button></p>
                <!-- <p><button type="button" onclick="idMessgeS()">회원가입 버튼</button></p> -->


                <!-- 버튼타입으로 하는 이유는 넘어가기전에 유효성 검사를 하기 위해서이다 -->
            </fieldset>
        </form>



    </section>
    <!--section1-->


    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sign_up_page3.js"></script>
</body>