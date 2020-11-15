<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();

$s_idx = isset($_SESSION["idx"]) ? $_SESSION["idx"] : "";
$s_uid = isset($_SESSION["uid"]) ? $_SESSION["uid"] : "";
$s_uname = isset($_SESSION["uname"]) ? $_SESSION["uname"] : "";


if ($s_uid != "admin" || $s_idx != 1) {
    echo "
        <script type='text/javascript'>
            alert('관리자가 아닙니다.');
            location.href='./Applications/MAMP/htdocs/jinjusung1/src/views/jinjusung_main.phpphp';
        </script>
    ";
} else {
    echo "
        <script type='text/javascript'>
            // alert('관리자님 환영합니다.');
            // location.href='../index.php';
        </script>
    ";
};
