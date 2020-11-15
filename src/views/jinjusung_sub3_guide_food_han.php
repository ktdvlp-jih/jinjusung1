<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 가이드 교통안내 자가용</title>


    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub3_guide_food_han.css">
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
                    <dt class="section2_snb_menu"><span id="section2_snb_logo">section2_snb_logo</span>
                        <p>가이드</p>
                    </dt>

                    <dd class="section2_snb_menu1" id="section2_snb_menu1" onclick="section2_snb_menu_button(id)">
                        <span>상세주소</span>

                    </dd>


                    <dd class="section2_snb_menu1" class="section2_snb_menu1_hover" id="section2_snb_menu2" onclick="section2_snb_menu_button(id)">
                        <span>교통안내</span>
                        <ul>
                            <li><a href="#">버스</a></li>
                            <li><a href="#">자가용</a></li>
                            <li><a href="#">열차</a></li>
                            <li><a href="#">도보</a></li>
                        </ul>
                    </dd>

                    <dd class="section2_snb_menu1_hover" id="section2_snb_menu3" onclick="section2_snb_menu_button(id)">
                        <span>진주맛집</span>
                        <ul>
                            <li><a href="#">한식</a></li>
                            <li><a href="#">중식</a></li>
                            <li><a href="#">일식</a></li>
                            <li><a href="#">양식</a></li>
                            <li><a href="#">기타</a></li>
                        </ul>
                    </dd>

                    <dd class="section2_snb_menu1" id="section2_snb_menu4" onclick="section2_snb_menu_button(id)">
                        <span>숙박</span>
                        <ul>
                            <li><a href="#">호텔</a></li>
                            <li><a href="#">중저가 숙박시설</a></li>
                            <li><a href="#">일반모텔 - 여관</a></li>
                            <li><a href="#">펜션 - 민박</a></li>
                        </ul>
                    </dd>
                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>가이드</h3>
                        <p><span>가이드</span><span>진주맛집</span>한식</p>
                    </div>
                </div>
                <div class="section2_line"></div>

                <article class="aside_box">
                    <div>
                        <div>
                            <img src="../../dist/css/sub3_guide_food/food1_img.jpg" alt="낙원 왕갈비">
                            <dl>
                                <dt>낙원 왕갈비</dt>
                                <dd><button type="button">위치</button></dd>
                                <dd>분류<span class="aside_box_dd">한식</span></dd>
                                <dd>대표메뉴<span class="aside_box_dd">지리,매운탕,참복,수육,보쌈</span></dd>
                                <dd>전화번호<span class="aside_box_dd">055-747-2116</span></dd>
                            </dl>
                        </div>

                        <div class="section2_information_R">
                            <img src="../../dist/css/sub3_guide_food/food2_img.jpg" alt="강변복집">
                            <dl>
                                <dt>강변복집</dt>
                                <dd><button type="button">위치</button></dd>
                                <dd>분류<span class="aside_box_dd">한식</span></dd>
                                <dd>대표메뉴<span class="aside_box_dd">돼지왕갈비, 삼격살, 물냉면, 비빔냉면(계절메뉴)</span></dd>
                                <dd>전화번호<span class="aside_box_dd">055-742-4093</span></dd>
                            </dl>
                        </div>

                        <div class="section2_information_B">
                            <img src="../../dist/css/sub3_guide_food/food3_img.jpg" alt="금산그때그집">
                            <dl>
                                <dt>금산그때그집</dt>
                                <dd><button type="button">위치</button></dd>
                                <dd>분류<span class="aside_box_dd">한식</span></dd>
                                <dd>대표메뉴<span class="aside_box_dd">삼계탕, 한방산계탕, 옻삼계탕</span></dd>
                                <dd>전화번호<span class="aside_box_dd">055-761-2428</span></dd>
                            </dl>
                        </div>

                        <div class="section2_information_R section2_information_B">
                            <img src="../../dist/css/sub3_guide_food/food4_img.jpg" alt="담소원">
                            <dl>
                                <dt>담소원</dt>
                                <dd><button type="button">위치</button></dd>
                                <dd>분류<span class="aside_box_dd">한식</span></dd>
                                <dd>대표메뉴<span class="aside_box_dd">모듬, 버섯생불고기, 불고기전골, 담소원정식, 생선구이, 갈비찜, 게장밥, 돈육밥</span></dd>
                                <dd>전화번호<span class="aside_box_dd">055-742-6396</span></dd>
                            </dl>
                        </div>

                        <div class="section2_information_B">
                            <img src="../../dist/css/sub3_guide_food/food5_img.jpg" alt="더하우스갑을">
                            <dl>
                                <dt>더하우스갑을</dt>
                                <dd><button type="button">위치</button></dd>
                                <dd>분류<span class="aside_box_dd">한식</span></dd>
                                <dd>대표메뉴<span class="aside_box_dd">전통진주비빔밥, 진주밥상(갈비찜/떡갈비), 갈비탕. 불고기전골, 냉면(물/비빔), 생고기</span>
                                </dd>
                                <dd>전화번호<span class="aside_box_dd">055-742-9292</span></dd>
                            </dl>
                        </div>

                        <div class="section2_information_R section2_information_B">
                            <img src="../../dist/css/sub3_guide_food/food6_img.jpg" alt="국빈">
                            <dl>
                                <dt>국빈</dt>
                                <dd><button type="button">위치</button></dd>
                                <dd>분류<span class="aside_box_dd">한식</span></dd>
                                <dd>대표메뉴<span class="aside_box_dd">생등심, 특수부위, 삼겹살, 갈비, 모듬, 오리생고기, 오리양념, 영양돌솥밥, 한방갈비탕</span>
                                </dd>
                                <dd>전화번호<span class="aside_box_dd">055-133-2323</span></dd>
                            </dl>
                        </div>
                        <img src="../../dist/css/sub3_guide_food/location_1.jpg" alt="지도" class="location1_space">
                    </div>
                </article>


                <ul>
                    <li id="aside_box_top_left"><a href="#">제일 첫번째 목록</a></li>
                    <li id="aside_box_left"><a href="#">이전 목록</a></li>
                    <li id="aside_box_list1"><a href="#" title="1">1</a></li>
                    <li id="aside_box_list2"><a href="#" title="2">2</a></li>
                    <li id="aside_box_list3"><a href="#" title="3">3</a></li>
                    <li id="aside_box_list4"><a href="#" title="4">4</a></li>
                    <li id="aside_box_list5"><a href="#" title="5">5</a></li>
                    <li id="aside_box_right"><a href="#">다음 목록</a></li>
                    <li id="aside_box_top_right"><a href="#">제일 끝번째 목록</a></li>
                </ul>
            </div>
        </div>


        <?php include "../components/layout/survey_form.php"; ?>
    </section>

    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sub3_guide_food_han.js"></script>
</body>

</html>