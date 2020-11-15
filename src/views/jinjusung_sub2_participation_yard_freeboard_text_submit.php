<?php

//// DB 연결
include "../components/inc/dbcon.php";
include "../components/inc/session.php";

// $idx = $_POST["idx"];
$title = $_POST["title"];
$contents = $_POST["contents"];
$file = $_POST["file"];
// $uwrite = $_POST["uwrite"];

if (!$_POST["pwd"]) {
    $pwd = NULL;
}

if (!$_POST["file"]) {
    $pwd = NULL;
}

// 날짜 연도 소문자y 대문자y 뜻이 다름 ex) y --> 2자리 , Y --> 4자리
// $ureg_date = date("y-m-d");
$reg_date = date("Y-m-d");
$count = 0;




// 쿼리 작성
// 비밀번호 삭제 했으니 새로 쿼리작성함
// $sql = "insert into freeboard(uwrite,title,contents,reg_date,count,pwd) value('$s_uname','$title','$contents','$reg_date',$count,'$pwd')";
$sql = "insert into freeboard(uwrite,title,contents,reg_date,count) value('$s_uname','$title','$contents','$reg_date',$count)";
// echo $s_uname . " ";
// echo $title . " ";
// echo $contents . " ";
// echo $file . " ";
// echo $pwd . " ";
// echo $reg_date . " ";
// echo $count . " ";
// echo $sql;




//// 쿼리 전송
mysqli_query($con, $sql);


// DB 종료
// mysqli_close($con);


// 경로 변경
echo "
    <script type='text/javascript'>
        alert(\"등록되었습니다.\");
        location.href=\"../../src/views/jinjusung_sub2_participation_yard_freeboard.php\";
    </script>
";
