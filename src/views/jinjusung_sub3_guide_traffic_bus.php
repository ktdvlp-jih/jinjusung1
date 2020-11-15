<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>진주성 가이드 교통안내 버스</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=c28l131ly8"></script>
    <!-- <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=c28l131ly8"></script> -->

    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub3_guide_traffic_bus.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>


</head>

<body>

    <?php include "../components/layout/header.php"; ?>

    <section class="section1_bg">
        <h2 class="section1_box">가이드</h2>
    </section>

    <section class="section2_wrap">
        <div class="section2">
            <div class="section2_snb">
                <dl>
                    <dt class="section2_snb_menu"><span id="section2_snb_logo">section2_snb_logo</span>
                        <p>가이드</p>
                    </dt>
                    <?php include "../components/layout/sub3_1.php"; ?>

                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>가이드</h3>
                        <p><span>가이드</span>상세주소
                    </div>
                </div>
                <div class="section2_line"></div>

                <article class="aside_box">

                    <div id="map"></div>
                    <br>
                    <div class="time_inpomation">
                        <h2>상세정보</h2>
                        <dl>
                            <dt class="time_inpomation_dt">도보 이용시</dt>
                            <dd>진주 시외버스에서 걸어서 10분 거리</dd>
                        </dl>
                        <dl>
                            <dt>개양오거리 버스 이용시</dt>
                            <dd>160번 버스 -> 중앙시장하차 -> 도보 5분</dd>
                        </dl>
                        <a href="http://bis.jinju.go.kr/" target="_blank"><img style="background-size: cover;" src="../../dist/css/sub3_guide_traffic_bus/time_table.png" alt="버스시간표"></a>
                    </div>

                    <div class="aside_box_div">
                        <dl>
                            <dt><img src="../../dist/css/sub3_guide_traffic_bus/location_icon.png" alt="지도 아이콘"></dt>
                            <dd>경상남도 진주시 본성동</dd>
                        </dl>
                        <dl>
                            <dt><img src="../../dist/css/sub3_guide_traffic_bus/call_icon.png" alt="전화 아이콘"></dt>
                            <dd><a href='tel:055-749-5171' style="color:#000000">055-749-5171</a></dd>
                        </dl>
                    </div>

                </article>
            </div>
        </div>
        <?php include "../components/layout/survey_form.php"; ?>
    </section>

    <?php include "../components/layout/footer.php"; ?>

    <script type="text/javascript" src="../../dist/js/jinjusung_sub3_guide_traffic_bus.js"></script>
</body>

</html>