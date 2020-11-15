<?php
// 세션 활성화
include "../inc/session.php";



// 데이터 가져오기
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

    
// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
if(!$upw){ // 비밀번호를 입력하지 않은 경우
    $sql = "update members set uemail='$uemail', utel='$utel' where idx=$s_idx;";
} else{ // 비밀번호도 입력한 경우
    $sql = "update members set upw='$upw', uemail='$uemail', utel='$utel' where idx=$s_idx;";
};

// 쿼리 전송

$result = mysqli_query($con, $sql);
mysqli_query($con, $sql);


// DB 종료
mysqli_close($con);


// 경로 변경
// echo "
//     <script type='text/javascript'>
//         alert('정보가 수정되었습니다.');
//         location.href='edit_comp.html';
//     </script>
// ";

echo "
    <script type='text/javascript'>
        alert(\"정보가 수정되었습니다\");
        location.href=\"../../views/jinjusung_main.php\";
    </script>
";

?>










