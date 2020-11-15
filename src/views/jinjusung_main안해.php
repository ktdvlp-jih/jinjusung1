<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <title>홍길동 포트폴리오</title>

    <style>
        /* Sections */

        #section0 img,
        #section1 img {
            /* margin: 20px 0 0 0 */
        }

        #section2 img {
            margin: 20px 0 0 52px
        }

        #section3 img {
            bottom: 0px;
            position: absolute;
            margin-left: -420px
        }

        .intro p {
            width: 50%;
            margin: 0 auto;
            font-size: 1.5em
        }
    </style>
    <!--[if IE]>
<script type="text/javascript">
	 var console = { log: function() {} };
</script>
<![endif]-->

    <!-- 트리거 -->
    <!-- <link rel="stylesheet" type="text/css" href="../../dist/css/style.css"> -->

    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.fullPage.css" />

    <link rel="stylesheet" type="text/css" href="../../dist/css/examples.css" />
    <link rel="stylesheet" type="text/css" href="../../dist/css/demo.css">

    <!-- <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons-wind"> -->
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_main.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.fullPage.min.js"></script>

    <script src="jquery.xdomainajax.js"></script>
    <script src="weather.js"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons-wind.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/weather-icons-master/css/weather-icons.css">


</head>

<body>
    <!-- <ul id="menu">
        <li data-menuanchor="firstPage"><a href="#firstPage">프로필</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">일러스트</a></li>
        <li data-menuanchor="3rdPage"><a href="#3rdPage">포토샵</a></li>
        <li data-menuanchor="4thpage"><a href="#4thpage">웹 사이트</a></li>
    </ul> -->
    <?php include "../components/layout/header.php"; ?>
    <div id="fullpage">

        <div class="section" id="section0">
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
            <!-- <div class="section_bar">
                <table>
                    <tr>
                        <td><a href="https://jinju.museum.go.kr/site/cyber/jinjufortress/" class="section_bar_menu1">진주박물관</a></td>
                        <td><a href="https://jinju.museum.go.kr/kor/" class="section_bar_menu2">진주성탐방</a></td>
                        <td><a href="jinjusung_sub3_guide_traffic_car.php" class="section_bar_menu3">고객문의</a></td>
                        <td><a href="jinjusung_sub3_guide_traffic_bus.php" class="section_bar_menu4">상세위치</a></td>
                    </tr>
                </table>
            </div> -->
        </div>


        <div class="section" id="section1">
            <!-- 수정 -->
            <div class="slide">
                <div class="intro">
                    <h1>Create Sliders</h1>
                    <p>Not only vertical scrolling but also horizontal scrolling. With fullPage.js you will be able to add horizontal sliders in the most simple way ever.</p>
                    <img src="images/slider.png" alt="slider" />
                </div>

            </div>
            <div class="slide">
                <div class="intro">
                    <img src="images/1.png" alt="simple" />
                    <h1>Simple</h1>
                    <p>Easy to use. Configurable and customizable.</p>
                </div>
            </div>
            <div class="slide">
                <div class="intro">
                    <img src="images/2.png" alt="Cool" />
                    <h1>Cool</h1>
                    <p>It just looks cool. Impress everybody with a simple and modern web design!</p>
                </div>
            </div>
            <div class="slide">
                <div class="intro">
                    <img src="images/3.png" alt="Compatible" />
                    <h1>Compatible</h1>
                    <p>Working in modern and old browsers too! IE 8 users don't have the fault of using that horrible browser! Lets give them a chance to see your site in a proper way!</p>
                </div>
            </div>
            <div class="slide">
                <div class="intro">
                    <img src="images/1.png" alt="Cool" />
                    <h1>Add1</h1>
                    <p>...</p>
                </div>
            </div>
            <div class="slide">
                <div class="intro">
                    <img src="images/2.png" alt="Cool" />
                    <h1>TEST</h1>
                    <p>ahahahahahahahaha</p>
                </div>
            </div>
            <!-- 여기까지 -->
        </div>
        <div class="section" id="section2">
            <!-- 수정 -->
            <div class="intro">
                <h1>Example</h1>
                <p>HTML markup example to define 4 sections.</p>
                <img src="images/example2.png" alt="example" />
            </div>
            <!-- 여기까지 -->
        </div>
        <div class="section" id="section3">
            <!-- 수정 -->
            <div class="intro">
                <h2>Working Web site</h2>
                <ul>
                    <li class="web"><a href="#">웹 사이트 바로가기</a></li>
                    <li class="mobile"><a href="#">모바일 사이트 바로가기</a></li>
                </ul>
            </div>

        </div>
        <!-- 여기까지 -->
    </div>

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



</body>

</html>