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
                        <p><span>축제/체험</span><span>문화예술체험</span>정수예술촌</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_culture_art2/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_culture_art2/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_culture_art2/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_culture_art2/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_culture_art2/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_culture_art2/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_culture_art2/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>정수예술촌 예술체험</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>전화문의 또는 홈페이지 참고</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>정수예술촌</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>전화문의 또는 홈페이지 참고</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-758-7255</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>이반성면 오봉산로 873 정수예인촌</p>
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
                                    <p>
                                        <p>천연염색, 기초조형(테라코타), 도자기, 목공예, 짚풀공예, 한지공예, 서각, 퀼트분야를 운영하고 있으며, 방과 후 수업은 수채화, 서양화, 천연염색, 기초조형(테라코타), 도자기, 목공예, 짚풀공예, 한지공예, 퀼트, 가죽공예, 서각과목을 수업한다. </p>
                                        <p>정수예술촌은 자연과 농촌이 어우러져 한곳에서 다양한 예술분야를 체험하고 작가들과 직접 예술에 관하여 대화를 주고받으며 예술의 새로운 안목을 넓혀 나갈 수 있는 것이 큰 특징이다. </p>

                                        <p class="content_bar3">○ 천연염색(방과 후 수업)</p>

                                        <p>- 체험특징 : 자연에서 나는 식물, 꽃, 나무, 열매에서 연료를 채취해(홀치기) 다양한 무늬와 색을 물들여 만듬</p>
                                        <p>- 체험종류</p>
                                        <p>· 실크스카프 염색 : 다양한 복합염, 한시간 (12,000원)</p>
                                        <p>· 손수건 무늬염 : 황토, 쪽물외, 한시간 (5,000원)</p>
                                        <p>· 미니실크 스카프 염색 : 소목, 양파외, 한시간(7,000원)</p>
                                        <p>- 체험요일 : 매일가능, 체험요일시간 예약필수</p>
                                        <p>- 체험수용인원 : 20명~ 100명</p>
                                        <p>- 체험대상 : 유치부~성인</p>

                                        <p class="content_bar3">○ 한지공예(방과 후 수업)</p>

                                        <p>- 체험특징 : 전통한지 뜨기와 한지를 이용하여 만드는 공예이다.한지를 찢어서 모자이크를 하거나 자연의 소재를 한지에 다양하게 표현할 수 있다.
                                        </p>
                                        <p>- 체험종류 : 한지뜨기, 한지그림부채, 각종 액세서리, 필통, 등 만들기 등 (한시간소요, 5,000~10,000원)</p>
                                        <p>- 체험요일 : 매일가능, 체험요일시간예약필수</p>
                                        <p>- 체험수용인원 : 10명 ~ 100명</p>
                                        <p>- 체험대상 : 유치부 ~ 성인</p>

                                        <p class="content_bar3">○ 도자기 체험(방과 후 수업)</p>

                                        <p>- 체험특징 : 도자기 물레를 직접체험해보고, 초벌 그림을 그려보면서 도자기의 이해에 도움을 준다.</p>
                                        <p>- 체험종류 : 물레 체험, 초벌그림그리기, 1인 1작품 (1시간 30분~2시간소요, 10,000원)</p>
                                        <p>- 체험요일 : 매일가능, 체험요일시간 예약필수</p>
                                        <p>- 체험수용인원 : 20명~ 80명</p>
                                        <p>- 체험대상 : 유치부~성인</p>

                                        <p class="content_bar3">○ 기초조형 (테라코타)</p>

                                        <p>- 체험특징 : 점토와 오브제를 사용하여 학생들의 상상력과 집중력을 키우고, 다양한 재료를 통하여 발상의 전환을 이끌어내는데 목적을 둔다. 특히 테라코타는 흙을 이용하여 손의 감각과 조형의 이해와 감각을 키운다. (1인 1점 : 10,000)</p>

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