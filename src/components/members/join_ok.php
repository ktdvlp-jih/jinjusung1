<?php

//// 데이터 가져오기
// form method "post" : $_POST["데이터 입력 받을 필드의 name 값"];
// form method "get" : $_GET["데이터 입력 받을 필드의 name 값"];

$uid = $_POST["uid"];
$upw = $_POST["upw"];
$reupw = $_POST["reupw"];
$uname = $_POST["uname"];

$uemail_id = $_POST["uemail_id"];
$uemail_dns = $_POST["uemail_dns"];
$uemail = $uemail_id.$uemail_dns;

$uadd1 = $_POST["uadd1"];
$uadd2 = $_POST["uadd2"];
$uadd3 = $_POST["uadd3"];

$uadd = "우편 번호:".$uadd1.$uadd2.$uadd3;
$utel = $_POST["utel"];
$usns = $_POST["usns"];

// 날짜 연도 소문자y 대문자y 뜻이 다름 ex) y --> 2자리 , Y --> 4자리
// $ureg_date = date("y-m-d");
$ureg_date = date("Y-m-d");



//// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성

$sql = "insert into members(
    uid,upw,uname,uemail,utel,uadd,usns,ureg_date
    ) value(
        '$uid','$upw','$uname','$uemail','$utel','$uadd','$usns','$ureg_date'
    );";

//// 쿼리 전송
mysqli_query($con, $sql);


// DB 종료
mysqli_close($con);


// 경로 변경
echo "
    <script type='text/javascript'>
        alert(\"가입이 완료되었습니다\");
        location.href=\"../../views/jinjusung_sign_up_page.php\";
    </script>
";

?>







