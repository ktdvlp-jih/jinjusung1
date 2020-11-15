<?php 
    include "inc/session_admin.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>관리자 페이지</title>
    <style type="text/css">
        body{font-size:20px}
    </style>
    <script type="text/javascript">
        function logout_check(){
            var q = confirm("정말 로그아웃하시겠습니까?");
            
            if(q){
                location.href="../admin/logout.php";
            };
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
        <a href="members/list.php">회원관리</a>
        <!--<a href="notice/list.php">공지사항 관리</a>-->
        <a href="#none">공지사항 관리</a>
    </p>
</body>
</html>










