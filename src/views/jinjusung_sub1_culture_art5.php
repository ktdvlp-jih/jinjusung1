<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 축제/체험</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=c28l131ly8"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub1_culture_art.css">
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
                    include "../components/layout/sub1_c.php"
                    ?>
                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>축제/체험</h3>
                        <p><span>축제/체험</span><span>문화예술체험</span>가뫼골농촌 체험</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_culture_art5/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_culture_art5/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_culture_art5/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_culture_art5/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_culture_art5/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_culture_art5/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_culture_art5/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>가뫼골농촌체험휴양마을</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>전화문의 또는 홈페이지 참고</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>개인</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>전화문의 또는 홈페이지 참고</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-746-2214</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>명석면 관덕길 174</p>
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
                                <li><button type="button" class="content_bar2" id="inid3" onclick="changeButton3()">별점</button>
                                </li>
                                <li><button type="button" class="content_bar2" id="inid4" onclick="changeButton4()">블로그리뷰</button></li>
                                <!-- <li><a href="#" class="content_bar2" id="inid2">주변정보</a></li>
                                    <li><a href="#" class="content_bar2" id="inid3">별점</a></li>
                                    <li><a href="#" class="content_bar2" id="inid4">블로그리뷰</a></li> -->
                            </ul>



                            <ul class="section2_information_ul_information">
                                <li class="ul_information1" id="ul_information1" title="상세내용">
                                    <p>
                                        <p>* 주요체험 : 원예체험, 팜스테이, 신토불이 농산물을 이용한 우리 먹거리 만들기(손두부, 인절미, 감 초코파이 등) </p>
                                        <p>* 연계관광지: 광제산(전국 최고의 토종 소나무 숲으로 된 총 연장 20㎞의 웰빙 등산로), </p>
                                        <p>광제골 고려고분군, 여울당, 소석원, 광제산 봉수대, 집현산, 광제서원,
                                            진주목공예전수관, 용호정원</p>


                                        <p class="content_bar3">○ 단감피자만들기</p>
                                        <p>- 체험내용 : 지역농산물인 곶감 감말랭이를 이용하여 직접 도우를 펴서 여러 맛있게 구워보는 체험</p>
                                        <p>- 운영기간 ; 연중</p>
                                        <p>- 금액 : 10,000원</p>
                                        <p>※ 개인4명, 단체10명</p>

                                        <p class="content_bar3">○ 떡매치기</p>
                                        <p>- 체험내용 : 우리마을에서 재배한 찹쌀로 찰밥을 지어 떡매치기하여 콩가루를 입혀 인절미, 눈꽃빙수를 만들어보는 체험</p>
                                        <p>- 운영기간 ; 연중</p>
                                        <p>- 금액 : 10,000원</p>
                                        <p>※ 10인 이상</p>

                                        <p class="content_bar3">○ 두부만들기</p>
                                        <p>- 체험내용 : 옛날방식의 두부만들기 과정을 익혀보고 맷돌을 돌려 보며 함께 두부를 만들어 먹고들고가기</p>
                                        <p>- 운영기간 ; 연중</p>
                                        <p>- 금액 : 10,000원</p>
                                        <p>※ 10인 이상</p>

                                        <p class="content_bar3">○ 매실따기</p>
                                        <p>- 체험내용 : 친환경농법의 재배과정도 배우고 오래두고 먹는 저장방법도 배우며 직접따보는 체험</p>
                                        <p>- 운영기간 ; 5월말~6월말</p>
                                        <p>- 금액 : 10,000원</p>
                                        <p>※ 4인 이상</p>

                                        <p class="content_bar3">○ 감잎차만들기</p>
                                        <p>- 체험내용 : 새싹 감잎을 따서 비타민 c가 가득한 단풍든 잎차를 만들어보는 체험</p>
                                        <p>- 운영기간 ; 9월말~10월초</p>
                                        <p>- 금액 : 20,000원</p>
                                        <p>※ 10인 이상</p>

                                        <p class="content_bar3">○ 목공예 체험(방과 후 수업)</p>

                                        <p>- 체험특징 : 나무를 이용한 다양한 곤충 만들기 및 자연 놀이물 만들기 체험</p>
                                        <p>- 체험종류 : 각종 곤충 및 대나무피리, 솟대, 장승만들기, 1인 1점(3.000원)</p>
                                        <p>- 체험요일 : 매일가능, 체험요일시간예약필수</p>
                                        <p>- 체험수용인원 : 20명~100명</p>
                                        <p>- 체험대상 : 유치부~성인</p>
                                    </p>
                                </li>

                                <!-- ul_information2 이건 일단 구현 미정 -->
                                <!-- <div id="map"></div> -->
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
    <script type="text/javascript" src="../../dist/js/jinjusung_sub1_culture_art.js"></script>
</body>

</html>