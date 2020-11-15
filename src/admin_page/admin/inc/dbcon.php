<?php

// header('Content-Type: text/html; charset=UTF-8');
$con = mysqli_connect("localhost", "gnsdlfjws","VKzlgha78!") or die("DB접속불가");
mysqli_set_charset($con, "utf8");
mysqli_select_db($con, "gnsdlfjws");

// $con = mysqli_connect("localhost", "root","root!") or die("DB접속불가");
// mysqli_set_charset($con, "utf8");
// mysqli_select_db($con, "root");



// $str = "테스트";
// $encode = array('ASCII','UTF-8','EUC-KR');
// $str_encode = mb_detect_encoding($str, $encode);
// if(strtoupper($str_encode) == 'UTF-8') {
// echo 'UTF-8 입니다';
// }

// mb_detect_encoding($str, 'EUC-KR,UTF-8');
// mb_detect_encoding($str, 'auto'); // 자동 감지
// mb_detect_encoding($str, array('EUC-KR','UTF-8'));

// default-character-set = utf8
// default-character-set = utf8

// $con = mysqli_connect("localhost", "root","root") or die("DB접속불가");
//  mysqli_select_db($con, "testdb");

?>