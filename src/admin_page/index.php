<?php include "admin/inc/session_admin.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>인덱스</title>
    <style type="text/css">
        body {
            font-size: 20px
        }
    </style>
    <script type="text/javascript">
        function logout_check() {
            var q = confirm("정말 로그아웃하시겠습니까?");

            if (q) {
                location.href = "admin/logout.php";
            };
        };
    </script>
</head>



<body>
    <h2>관리자</h2>
    <p>
        <?php
        // echo "asdsad";
        if (!$s_uid) {
            echo "<a href=\"admin/login.php\">로그인</a> ";
            // echo "<a href=\"members/join.html\">회원가입</a> ";
        } else {
            if ($s_uid == "admin" || $s_idx == 1) { // 관리자 로그인
                echo "<p>" . $s_uname . "님, 안녕하세요.</p>";
                echo "<p><a href=\"admin/admin.php\">[관리자 페이지로]</a></p>";
                echo "<a href=\"#none\" onclick=\"logout_check()\">로그아웃</a> ";
                echo "</p>";
            } else { // 일반 사용자 로그인
                unset($_SESSION["uid"]);
                unset($_SESSION["uname"]);
                unset($_SESSION["idx"]);

                echo "
                <script type='text/javascript'>
                    alert(\"관리자로 로그인 하십시오.\");
                    // location.replace=\"../.php\"{
                </script>}
                ";
            }

            // echo "<a href=\"members/edit.php\">정보수정</a>";
        }
        ?>
        <!-- <a href="#">사이트맵</a> -->
        <!-- <a href="http://localhost:8888/jinjusung1/src/views/jinjusung_site_map.php">사이트맵</a> -->
        <!-- <a href="/jinjusung1/src/views/jinjusung_site_map.php">사이트맵</a> -->
        <!-- <a href="../jinjusung1/src/views/jinjusung_site_map.php">사이트맵</a> -->
        <!-- <a href="../../src/views/jinjusung_site_map.php">사이트맵</a>
        <a href="http://www.naver.com">사이트맵</a> -->


    </p>
</body>

</html>