<?php include "../components/inc/session.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 로그인화면</title>

    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sign_up_page.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>


</head>

<body>


    <?php include "../components/layout/header.php"; ?>
    <!-- </nav> -->

    <section class="login_page_wrap">
        <aside class="login_page">
            <h2>로그인</h2>
            <form action="../components/members/login_ok.php" name="login_form" id="login_form" method="POST">
                <fieldset>
                    <legend>로그인 페이지</legend>
                    <ul>
                        <li class="float_left1"><label for="uid"><span>아이디</span></label><input type="text" name="uid" id="uid" placeholder="아이디"></li>
                        <li class="float_left1"><label for="upw"><span>비밀번호</span></label><input type="password" name="upw" id="upw" placeholder="비밀번호"></li>
                        <li class="float_left1"><label for="ulogin"><span>로그인</span></label>
                            <input type="button" value="로그인" name="ulogin" id="ulogin" onclick="login_form_check()"></li>

                        <li class="float_left1"><label for="ucheck"></label>
                            <input type="checkbox" name="ucheck" id="ucheck" class="login_checkbox"><strong class="strong_span">로그인 상태 유지</strong></li>
                    </ul>
                </fieldset>
            </form>
            <ul class="login_menu">
                <li><a href="#">아이디 찾기</a></li>
                <li class="login_menu_li_left"><a href="#">비밀번호 찾기</a></li>
                <li class="login_menu_li_left"><a href="jinjusung_sign_up_page2.php">회원가입</a></li>
            </ul>

        </aside>
    </section>
    <!--section1-->


    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sign_up_page.js"></script>
</body>