<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 축제/체험</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=c28l131ly8"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub1_festival_representation5.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>

</head>

<body>

    <?php include "../components/layout/header.php"; ?>

    <section class="section1_bg">
        <h2 class="section1_box">축제체험</h2>
    </section>


    <section class="section2_wrap">
        <div class="section2">
            <div class="section2_snb">
                <dl>
                    <dt class="section2_snb_menu"><span class="section2_snb_logo">section2_snb_logo</span>
                        <p>축제/체험</p>
                    </dt>

                    <?php
                    include "../components/layout/sub1_f.php"
                    ?>
                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>축제/체험</h3>
                        <p><span>축제/체험</span><span>대표축제</span>진주국제농식품박람회</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_festival_representation5/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_festival_representation5/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_festival_representation5/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_festival_representation5/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_festival_representation5/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_festival_representation5/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_festival_representation5/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>진주국제농식품박람회</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>2020-11-04 ~ 2020-11-08</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>진주국제농식품박람회사무국</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>주변 임시주차장 사용</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-749-6111</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>동진로 415 진주종합경기장</p>
                                </li>
                                <li><span>이&nbsp;용&nbsp;료</span>
                                    <p>전화문의 또는 홈페이지 참고</p>
                                </li>
                            </ul>
                        </div>

                        <div class="section2_information_menu">
                            <h2>4가지 정보</h2>
                            <ul class="section2_information_ul_menu">

                                <li><button type="button" class="content_bar2" id="inid1" onclick="changeButton1()">상세정보</button></li>
                                <li><button type="button" class="content_bar2" id="inid2" onclick="changeButton2()">주변정보</button></li>
                                <li><button type="button" class="content_bar2" id="inid3" onclick="changeButton3()">별점</button></li>
                                <li><button type="button" class="content_bar2" id="inid4" onclick="changeButton4()">블로그리뷰</button></li>
                                <!-- <li><a href="#" class="content_bar2" id="inid2">주변정보</a></li>
                                    <li><a href="#" class="content_bar2" id="inid3">별점</a></li>
                                    <li><a href="#" class="content_bar2" id="inid4">블로그리뷰</a></li> -->
                            </ul>



                            <ul class="section2_information_ul_information">
                                <li class="ul_information1" id="ul_information1" title="상세내용">

                                    <p>○ 축제내용 : 2020년 진주국제농식품박람회</p>

                                    <p>○ 축제종류 : 농식품박람회</p>

                                    <p>○ 규모 : 20개국 250개사 500부스</p>

                                    <p>○ 참가인원 : 28만명 (2019년)</p>


                                    <p>○ 주요내용 : 농기자재·농식품·토종종자 전시, 수출상담회, 체험행사 등</p>

                                    <p>○ 주최/주관 : 경상남도, 진주시</p>
                                    <p>
                                        ○ 후원 : 농림축산식품부, 농촌진흥청, 국립농산물품질관리원, 농업기술실용화재단, 한국관광공사, 한국농어촌공사, 한국농수산식품유통공사,
                                        대한무역투자진흥공사, 국립경상대학교, 국립경남과학기술대학교, 한국국제대학교, 우유자조금관리위원회, 농협진주시지부, 진주시조합운영협의회,
                                        진주축산업협동조합</p>

                                    <p>○ 주요행사내용 진주국제농식품박람회는 2011년 첫 회를 시작으로 농업에 과학을 접목한 기존 농업박람회에 식품·축산분야 전시와 체험을 추가하면서 농업의
                                        과학화와 산업화에 큰 역할을 해오고 있으며, 세계시장 개방화에 따라 어려움에 처해있는 우리농업의 현실과 미래농업의 발전방향을 제시하는 공간을 마련하고
                                        도시민에게는 첨단농업 기술전시와 농업을 이해할 수 있는 체험형 박람회로 운영하고 있습니다.</p>

                                    <p>○ 동반행사 : 수출상담회, 토종농산물 종자전시회</p>

                                    <p>○ 전시관</p>
                                    <p>- 농기자재관 : 대형·소형 농기계 전시, 농업용 드론,무인헬기 전시, 바이오 산업,비료,농약 등 농자재 전시</p>
                                    <p>- 농업홍보관 : 경상남도·진주시·지역대학 홍보관 운영, 농업기술 전시 및 체험</p>
                                    <p>- 녹색식품관 : 경남·남해안남중권 우수 농식품 전시, 경남벤처농업 우수사례 전시</p>
                                    <p>- 해외관 : 해외 농식품·문화 특별 전시, 경남 수출 유망 농식품 전시 및 비즈니스센터 운영</p>
                                    <p>- 종자생명관 : 종자의 중요성·미래식량 확보 이해 공간 조성, 종자 활용 작품 전시 및 체험</p>
                                    <p>- 체험관 : 농촌교육농장 체험, 농업 체험 프로그램 운영</p>
                                    <p>- 펫 체험관 : 펫 관련 동물 교육·체험, 가축동물 체험</p>

                                    <p>○ 부대행사/특별행사 : 도심 속 목장 나들이, 문화예술 페스티벌, 먹거리 장터, 문화공연</p>

                                </li>

                                <!-- ul_information2 이건 일단 구현 미정 -->
                                <li class="ul_information2" id="map" title="주변내용">
                                    <!-- <ul>
                                        <li><a href="#">전체</a></li>
                                        <li><a href="#">관광지</a></li>
                                        <li><a href="#">음식</a></li>
                                        <li><a href="#">숙박</a></li>
                                        <li><a href="#">쇼핑</a></li>
                                    </ul> -->
                                </li>

                                <li class="ul_information3" id="ul_information3" title="별점 내용"><span>별점</span></li>

                                <li class="ul_information4" id="ul_information4" title="블로그리뷰 내용">
                                    <ul class="blog_review_information">
                                        <li class="blog_review1"><a href="#">블로그리뷰1</a></li>
                                        <li class="blog_review2"><a href="#">블로그리뷰2</a></li>
                                        <li class="blog_review3"><a href="#">블로그리뷰3</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </article>

            </div>
        </div>

        <?php include "../components/layout/survey_form.php"; ?>

    </section>

    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sub1_festival_representation5.js"></script>
</body>

</html>