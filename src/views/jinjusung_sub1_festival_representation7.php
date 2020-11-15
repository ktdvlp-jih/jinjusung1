<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 축제/체험</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=c28l131ly8"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub1_festival_representation7.css">
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
                        <p><span>축제/체험</span><span>대표축제</span>진주탈춤한마당</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_festival_representation7/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_festival_representation7/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_festival_representation7/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_festival_representation7/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_festival_representation7/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_festival_representation7/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_festival_representation7/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>진주탈춤한마당</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>매년 5월 넷째주 금,토,일 (3일간)</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>진주시 관광진흥과 축제팀</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>경기장 맞은편 꿈키움동산 주차가능</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-749-5322</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>강남로 215 (칠암동) 경남문화예술회관 앞 야외무대 </p>
                                </li>
                                <li><span>이&nbsp;용&nbsp;료</span>
                                    <p>전화문의</p>
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

                                    <p>○ 축제내용 : 한국전통탈춤, 창작탈춤, 농악, 마당극, 대동굿, 학술행사, 창작탈 전시회, 시민참여마당 및 체험행사</p>
                                    <p>○ 최초개최년도 : 1996년</p>
                                    <p>○ 장소 : 남강야외무대 일원</p>
                                    <p>○ 참석인원 : 1,000명</p>
                                    <p>○ 주요 행사 내용</p>
                                    <p>진주탈춤한마당 제전위원회는 순수민간의 힘으로 전승탈춤의 계승과 창조, 전통예술의 대중화와 현대화를 목적으로 1996년에 진주탈춤한마당을
                                        개최하였다.</p>
                                    <p>진주탈춤한마당 제전위원회는 전국의 민속학자, 전문기획자 및 예술가 그리고 문화, 교육 등 다양한 인사들로 구성되어 있는 단체이다. 또한
                                        제전위원회에서는
                                        60여 년 동안 단절되었던 진주오광대를 복원함으로써 지역문화의 정체성 확립과 진주탈춤한마당의 개최의미를 높였다.</p>
                                    <p>진주탈춤한마당은 1996년을 시작으로 2007년부터 10주년을 맞아 '동아시아탈춤축전' 국제행사로 도약 자리 잡은 축제이다. 그리고
                                        안동국제탈춤페스티벌, 양주세계민속극축제 등 전국의 탈춤축제들이 진주탈춤한마당을 기반으로 만들어진 축제들이다.</p>

                                    <p>- 위령굿 : 임진계사년 8만 순국선열을 위하여 남해안별신굿으로 씻김 하는 열림굿</p>
                                    <p>- 한국탈춤공연 : 국내 지정무형문화재 및 비지정 탈춤공연</p>
                                    <p>- 창작탈춤 및 마당극공연 : 전승탈춤을 토대로 시대에 맞게 새롭게 제작한 창작공연</p>
                                    <p>- 특별공연 : 주제에 맞는 작품을 선정한 특별한 주제공연</p>
                                    <p>- 축하공연 : 주제와 관련된 인접장르의 다양한 공연</p>
                                    <p>- 창작 대동굿 : 지역의 정체성을 담아 창작된 현대적 대동놀이로 매년 주제를 달리하여 시민들과 함께하는 대동굿판.</p>
                                    <p>- 설치미술 : 행사를 상징하는 조형물 ‘탈 탑’</p>
                                    <p>- 시민참여행사 : 탈춤 무료 강습, 탈 만들기, 탈 탁본찍기, 탈 페이스페인팅, 탈모양 천연비누만들기, 탈 캐릭터 버튼 만들기, 꼬마솟대
                                        만들기, 탈
                                        포토존 등 다양한 시민참여마당</p>

                                    <p>- 학술행사 : 학술과 예술의 만남 ‘학예굿’, 주제와 관련된 학술강연과 시연공연</p>
                                    <p>- 창작탈 전시회</p>

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
    <script type="text/javascript" src="../../dist/js/jinjusung_sub1_festival_representation7.js"></script>
</body>

</html>