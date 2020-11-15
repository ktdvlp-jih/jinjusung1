<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사이트맵</title>
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_site_map.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>


</head>

<body>

    <?php include "../components/layout/header.php"; ?>


    <section class="site_map_main_wrap">

        <div class="site_map_main">
            <h2>사이트맵</h2>
            <article>
                <h3>진주성 소개</h3>
                <p class=border_middle></p>
                <dl>
                    <dt><a href="#">진주성 이야기</a></dt>
                    <dd class="dd_padding_top"><a href="#">개요</a></dd>
                    <dd><a href="#">연혁</a></dd>
                    <dd><a href="#">관람안내</a></dd>
                </dl>

                <dl>
                    <dt><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub0_history.html">역사와 전설</a></dt>
                    <dd class="dd_padding_top"><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub0_history.html">인물</a></dd>
                    <dd><a href="#">전설</a></dd>
                    <dd><a href="#">역사</a></dd>
                </dl>

                <dl class="dl_last">
                    <dt><a href="#">진주성 탐방로</a></dt>
                </dl>

                <dl class="clear_both">
                    <dt><a href="#">한눈에보는 역사</a></dt>
                </dl>
            </article>

            <article>
                <h3>축제/체험</h3>
                <p class=border_middle></p>
                <dl class="dd_bar">
                    <dt><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub1_festival_representation.html">대표축제</a></dt>
                    <dd class="dd_padding_top"><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub1_festival_representation.html">진주남강유등축제</a></dd>
                    <dd><a href="#">개천예술제</a></dd>
                    <dd><a href="#">코리아 드라마 페스티벌</a></dd>
                    <dd><a href="#">진주민속 소싸움 대회</a></dd>
                    <dd><a href="#">진주국제농식품박람회</a></dd>
                    <dd><a href="#">진주논개제</a></dd>
                    <dd><a href="#">진주탈춤한마당</a></dd>
                </dl>

                <dl>
                    <dt><a href="#">문화예술체험</a></dt>
                    <dd class="dd_padding_top"><a href="#">유등체험관</a></dd>
                    <dd><a href="#">정수예수촌 체험</a></dd>
                    <dd><a href="#">진주 전통음식체험</a></dd>
                    <dd><a href="#">진주 목공예체험</a></dd>
                    <dd><a href="#">가뫼골 농촌 체험</a></dd>
                </dl>

            </article>

            <article>
                <h3>진주성 소개</h3>
                <p class=border_middle></p>
                <dl>
                    <dt><a href="#">공지사항</a> </dt>
                    <dd class="dd_padding_top"><a href="#">새소식</a></dd>
                    <dd><a href="#">관광지도 신청</a></dd>
                    <dd><a href="#">여행 질문하기(Q&A)</a></dd>
                    <dd><a href="#">자주찾는질문(FAQ)</a></dd>
                    <dd><a href="#">여행후기</a></dd>
                </dl>

                <dl>
                    <dt><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub2_participation_yard_text.html">자유게시판</a> </dt>
                </dl>

                <dl>
                    <dt><a href="#">자료실</a></dt>
                </dl>

                <dl class="clear_both">
                    <dt><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub2_participation_yard_photo.html">포토갤러리</a></dt>
                </dl>
            </article>

            <article>
                <h3>가이드</h3>
                <p class=border_middle></p>
                <dl>
                    <dt><a href="#">상세주소</a></dt>
                </dl>

                <dl>
                    <dt><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub3_guide_bus.html">교통안내</a></dt>
                    <dd class="dd_padding_top"><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub3_guide_bus.html">버스 &amp; 도보 </a></dd>
                    <dd><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub3_guide_car.html">자가용</a></dd>
                    <dd><a href="#">열차</a></dd>
                    <!-- <dd><a href="#">도보</a></dd> -->
                </dl>

                <dl>
                    <dt><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub3_guide_food.html">진주맛집</a></dt>
                    <dd class="dd_padding_top"><a href="http://gnsdlfjws.dothome.co.kr/jinjusung_sub3_guide_food.html">한식</a></dd>
                    <dd><a href="#">일식</a></dd>
                    <dd><a href="#">중식</a></dd>
                    <dd><a href="#">양식</a></dd>
                    <dd><a href="#">기타</a></dd>
                </dl>

                <dl>
                    <dt><a href="#">숙박</a></dt>
                    <dd class="dd_padding_top"><a href="#">호텔</a></dd>
                    <dd><a href="#">중저가 숙박시설</a></dd>
                    <dd><a href="#">일반 모텔,여관</a></dd>
                    <dd><a href="#">펜션,민박</a></dd>
                </dl>
            </article> <!-- <사이트맵4> -->
        </div>
    </section> <!-- 사이트맵 wrap -->

    <!-- 순서 1.로고 2.sns 3개인정보링크 4.사이트맵 5.p태그 -->

    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_site_map.js"></script>

</body>

</html>