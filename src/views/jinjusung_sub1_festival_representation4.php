<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 축제/체험</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=c28l131ly8"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub1_festival_representation4.css">
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
                        <p><span>축제/체험</span><span>대표축제</span>진주민속 소싸움대회</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_festival_representation4/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_festival_representation4/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_festival_representation4/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_festival_representation4/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_festival_representation4/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_festival_representation4/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_festival_representation4/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>진주민속 소싸움대회</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>2020년 4월~9월</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>진주시 관광진흥과</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>경기장 맞은편 꿈키움동산 주차가능</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-749-8597</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>판문오동길 100</p>
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

                                    <p>진주소싸움은 삼국시대 전쟁에서 승리한 전승(戰勝)기념 잔치에서 비롯되었다는 설이 있을 정도로 그 유래가 깊다. 예전에는 진주의 "큰판(소싸움)"은
                                        남강 백사장이었다.</p>
                                    <p>소싸움이 벌어지는 며칠 동안은 싸움소가 일으킨 뿌연 모래 먼지가 백사장을 뒤덮었으며, 수만 군중의 함성은 하늘을 찔렀고 수백 개의차일(遮日)이
                                        백사장을 온통 뒤덮었으며 차일 속에 오간 술 바가지로 인하여 양조장 술은 동이 났다 한다.</p>
                                    <p>이러한 진주 소싸움은 일제 때 민족의 억압된 울분을 소싸움에서 발산했고 일본인들이 진주 땅을 들어설 때 수만 군중이 백사장을 뒤엎고 시가지를
                                        누비니 겁에 질려 남강 나루를 건너지 못하고 며칠씩 머물렀다는 유명한 이야기가 있다.</p>
                                    <p>이와 같이 진주 소싸움은 매년 4월부터 9월까지 매주 토요일 13:30분부터 토요상설 소싸움 대회가 개최되고 10월 축제 기간중에 개최되는
                                        전국민속 소싸움 대회는 전국에서 수만명의 관광객이 찾아오고 있는 진주의 새로운 관광상품으로 각광받고 있다.</p>
                                    <p>또한 진주시에서는 소싸움의 옛 명성을 되찾고 진주를 찾는 관광객에게 볼거리를 제공하기 위하여 진양호 공원 후문 앞 50,648㎡ 부지위에
                                        3,000석 규모의 원형 경기장인 진주 전통 소싸움 경기장을 건립하여 2006년 3월부터 이곳에서 진주 소싸움 경기를 해오고 있다.</p>

                                    <p class="content_bar3">○ 2020 진주 토요상설 민속소싸움경기</p>
                                    <p>- 개최시기 : 2020. 4월 ~ 9월 (매주 토요일)</p>
                                    <p>※ 혹서기 및 장마철 : 7~8월 일부 제외</p>
                                    <p>- 주 소 : 진주전통소싸움경기장(진주시 판문오동길 100)</p>
                                    <p>- 관리기관 : 진주시 관광진흥과</p>
                                    <p>- 전화번호 : 055-749-8597</p>
                                    <p>* 진주투우협회 055-747-6159</p>
                                    <p>- 이 용 료 : 무료</p>
                                    <p>- 주차정보 : 경기장 맞은편 꿈키움동산 주차가능</p>

                                    <p class="content_bar3">○ 제126회 진주시 전국민속소싸움대회</p>
                                    <p>- 개최시기 : 2019. 10. 4.(금) ~ 10. 9.(수) (6일간)</p>
                                    <p>- 주 소 : 진주전통소싸움경기장(진주시 판문오동길 100)</p>
                                    <p>- 관리기관 : 진주시 관광진흥과</p>
                                    <p>- 전화번호 : 055-749-8597</p>
                                    <p>- 전화번호 : 055-749-8597</p>
                                    <p>- 이 용 료 : 무료</p>
                                    <p>- 주차정보 : 경기장 맞은편 꿈키움동산 주차가능</p>
                                    <p>※ 대회 취소 : 아프리카돼지열병(ASF) 확산에 따라 양돈농가 보호와 싸움소 육성을 위해 부득이하게 취소함.</p>
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
    <script type="text/javascript" src="../../dist/js/jinjusung_sub1_festival_representation4.js"></script>
</body>

</html>