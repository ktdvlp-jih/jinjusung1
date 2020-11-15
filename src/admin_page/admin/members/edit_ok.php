<?php

// echo $_GET["idx"];
// echo $_POST["mobile"];
// echo $_POST["idx"];
// return false;

include "../inc/sess.php";

// 데이터 가져오기
$idx =  $_POST["idx"];
$upw = $_POST["upw"];
$uemail = $_POST["uemail_id"]."@".$_POST["uemail_dns"];
$utel = $_POST["utel"];
    
// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
if(!$upw){ // 비밀번호를 입력하지 않은 경우
    $sql = "update members set uemail='$uemail', utel='$utel' where idx=$idx;";
} else{ // 비밀번호도 입력한 경우
    $sql = "update members set upw='$upw', uemail='$uemail', utel='$utel' where idx=$idx;";
};

// 쿼리 전송
mysqli_query($con, $sql);


// DB 종료
mysqli_close($con);


// 경로 변경
echo "
    <script type='text/javascript'>
        alert('정보가 수정되었습니다.');
        location.href='view.php?idx=$idx';
    </script>
";

?>










