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
    <meta name="author" content="Erik Terwan">


    <title>진주성 메인페이지</title>

    <!-- 트리거 -->
    <!-- <link rel="stylesheet" type="text/css" href="../../dist/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="../../dist/css/demo.css">

    <!-- <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons-wind"> -->
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_main.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>


    <script src="jquery.xdomainajax.js"></script>
    <script src="weather.js"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons-wind.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons.css">
</head>


<body>



    <div id="popup_mask">

    </div> <!-- 팝업 배경 DIV -->

    <div id="popupDiv">
        <p>본 사이트는 비 상업적 목적의 포트폴리오 용으로 제작되었으며, 본 사이트 내 사용된 콘텐츠들의 모든 저작권은 해당 권리자에게 있음을 밝힙니다.</p>
        <!-- 팝업창 -->
        <button id="popCloseBtn">close</button>
    </div>

    <!-- 페이지 시작 -->
    <div id="fullpage">
        <?php include "../components/layout/header.php"; ?>
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
                        <td><a href="https://jinju.museum.go.kr/site/cyber/jinjufortress/" class="section_bar_menu1" target="_blank">진주박물관</a></td>
                        <td><a href="https://jinju.museum.go.kr/kor/" class="section_bar_menu2" target="_blank">진주성탐방</a></td>
                        <td><a href="jinjusung_sub3_guide_traffic_car.php" class="section_bar_menu3">고객문의</a></td>
                        <td><a href="jinjusung_sub3_guide_traffic_bus.php" class="section_bar_menu4">상세위치</a></td>
                    </tr>
                </table>
            </div>
        </section>

        <!-- <div class="n_section2">
            <div class="n_section2_1">
                <h3>주요행사</h3>
                <p>진주남강을 일대로 줄지어 있는 역사에 여러분을 초대합니다!</p>
                <a href="#">자세히보기</a>
            </div>

            <div class="n_section2_2">
                <ul class="n_section2_menu">
                    <li class="n_section2_menu1"><a href="jinjusung_sub0_human.php">인물</a></li>
                    <li class="n_section2_menu2"><a href="jinjusung_sub0_legend.php">전설</a></li>
                    <li class="n_section2_menu3"><a href="jinjusung_sub0_history.php">역사</a></li>
                </ul>

            </div>

        </div> -->


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
                    <th colspan="2" class="tour_guide_th_line">관람안내 <a href="jinjusung_sub0_tour_guide.php" style="margin-left: 10px;" class="right-arrow1">+</a></th>
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
                        <td class="tour_guide_bar_title" style="width: 75%; margin-top:12px"><?php echo '[' . $array["idx"] . ']' . "  " . $array["contents"] . $array["reg_date"] ?></td>
                        <td style="width: 17%;  margin-top:12px"><?php echo $array["reg_date"] ?></td>
                    </tr>

                <?php
                }
                ?>
            </table>
        </div>

        <section class="section4">
            <article class="section4_sights">
                <h2 class="section4_h2"><span>한눈에 보는 진주</span></h2>
                <ul>
                    <li class="section4_menu1"><a href="jinjusung_sub0_human.php">인물</a></li>
                    <li class="section4_menu2"><a href="jinjusung_sub0_legend.php">전설</a></li>
                    <li class="section4_menu3"><a href="jinjusung_sub0_history.php">역사</a></li>
                </ul>
            </article>

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

        <section class="section6">
            <article class="section6_sights">
                <h2 class="section6_h2">진주맛집-축제행사-숙박-고객문의</h2>
                <ul>
                    <li class="section6_menu1"><a href="#"></a></li>
                    <li class="section6_menu2"><a href="jinjusung_sub1_festival_representation.php"></a></li>
                    <li class="section6_menu3"><a href="#"></a></li>
                </ul>
            </article>
        </section>



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
                    <img id="imageid" alt="날씨이미지">
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

        <?php include "../components/layout/footer.php"; ?>


        <script type="text/javascript" src="../../dist/js/ScrollTrigger.min.js"></script>
        <script>
            window.counter = function() {
                // this refers to the html element with the data-scroll-showCallback tag
                var span = this.querySelector('span');
                var current = parseInt(span.textContent);

                span.textContent = current + 1;
            };

            document.addEventListener('DOMContentLoaded', function() {
                var trigger = new ScrollTrigger({
                    addHeight: true
                });
            });
        </script>

        <script type="text/javascript" src="../../dist/js/jinjusung_main.js"></script>
    </div>
</body>

</html>