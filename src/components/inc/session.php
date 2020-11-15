<?php
header('Content-Type: text/html; charset=UTF-8');
session_start();

$s_idx = isset($_SESSION["idx"]) ? $_SESSION["idx"] : "";
$s_uid = isset($_SESSION["uid"]) ? $_SESSION["uid"] : "";
$s_uname = isset($_SESSION["uname"]) ? $_SESSION["uname"] : "";

?>
<!-- <script>alert($s_idx)</script>
<script>alert($s_id)</script>
<script>alert($s_name)</script> -->