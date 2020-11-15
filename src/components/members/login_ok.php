<?php
session_start();

// 이전 페이지에서 데이터 가져오기
$idx = $_POST["idx"];
$uid = $_POST["uid"];
$upw = $_POST["upw"];

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
// $sql = "select idx, uname, uid, upw from members where uid='$uid';";
$sql = "select * from members where uid='$uid';";

// echo $sql;
// return false;

// 쿼리 전송
$result = mysqli_query($con, $sql);

// DB에서 값 가져오기
$array = mysqli_fetch_array($result);
// $row = mysqli_fetch_row($result);

// 값 출력 테스트
// echo $array["uid"]."/".$array["pwd"]."/".$array["uname"];
// echo $row[0]."/".$row[1]."/".$row[2];

// 아이디 검사
if ($uid  != $array["uid"]) { // 아이디가 존재하지 않는다면
    echo "
        <script type='text/javascript'>
            alert(\"일치하는 아이디가 없습니다.uidx\");
            history.back();
            // return false;
        </script>
        
    ";
    return false;
} else { // 아이디가 존재한다면
    // 비밀번호 검사
    if ($upw  != $array["upw"]) {
        echo "
            <script type='text/javascript'>
                alert(\"비밀번호가 일치하지 않습니다.upwx\");
                history.back();
                // return false;
            </script>
        ";
        return false;
    };
};

$_SESSION["idx"] = $array["idx"];
$_SESSION["uid"] = $array["uid"];
$_SESSION["uname"] = $array["uname"];

$a1 = $_SESSION["idx"];
$a2 = $_SESSION["uid"];


// $_SESSION["idx"];
// $_SESSION["uid"];
// $_SESSION["uname"];
// /Applications/MAMP/htdocs/jinjusung1/src/admin_page/index.php
// src/admin_page/index.php

if ($a1 == 1 && $a2 == "admin") {
    echo "
    <script type='text/javascript'>
        alert('관리자로 로그인 되었습니다.');
        location.href=\"../../admin_page/admin/admin.php\ \"
        // return false;
    </script>
    ";
} else {
    echo "
    <script type='text/javascript'>
        alert('로그인 되었습니다!!.');
        // location.href=\"../../views/jinjusung_main.php\"
        // location.href=\"jinjusung1/src/admin_page/index.php#none.ㅔㅗㅔ\"
        location.href=\"../../views/jinjusung_main.php\"
        // return false;
    </script>
    ";
};
?>
<!-- http://localhost:8888/jinjusung1/src/views/jinjusung_sign_up_page.php -->
<!-- <script type='text/javascript'>
        alert('로그인 되었습니다.');
        if($_SESSION{['uid']}== 'admin' || $_SESSION{['idx']} ==1 ){
            location.href=\"../../views/jinjusung_main.php\"
            // location.href='../src/admin_page/index.php';
        }else{
            // location.href=\"../../views/jinjusung_main.php\"
        }
    </script> -->