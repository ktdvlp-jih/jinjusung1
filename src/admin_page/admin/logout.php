<?php
    session_start();

    // 세션 삭제 : unset(세션변수);
    unset($_SESSION["uid"]);
    unset($_SESSION["uname"]);
    unset($_SESSION["idx"]);

    echo "
        <script type='text/javascript'>
            alert('로그아웃 되었습니다.');
            location.href=\"./login.php\";
        </script>
    ";
?>