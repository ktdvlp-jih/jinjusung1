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
                        <p><span>축제/체험</span><span>문화예술체험</span>진주목공예체험</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_culture_art4/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_culture_art4/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_culture_art4/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_culture_art4/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_culture_art4/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_culture_art4/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_culture_art4/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>진주목공예전수관</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>전화문의 또는 홈페이지 참고</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>관광진흥과 관광시설팀</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>전화문의 또는 홈페이지 참고</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-746-3633~4</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>경남 명석면 광제산로 367</p>
                                </li>
                                <li><span>이&nbsp;용&nbsp;료</span>
                                    <p>무료(수강료 및 체험료 별도)</p>
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
                                        <p>진주는 예로부터 상, 장, 농 등의 가구 또는 나전칠기로 유명하여 궁궐에서 사용하는 함이나 장 같은 가구류를 만들어 진상 하였다고 한다. 그 중에서도 명석면에는 무형문화재로 지정된 목공예 명장이 다수 거주하고 있으며 진주 전통 목공예가 다양한 형태로 전승 되고 있다.
                                            진주목공예전수관은 오랜 전통을 가진 진주목공예를 계승·발전시키고자 2018년 11월 12일 개관하였으며 목공예 교육과 일일체험, 전시 및 판매가 이루어지고 있다.</p>
                                        <p>전시실에는 지역 목공예 작가들의 작품 80여점이 전시중이고, 작업실과 체험실에서는 다양한 목공예 교육과 일일체험 프로그램을 운영하고 있다.</p>
                                        <p>진주목공예전수관은 많은 방문객에게 목공예의 우수성을 널리 알리면서, 일상에서 사용되는 다양한 제품을 직접 만들고 체험하는 기회의 공간으로 자리매김하여 진주 목공예를 계승·발전시키는데 선도적인 역할을 다하고 있다.</p>

                                        <p class="content_bar3">시설</p>
                                        <p>○ 면적 : 10,520㎡(건축물 2,675㎡, 지상2층, 2동)</p>
                                        <p>○ 주요시설 : 전시실, 체험실, 작업실, 촬영실, 첨단장비실, 기계실 등</p>
                                        <p>○ 운영일 : 화~일(이용시간 : 10시~17시) </p>
                                        <p>○ 휴관일 : 1월 1일, 매주 월요일, 설·추석연휴 </p>

                                        <p class="content_bar3">접수방법</p>
                                        <p>- 홈페이지(주말 체험) 및 전화예약(평일 체험) </p>
                                        <p>※ 체험인원수에 맞게 사전에 재료준비가 필요하므로 당일 현장접수 불가 </p>
                                        <p>- 접수 당일 18시까지 입금시 신청완료 </p>
                                        <p>- 농협은행 301-0232-4310-31 진주목공예전수관(진주시청 관광진흥과)</p>
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