<?php

include "../inc/sess.php";

$idx = $_GET["idx"];

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "delete from members where idx=$idx;";

// 쿼리 전송
mysqli_query($con, $sql);

// DB 종료
mysqli_close($con);

// 경로 변경
echo "
    <script type='text/javascript'>
    var q = confirm(\"삭제 하시겠습니까??\");
    if(q)
        alert('삭제되었습니다.');
        location.href='list.php';
    </script>
";
