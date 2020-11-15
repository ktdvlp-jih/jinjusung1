<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 이야기</title>

    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub0_tour_guide.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>


</head>

<body>

    <?php include "../components/layout/header.php"; ?>

    <section class="section1_bg">
        <h2 class="section1_box">진주성역사</h2>
    </section>

    <section class="section2_wrap">
        <div class="section2">
            <div class="section2_snb">
                <dl>
                    <dt class="section2_snb_menu"><span class="section2_snb_logo">section2_snb_logo</span>
                        <p>진주성역사</p>
                    </dt>

                    <?php include "../components/layout/sub0_1.php"; ?>
                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>진주성역사</h3>
                        <p><span>진주성역사</span><span>진주성이야기</span>관람안내</p>
                    </div>
                </div>
                <div class="section2_line"></div>

                <article class="section2_information">
                    <h2>진주성이야기_관람안내</h2>
                    <!-- <ul>
                        <li>관람안내</li>
                        <li>관광객-제향현황</li>
                    </ul> -->
                    <dl class="content_bar2">
                        <dt>진주성 개방시간</dt>
                        <dd>3~10월(하절기) : 05:00 ~ 23:00</dd>
                        <dd>11~2월(동절기) : 05:00 ~ 22:00</dd>
                        <dd>유료 관람시간: 09:00 ~ 18:00(하절기, 동절기 상관없음)</dd>
                    </dl>


                    <dl>
                        <dt>입장료</dt>
                        <dd>
                            <table>
                                <tr class="td_t">
                                    <td width=25%>구분</td>
                                    <td width=25%>개인</td>
                                    <td width=25%>단체</td>
                                    <td width=25%>비고</td>
                                </tr>
                                <tr>
                                    <td>관람요금</td>
                                    <td>2,000</td>
                                    <td>1,400</td>
                                    <td>대학생,일반</td>
                                </tr>
                                <tr>
                                    <td>청소년 및 군인</td>
                                    <td>1,000</td>
                                    <td>600</td>
                                    <td>중고등학생,사병</td>
                                </tr>

                                <tr>
                                    <td>어린이</td>
                                    <td>600</td>
                                    <td>400</td>
                                    <td>초등학생</td>
                                </tr>

                                <tr>
                                    <td>진주시민</td>
                                    <td>무료</td>
                                    <td>무료</td>
                                    <td>신분증 제시</td>
                                </tr>
                                <tr>
                                    <td>무료</td>
                                    <td colspan="3">
                                        <ul>
                                            <li>만 6세 이하 어린이</li>
                                            <li>만 65세 이상인 사람</li>
                                            <li>국가유공자증 및 장애인 복지카드 소지자(심한장애의 경우 보호자 1인 포함)</li>
                                            <li>국민생활기초생활수급자 및 차상위계층 증명서 소지자</li>
                                        </ul>
                                    </td>

                                </tr>
                                <tr>
                                    <td>할인(50%)</td>
                                    <td colspan="3">
                                        <ul>
                                            <li>남중권 8개 시 · 군(경상남도 사천시, 남해군, 하동군 / 전라남도 여수시, 순천시, 광양시, 고흥군, 보성군)에 주민등록 되어있는 사람</li>
                                            <li>자매도시 3개 시(전라남도 순천시 / 충청남도 아산시 / 경상북도 안동시)에 주민등록 되어있는 사람</li>
                                            <li>동주도시 14개 시(강원도 원주시 / 경기도 광주시, 양주시, 여주시, 파주시 / 충청남도 공주시 / 충청북도 청주시, 충주시 / 전라남도 나주시 / 전라북도 전주시 / 경상북도 경주시, 상주시, 영주시 / 제주특별자치도 제주시)에 주민등록 되어있는 사람</li>
                                            <li>혁신도시 13개 시 · 군 · 구(강원도 원주시 / 충청북도 음성군, 진천군 / 전라남도 나주시 / 전라북도 완주군, 전주시 / 경상북도 김천시 / 대구광역시 동구 / 울산광역시 중구 / 부산광역시 남구, 영도구, 해운대구 / 제주특별자치도 서귀포시)에 주민등록 되어있는 사람</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                            <p class="wx">무료 및 할인 대상자는 확인 가능한 신분증 및 증명서를 제시해야함</p>
                            <p class="wx">모든 할인혜택은 중복 적용되지 않음</p>
                        </dd>
                    </dl>

                    <dl>
                        <dt>진주성 주차료</dt>
                        <dd>
                            <table>
                                <tr class="td_t">
                                    <td width=33%>구분</td>
                                    <td width=33%>30분</td>
                                    <td width=33%>10분 초과당</td>
                                </tr>

                                <tr>
                                    <td>소형</td>
                                    <td>500원</td>
                                    <td>200원</td>
                                </tr>

                                <tr>
                                    <td>대형</td>
                                    <td>1000원</td>
                                    <td>400원</td>
                                </tr>
                            </table>
                            <p class="wx">진주성 관광 버스 주차장(서문매표소 도로 건너편)은 무료주차</p>
                        </dd>
                    </dl>

                    <dl>
                        <dt>주차장 안내</dt>
                        <dd>진주성 주차장:주차1급지
                            <ul class="content_bar2">
                                <li>주소:진주시 남강로 626(본성동),지번:진주시 본성동 415번지</li>
                                <li>공복문 주차장(대형 9변,소형 26면)</li>
                                <li>보건소 주차장(소형84면)</li>
                                <li>진주성 관광버스 주차장(관광버스 14면)</li>
                            </ul>
                        </dd>
                        <img src="../../dist/css/cluod_img/lo_img.jpg" alt="" width="700px">
                    </dl>

                    <dl class="content_bar2">
                        <dt>관광 해설사 안내</dt>
                        <dd>진주성 해설은 사전 예약제로 운영 (055-749-7449)</dd>
                    </dl>

                    <dl class="content_bar2">
                        <dt>주변 볼거리</dt>
                        <dd>남가람문화거리, 인사동 골동품거리</dd>
                    </dl>

                    <dl class="content_bar2">
                        <dt>주변 먹거리</dt>
                        <dd>유정장어, 다들, 서울깍두기, 안의갈비탕, 더하우스 갑을, 청산우가</dd>
                        <dd>북경장, 촉석식당, 투깔식당</dd>
                    </dl>

                    <dl class="content_bar2">
                        <dt>기타 유의사항</dt>
                        <dd>식사장소 : 야외공연장 주변, 매점 주변</dd>
                        <dd>쓰레기 봉투 구입 : 100ℓ 1매당 2,850원 ( 공복문 주차장 앞 편의점 )</dd>
                        <!-- <span class="wx">공북문 주차장 앞 이마트24 편의점에서 구입 가능</span> -->
                        <dd>자세한 문의는 진주성관리사업소 관리담당 (055-749-5171)</dd>
                    </dl>


                    <div class="section2_information_in"></div>
                </article>
            </div>
        </div>


        <?php include "../components/layout/survey_form.php"; ?>

    </section>

    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sub0_tour_guide.js"></script>
</body>

</html>