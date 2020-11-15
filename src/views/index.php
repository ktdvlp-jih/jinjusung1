<?php include "../components/inc/session.php"; ?>
<?php include "../components/inc/dbcon.php"; ?>

<?php


$sql = "select * from noticeBoard order by idx desc";

$result = mysqli_query($con, $sql); //db에 쿼리 전송

// $array = mysqli_fetch_array($result); //db로부터 결과값 반환 (필드순서)

// $asd = mysqli_num_rows($t_result);


// for ($i = 1; $i <= 5; $i++) {
//     echo $array["idx"];
//     // $array["idx"];
// }
?>



<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 메인페이지</title>

    <!-- <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons-wind"> -->
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_main.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery 3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>
    <script src="jquery.xdomainajax.js"></script>
    <script src="weather.js"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons-wind.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons.css">




</head>


<body>

    <?php include "../components/layout/header.php"; ?>
    <!-- </nav> -->

    <section class="section1_wrap">
        <div class="section1">
            <h2>비쥬얼 이미지</h2>

            <ul class="section1_bg">
                <li><a href="#"><img src="../../dist/css/main_image/bg1.jpg" alt=""></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/bg3.jpg" alt=""></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/bg7.jpg" alt=""></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/bg2.jpg" alt=""></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/bg5.jpg" alt=""></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/bg4.jpg" alt=""></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/bg6.jpg" alt=""></a></li>
            </ul>

        </div>
        <div class="section_bar">
            <table>
                <tr>
                    <td><a href="https://jinju.museum.go.kr/site/cyber/jinjufortress/" class="section_bar_menu1">진주박물관</a></td>
                    <td><a href="https://jinju.museum.go.kr/kor/" class="section_bar_menu2">진주성탐방</a></td>
                    <td><a href="jinjusung_sub3_guide_traffic_car.php" class="section_bar_menu3">고객문의</a></td>
                    <td><a href="jinjusung_sub3_guide_traffic_bus.php" class="section_bar_menu4">상세위치</a></td>
                </tr>
            </table>
        </div>
    </section>

    <!-- <div class="blank"></div> -->


    <section class="section2_wrap">
        <div class="section2">
            <div class="bg_information">
                <h2>비쥬얼 이미지</h2>
                <ul class="bg_list">
                    <li><a href="#"><img src="../../dist/css/main_image/bg_in1.jpg" alt="촉석루"></a></li>
                    <li><a href="#"><img src="../../dist/css/main_image/bg_in2.jpg" alt="김시민"></a></li>
                    <li><a href="#"><img src="../../dist/css/main_image/bg_in3.jpg" alt="논개의암"></a></li>
                    <li><a href="#"><img src="../../dist/css/main_image/bg_in4.jpg" alt="진주박물관"></a></li>
                </ul>

            </div>

            <table class="tour_guide">
                <tr>
                    <th colspan="2" class="tour_guide_th_line">관람안내 <a href="jinjusung_sub0_tour_guide.php" class="more1">+</a></th>
                </tr>
                <tr>
                    <td class="">
                        <p class="tour_guide_title">-유료 관람시간-</p>
                        <div>
                            <p class="tour_guide_title_p">09:00~18:00</p>
                            <p class="tour_guide_title_p">(하절기,동절기 상관없음)</p>
                            <p class="tour_guide_title_p"></p>
                        </div>
                    </td>
                    <td class="">
                        <p class="tour_guide_title">-관람료- </p>
                        <div>
                            <p class="tour_guide_title_p">일반:2.000 학생 1200</p>
                            <p class="tour_guide_title_p">어린이 600</p>
                            <p class="tour_guide_title_p">진주시민 무료(신분증 제시)</p>
                        </div>
                    </td>
                </tr>
            </table>


            <table class="jinjusung_news">
                <tr>
                    <th colspan="2" class="tour_guide_th_line">공지사항 <a href="jinjusung_sub2_participation_yard_noticeboard.php" class="more1">+</a></th>
                </tr>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    $array = mysqli_fetch_array($result);
                ?>

                    <tr style="cursor: pointer;" onclick="link1(<?php echo $array['idx']; ?>)">
                        <td class="tour_guide_bar_title" style="width: 75%;"><strong> <?php echo '[' . $array["idx"] . ']' . "  " . $array["contents"] ?></a></strong></td>
                        <td class="tour_guide_bar atag" style="width: 25%;"><?php echo $array["reg_date"] ?></a></td>
                        <!-- <td class="tour_guide_bar_title" style="width: 75%;"><a href="jinjusung_sub2_participation_yard_noticeboard_the.php?idx=<?php echo $array["idx"]; ?>"><strong> <?php echo '[' . $array["idx"] . ']' . "  " . $array["contents"] ?></a></strong></td>
                        <td class="tour_guide_bar atag" style="width: 25%;"><a href="#"> <?php echo $array["reg_date"] ?></a></td> -->
                    </tr>
                <?php
                }
                ?>
            </table>







            <!-- <ul class="section3_bg">
                <li><a href="#"><img src="../../dist/css/main_image/section3_bg_1.jpg" alt="촉석루"></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/section3_bg_2.jpg" alt="김시민"></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/section3_bg_3.jpg" alt="논개의암"></a></li>
                <li><a href="#"><img src="../../dist/css/main_image/section3_bg_4.jpg" alt="진주박물관"></a></li>
            </ul> -->


        </div>
        <!-- <div class="section2">
            <article class="tour_guide_news">
                <h2>tour_guide_news</h2>
                <dl class="tour_guide">
                    <dt>관람안내</dt>
                    <dd class="tour_guide_bottom"><span class="tour_guide_bar">유료 관람시간</span>
                        <span>09:00~18:00(하절기,동절기 상관없음)</span></dd>
                    <dd class="tour_guide_top"><span class="tour_guide_bar">관람료</span> <span>일반:2.000 학생 1200. 어린이
                            600</span><span>진주시민 무료(신분증 제시)</span></dd>
                </dl>

                <dl class="jinjusung_news">
                    <dt>진주성 소식</dt>
                    <dd class="jinjusung_news_top"><a class="content1" href="#">2020.03.20 코로나 19확산에 따른 관광 내용더더더더더적어
                            내용더더더더더적어
                            융지</a></dd>
                    <dd class=""><a class="content1" href="#">2020.02.20 코로나 19확산에 따른 기금 내용더더더더더적어 내용더더더더더적어 </a></dd>
                    <dd class=""><a class="content1" href="#">2020.04.20 코로나 따른 관광 기금 융지 내용더더더더더적어 내용더더더더더적어</a></dd>
                    <dd class=""><a class="content1" href="#">2020.05.20 코로나 19확산에 따른 관광 기금 융지 내용더더더더더적어 내용더더더더더적어</a>
                    </dd>
                    <dd class=""><a class="content1" href="#">2020.06.20 19확산에 따른 관광 기금 융지 내용더더더더더적어 내용더더더더더적어</a></dd>
                </dl>

                <p>관란안내 더보기</p>
                <p>진주성 소식 더보기</p>
            </article>
        </div> -->
    </section>

    <div class="blank"></div>

    <!-- <section class="section3">
        <h2 class="section3_h2"><span>꼭 한번 들려야하는 명소</span></h2>
        <ul class="section3_bg">
            <li><a href="#"><img src="../../dist/css/main_image/section3_bg_1.jpg" alt="촉석루"></a></li>
            <li><a href="#"><img src="../../dist/css/main_image/section3_bg_2.jpg" alt="김시민"></a></li>
            <li><a href="#"><img src="../../dist/css/main_image/section3_bg_3.jpg" alt="논개의암"></a></li>
            <li><a href="#"><img src="../../dist/css/main_image/section3_bg_4.jpg" alt="진주박물관"></a></li>
        </ul>
    </section> -->

    <!-- <div class="blank"></div> -->


    <section class="section4">
        <article class="section4_sights">
            <h2 class="section4_h2"><span>한눈에 보는 진주</span></h2>
            <ul>
                <li class="section4_menu1"><a href="#">인물</a></li>
                <li class="section4_menu2"><a href="#">전설</a></li>
                <li class="section4_menu3"><a href="#">역사</a></li>
            </ul>
        </article>
    </section>

    <div class="blank"></div>

    <section class="section5">
        <article class="section5_sights">
            <h2 class="section5_h2"><span>꼭 가보는 포토존</span></h2>

            <ul class="photo_top">
                <li class="section5_menu1"><a href="#">포토존1</a></li>
                <li class="section5_menu2"><a href="#">포토존2</a></li>
                <li class="section5_menu3"><a href="#">포토존3</a></li>
            </ul>

            <ul class="photo_bottom">
                <li class="section5_menu4"><a href="#">포토존4</a></li>
                <li class="section5_menu5"><a href="#">포토존5</a></li>
                <li class="section5_menu6"><a href="#">포토존6</a></li>
            </ul>

            <span class="section5_bottom">왼쪽배경</span>
            <span class="section5_top">오른쪽배경</span>
        </article>
    </section>

    <div class="blank"></div>

    <section class="section6">
        <article class="section6_sights">
            <h2 class="section6_h2">진주맛집-축제행사-숙박-고객문의</h2>
            <ul>
                <li class="section6_menu1"><a href="#"></a></li>
                <li class="section6_menu2"><a href="#"></a></li>
                <li class="section6_menu3"><a href="#"></a></li>
                <!-- <li class="section6_menu4"><a href="#"></a></li> -->
            </ul>

        </article>
    </section>

    <div class="blank"></div>


    <?php include "../components/layout/footer.php"; ?>

    <!-- 날씨 -->
    <div class="ff" id="ff">
        <!-- <div id="ff2"></div>
        <div id="ff3"></div>
        <div id="ff4"></div> -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="weather_wrap">

            <div class="weather">
                <img id="imageid">
                <div>
                    <p id="tt"></p>
                    <p id="ww"></p>
                    <p id="ll"></p>
                </div>
                <table class="weather_bottom">
                    <tr>
                        <td><i class="wi wi-sandstorm"></i>

                            <p id="wind"></p>
                        </td>
                        <td><i class="wi wi-humidity"></i>
                            <p id="hum"></p>
                        </td>
                        <td><i class="wi wi-cloud"></i>
                            <p id="cl"></p>
                        </td>
                    </tr>
                </table>


            </div>

        </div>
        <a href="#none"><i class="wi wi-cloud" style="font-size: 35px;margin-left: 7px;line-height: 94px;"></i></a>

    </div>

</body>



</html>

<script type="text/javascript" src="../../dist/js/jinjusung_main.js"></script>
<style>

</style>