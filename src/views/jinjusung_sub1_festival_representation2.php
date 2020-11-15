<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 축제/체험</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=c28l131ly8"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub1_festival_representation2.css">
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
                        <p><span>축제/체험</span><span>대표축제</span>개천예술제</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_festival_representation2/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_festival_representation/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_festival_representation2/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_festival_representation2/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_festival_representation2/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_festival_representation2/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_festival_representation/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>개천예술제</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>2020-10-03 ~ 2020-10-10</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>개천예술제 제전위원회</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>주변 임시주차장 사용</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-752-0111</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>진주시 본성동</p>
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
                                    <p>임진왜란 진주성 전투에서 왜군이 강을 건너는 것을 저지하고 가족에게 안부를 전하기 위해 남강에 유등을 띄운 데에서 유래된 축제이다.</p>
                                    <p>문화 체욱 관광부 지정 대한민국 대표축제였곡 5년 연속 대한민국 글로벌 육성 축제로 선정되었으며, 해외로 진출하는 명품 축제이다.</p>
                                    <p class="content_bar3">본행사</p>
                                    <p>초혼점등식, 소망등달기, 유등 띄우기, 세계풍물등 및 한국의 등(燈) 전시, 빛으로 되살아난 진주성 등(燈) 전시 창작등(燈) 전시</p>
                                    <p class="content_bar3">체험창여마당 및 부대행사</p>
                                    <p>아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말아무말
                                    </p>
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
    <script type="text/javascript" src="../../dist/js/jinjusung_sub1_festival_representation.js"></script>
</body>

</html>