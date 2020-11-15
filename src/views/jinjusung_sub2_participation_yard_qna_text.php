<?php include "../components/inc/session.php"; ?>
<?php include "../components/inc/dbcon.php"; ?>


<?php

//게시판에 글을 쓰기 위해서 아이디가 필요
if (!$s_uid) {
    echo "
            <script>
                alert('로그인이 필요합니다');
                location.href=\"jinjusung_sign_up_page.php\";
                
            </script>
        ";
}

?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 참여마당 공지사항 자유게시판</title>
    <script>
    </script>

    <!-- <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub2_participation_yard_text1.css"> -->
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub2_participation_yard_freeboard_text.css">
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
                    <dt class="section2_snb_menu"><span class="section2_snb_logo">section2_snb_logo</span>
                        <p>참여마당</p>
                    </dt>
                    <?php include "../components/layout/sub2_1.php"; ?>
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
                    <form action="jinjusung_sub2_participation_yard_qna_text_submit.php" method="POST" name="form_box" id="form_box">
                        <fieldset class="form_fieldset">
                            <legend>글쓰기 폼</legend>
                            <p><label for="title"></label><input class="title" type="text" name="title" id="title" placeholder="제목"></p>


                            <p><label for="contents"></label><textarea class="contents" name="contents" id="contents" cols="30" rows="10" placeholder="문의내용"></textarea></p>

                            <p><label for="file"></label><input class="file" type="file" name="file" id="file" placeholder="첨부파일"></p>

                            <p><label for="button_s"></label><button class="button_s" type="button" id="button_s" onclick="form_check()">확인</button></p>

                            <p><label for="button_l"></label><button class="button_l" type="button" id="button_l" onclick="history.back()">목록</button></p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <?php include "../components/layout/survey_form.php"; ?>
    </section>

    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sub2_participation_yard_qna.js"></script>


</body>

</html>