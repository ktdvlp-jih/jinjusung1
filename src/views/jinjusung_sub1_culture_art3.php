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
                        <p><span>축제/체험</span><span>문화예술체험</span>진주 전통음식체험</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_culture_art3/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_culture_art3/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_culture_art3/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_culture_art3/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_culture_art3/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_culture_art3/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_culture_art3/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>진주전통 음식체험</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>진주향토음식문화연구원</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>진주향토음식문화연구원</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>전화문의 또는 홈페이지 참고</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-756-1800</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>내동면 내축로 519</p>
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
                                        <p>칠보화반, 꽃밥이라 칭송받아 온 진주비빔밥. 진주비빔밥은 향토음식으로서의 명성과 역사적인 의미, 그리고 시각적인 아름다움까지 갖춘 음식이다.</p>
                                        <p>진주비빔밥이 꽃밥 또는 칠보화반이라고 한 것은 등황색의 둥근 놋그릇과 흰 빛의 밥 테, 그리고 다섯 가지 나물이 어우러져 일곱 가지 색상의 아름다운 꽃 모양을 하고 있기 때문이다.</p>
                                        <p>웰빙음식으로 각광받고 있는 진주비빔밥에 대한 설명을 듣고 만드는 과정을 체험한다.</p>

                                        <p class="content_bar3">○ 칠보화반 진주비빔밥 만드는 과정</p>

                                        <p>1. 밥짓기</p>
                                        <p>-양지머리를 장시간 곤 육수로 전통 무쇠솥에 장작불로 밥을 짓는다.</p>
                                        <p>2. 나물 무치기</p>
                                        <p>-비빔밥에 사용되는 나물은 제철에 나는 풍부하고 신선한 지역산물을 재료로 사용한다.</p>
                                        <p>3. 육회 만들기</p>
                                        <p>-색상이 선명하고 신선한 육회를 재료로 얇고 가늘게 썰어 야들야들한 육회에 참기름을 더한다.</p>
                                        <p>4. 선짓국 만들기</p>
                                        <p>-살코기와 선지, 간, 허파, 천엽, 내장을 푹 곤 국물을 작고 도톰하게 썬 무와 콩나물, 그리고 대파를 넣는다.</p>
                                        <p>5. 보탕국 만들기</p>
                                        <p>-바지락을 곱게 다져서 참기름으로 볶다가 물을 약간 붓고 끓인 뒤 소금으로 간을 맞춘다.</p>
                                        <p>6. 진주비빔밥 담기</p>
                                        <p>-놋그릇에다 육수로 잘 지은 밥을 담는다. 장만해 놓은 나물을 꽃 모양으로 담는다. 속대기라는 푸른 해초를 얹는다. 얇고 가늘게 썬 야들야들한 육회를 얹고 참기름을 몇 방울 떨어뜨린다. 보탕국과 따끈한 선짓국과 함께 상을 차린다.</p>

                                        <p class="content_bar3">진주비빔밥 만들기 체험정보</p>
                                        <p>- 20인 이상 25,000원/1인(비빔밥, 선짓국 재료 포함)</p>
                                        <p>- 체험시간 : 진주비빔밥 설명 30분, 비빔밥 만들기 시연 10분, 비빔밥 만들기 체험 10분, 비빔밥 시식체험 30분</p>
                                        <p>- 문의: 진주향토음식문화연구원 055-756-1800</p>

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