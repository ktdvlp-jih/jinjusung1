<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 가이드 교통안내 자가용</title>


    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub3_guide_traffic_car.css">
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
                    <?php include "../components/layout/sub3_2.php"; ?>
                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>가이드</h3>
                        <p><span>가이드</span><span>교통안내</span>자가용</p>
                    </div>
                </div>
                <div class="section2_line"></div>

                <article class="aside_box">

                    <div>
                        <div>
                            <p><strong>서울특별시 -> 경상남도 진주시</strong></p>
                            <p><span>총 거리 약 337.7km</span></p>

                            <div>
                                <dl>
                                    <dt>자동차 이용시</dt>
                                    <dd class="dldd_be">약 4시간 6분</dd>
                                </dl>
                                <dl>
                                    <dt class="cboth">대중교통 이용시</dt>
                                    <dd class="dldd_be">약 3시간 56분</dd>
                                </dl>
                                <button type="button" class="blw" id="button_location1" onclick="location_j()">경로탐색</button>
                            </div>
                        </div>

                        <div class="section2_information_R">
                            <p><strong>인천광역시 -> 경상남도 서울시</strong></p>
                            <p><span>총 거리 약 347.8km</span></p>

                            <div>
                                <dl>
                                    <dt>자동차 이용시</dt>
                                    <dd class="dldd_be">약 3시간 56분</dd>
                                </dl>
                                <dl>
                                    <dt class="cboth">대중교통 이용시</dt>
                                    <dd class="dldd_be">약 4시간 18분</dd>
                                </dl>
                                <button type="button" class="blw" id="button_location1" onclick="location_j()">경로탐색</button>
                            </div>
                        </div>

                        <div class="section2_information_B">
                            <p><strong>대전광역시 -> 경상남도 진주시</strong></p>
                            <p><span>총 거리 약 187.5km</span></p>

                            <div>
                                <dl>
                                    <dt>자동차 이용시</dt>
                                    <dd class="dldd_be">약 2시간 13분</dd>
                                </dl>
                                <dl>
                                    <dt class="cboth">대중교통 이용시</dt>
                                    <dd class="dldd_be">약 2시간 43분</dd>
                                </dl>
                                <button type="button" class="blw" id="button_location1" onclick="location_j()">경로탐색</button>
                            </div>
                        </div>

                        <div class="section2_information_R section2_information_B">
                            <p><strong>대구광역시 -> 경상남도 진주시</strong></p>
                            <p><span>총 거리 약 116.7km</span></p>

                            <div>
                                <dl>
                                    <dt>자동차 이용시</dt>
                                    <dd class="dldd_be">약 1시간 39분</dd>
                                </dl>
                                <dl>
                                    <dt class="cboth">대중교통 이용시</dt>
                                    <dd class="dldd_be">약 2시간 16분</dd>
                                </dl>
                                <button type="button" class="blw" id="button_location1" onclick="location_j()">경로탐색</button>
                            </div>
                        </div>

                        <div class="section2_information_B">
                            <p><strong>경상남도 창원시 -> 경상남도 진주시</strong></p>
                            <p><span>총 거리 약 70.3km</span></p>

                            <div>
                                <dl>
                                    <dt>자동차 이용시</dt>
                                    <dd class="dldd_be">약 1시간 4분</dd>
                                </dl>
                                <dl>
                                    <dt class="cboth">대중교통 이용시</dt>
                                    <dd class="dldd_be">약 1시간 20분</dd>
                                </dl>
                                <button type="button" class="blw" id="button_location1" onclick="location_j()">경로탐색</button>
                            </div>
                        </div>

                        <div class="section2_information_R section2_information_B">
                            <p><strong>부산광역시 -> 경상남도 진주시</strong></p>
                            <p><span>총 거리 약 107.7km</span></p>

                            <div>
                                <dl>
                                    <dt>자동차 이용시</dt>
                                    <dd class="dldd_be">약 1시간 29분</dd>
                                </dl>
                                <dl>
                                    <dt class="cboth">대중교통 이용시</dt>
                                    <dd class="dldd_be">약 2시간 14분</dd>
                                </dl>
                                <button type="button" class="blw" id="button_location1" onclick="location_j()">경로탐색</button>
                            </div>
                        </div>

                        <div class="section2_information_B">
                            <p><strong>경상남도 거제시 -> 경상남도 진주시</strong></p>
                            <p><span>총 거리 약 77.4km</span></p>

                            <div>
                                <dl>
                                    <dt>자동차 이용시</dt>
                                    <dd class="dldd_be">약 59분</dd>
                                </dl>
                                <dl>
                                    <dt class="cboth">대중교통 이용시</dt>
                                    <dd class="dldd_be">약 1시간 39분</dd>
                                </dl>
                                <button type="button" class="blw" id="button_location1" onclick="location_j()">경로탐색</button>
                            </div>
                        </div>

                        <div class="section2_information_R section2_information_B">
                            <p><strong>광주광역시 -> 경상남도 진주시</strong></p>
                            <p><span>총 거리 약 161.4km</span></p>

                            <div>
                                <dl>
                                    <dt>자동차 이용시</dt>
                                    <dd class="dldd_be">약 1시간 49분</dd>
                                </dl>
                                <dl>
                                    <dt class="cboth">대중교통 이용시</dt>
                                    <dd class="dldd_be">약 2시간 29분</dd>
                                </dl>
                                <button type="button" class="blw" id="button_location1" onclick="location_j()">경로탐색</button>
                            </div>
                        </div>
                    </div>

                </article>
            </div>
        </div>
        <?php include "../components/layout/survey_form.php"; ?>

    </section>

    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sub3_guide_traffic_car.js"></script>
</body>

</html>