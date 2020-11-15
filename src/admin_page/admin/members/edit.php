<?php

    include "../inc/sess.php";
    
    // 데이터 수정할 사용자 정보
    $idx = $_GET["idx"];

    // DB 연결
    include "../inc/dbcon.php";

    // 쿼리 작성
    $sql = "select * from members where idx=$idx;";

    // 쿼리 전송
    $result = mysqli_query($con, $sql);
    
    // DB에서 값 가져오기
    $array = mysqli_fetch_array($result);
    $uemail = explode("@", $array["uemail"]);
    
    // DB 종료
    mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원정보 수정</title>
    <style type="text/css">
        body,input,select,option,button{font-size:20px}
    </style>
    <script type="text/javascript">
        function edit_form_check(){
            // 객체 생성
            var upw = document.getElementById("upw");
            var reupw = document.getElementById("reupw");
                         
            if(upw.value.length > 0){
                if(upw.value.length<5 || upw.value.length>12){
                    alert("비밀번호는 6~12글자만 입력할 수 있습니다.");
                    upw.focus();
                    return false;
                };

                if(upw.value != reupw.value){
                    alert("비밀번호를 확인해 주세요.");
                    reupw.focus();
                    return false;
                };
            };
            
            document.edit_form.submit();
        };
        
        // 옵션 선택시 email_dns에 텍스트 출력
        function change_email(){
            var uemail_dns = document.getElementById("uemail_dns");
            var uemail_sel = document.getElementById("uemail_sel");
            
            var idx = uemail_sel.options.selectedIndex;
            var selected_value = uemail_sel.options[idx].value;
            uemail_dns.value = selected_value;
        };
        
    </script>
</head>
<body>
   <h2>관리자 페이지</h2>
    <p>
        안녕하세요. 관리자님 
        <a href="#none" onclick="logout_check()">로그아웃</a>
    </p>
    <p>
        <a href="../admin.php">처음으로</a>
        <a href="list.php">회원관리</a>
        <!--<a href="../notice/list.php">공지사항 관리</a>-->
        <a href="#none">공지사항 관리</a>
    </p>
    <hr>
    <form name="edit_form" action="edit_ok.php" method="post">
        <fieldset>
            <legend>회원정보 수정</legend>
            <p>
                이름 : <?php echo $array["uname"];?>
            </p>
            <p>
                아이디 : <?php echo $array["uid"];?>
                <input type="hidden" name="idx" value="<?php echo $idx;?>">
            </p>
            <p>
                <label for="upw">비밀번호</label>
                <input type="password" name="pwd" id="upw">
            </p>
            <p>
                <label for="reupw">비밀번호 확인</label>
                <input type="password" name="reupw" id="reupw">
            </p>
            <p>
                <label for="uemail_id">이메일</label>
                <input type="text" name="uemail_id" id="uemail_id" value="<?php echo $email[0] ?>"> @ 
                <input type="text" name="uemail_dns" id="uemail_dns" value="<?php echo $email[1] ?>"> 
                <select name="uemail_sel" id="uemail_sel" onchange="change_email()">
                    <option value="">직접입력</option>
                    <option value="naver.com">네이버</option>
                    <option value="hanmail.net">다음</option>
                    <option value="gmail.com">지메일</option>
                </select>
            </p>
            <p>
                <label for="utel">전화번호</label>
                <input type="text" name="utel" id="utel" value="<?php echo  $array["utel"]; ?>">
            </p>
            <p>
                <button type="button" onclick="history.back()">이전으로</button>
                <button type="button" onclick="edit_form_check()">수정하기</button>
            </p>
        </fieldset>
    </form>
</body>
</html>
