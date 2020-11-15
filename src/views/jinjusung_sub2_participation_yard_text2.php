<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 참여마당 공지사항 관광지도 신청</title>
    <script>
    </script>

    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub2_participation_yard_text.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>

</head>

<body>

    <?php include "../components/layout/header.php"; ?>

    <section class="section1_bg">
        <h2 class="section1_box">참여마당</h2>
    </section>

    <section class="section2_wrap">
        <div class="section2">
            <div class="section2_snb">
                <dl>
                    <?php include "../components/layout/sub2_2.php"; ?>
                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>참여마당</h3>
                        <p><span>참여마당</span><span>공지사항</span>여행 질문하기(Q&amp;A)</p>
                    </div>
                </div>
                <div class="section2_line"></div>

                <div class="article_box">
                    <form action="" method="GET" name="form_box" id="form_box">
                        <fieldset class="form_fieldset">
                            <legend>글쓰기 폼</legend>
                            <p><label for="form_title"></label><input type="text" name="form_title" id="form_title" placeholder="제목"></p>

                            <p><label for="form_pw_checkbox" class="form_pw_checkbox">비밀글</label><input type="checkbox" name="form_pw_checkbox" id="form_pw_checkbox" onclick="checkbox_in()"></p>

                            <p><label for="form_pw"></label> <input type="password" name="form_pw" id="form_pw" class="form_pw" placeholder="비밀번호"></p>

                            <p><label for="form_text"></label><textarea name="form_text" id="form_text" cols="30" rows="10" placeholder="문의내용"></textarea></p>

                            <p><label for="form_file_upload"></label><input type="file" name="form_file_upload" id="form_file_upload" placeholder="첨부파일"></p>

                            <p><label for="button_s"></label><button type="submit" id="button_s">확인</button></p>

                            <p><label for="button_l"></label><button type="button" id="button_l">목록</button></p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <?php include "../components/layout/survey_form.php"; ?>
    </section>

    <?php include "../components/layout/footer.php"; ?>

    <script type="text/javascript" src="../../dist/js/jinjusung_sub2_participation_yard_text.js"></script>
</body>

</html>