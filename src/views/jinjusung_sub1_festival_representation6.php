<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 축제/체험</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=c28l131ly8"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub1_festival_representation6.css">
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
                        <p><span>축제/체험</span><span>대표축제</span>진주논개제</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_festival_representation6/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_festival_representation6/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_festival_representation6/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_festival_representation6/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_festival_representation6/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_festival_representation6/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_festival_representation6/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>진주논개제</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>2020-05-02 ~ 2020-05-05</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>진주논개제 제전위원회</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>주변 임시주차장 사용</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-746-5001</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>본성동</p>
                                </li>
                                <li><span>이&nbsp;용&nbsp;료</span>
                                    <p>무료 (일부체험행사 유료)</p>
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

                                    <p>천년고도 진주는 예로부터 북평양 남진주라 불릴 정도로 전통예술이 뛰어난 고장으로 유명하다. 진주의 뜻있는 문화예술인들은 지역의 훌륭한 전통예술을
                                        기반으로 임진왜란 당시 진주성에서 순국한 논개를 비롯한 7만 민, 관, 군의 충절과 진주정신을 포괄하면서 시민들이 동참할 수 있는 전통예술축제를
                                        창제하기로 하고 그동안 별개의 행사로 각각 진행되어 오던『의암별제』와 『진주탈춤한마당』을 주축으로 하는 진주논개제를 만들었다. </p>
                                    <p>진주논개제는 매년
                                        5월 넷째 주 금, 토, 일 3일간에 걸쳐서 호국충절의 성지 진주성에서 개최되며, 1868년 당시 진주 목사 정현석이 창제한 것으로서 제향에
                                        악, 가, 무가 포함되고 여성들만이 제관이 될 수 있는 독특한 형식의 제례인 의암별제를 서막으로 진주오광대를 비롯한 민속예술과 진주기생들이 남긴
                                        교방문화의 아름다움을 느낄 수 있는 자리로 이어지고 있다. 가장 지역적인 것이 가장 세계적이라는 말이 있다. </p>

                                    <p>모름지기 진주논개제는 어느
                                        지역에서도 흉내 낼 수 없는 진주만이 가지고 있는 것들을 소재로 하기 때문에 세계적 축제로서 발전을 기대하며 또한 전통예술 위주로 봄에 열리는
                                        논개제는 순수예술 중심으로 가을에 열리는 개천예술제 및 진주남강유등축제와 함께 진주를 문화예술의 고장이란 명성에 걸맞은 축제의 도시로 거듭나게
                                        할 것이다.</p>

                                    <p>○ 목적</p>
                                    <p>논개의 충절정신 현창과 전통문화의 올바른 계승보존 및 복원, 의암별제와 탈춤 한마당을 통한 민족의 잃어버린 축제의 전통 재생과 진주만이 가지고
                                        있는
                                        역사와 전통문화를 토대로 한 새로운 지역축제의 창조, 지역주민이 주도적으로 참가하는 올바른 축제전형 제시</p>

                                    <p>○ 성격</p>
                                    <p>진주지역의 고유한 전통예술에 기반을 두면서 임진왜란 시 진주성에서 순국한 논개를 비롯한 7만 민, 관, 군의 충절과 진주정신을 이어가고 전 시민이
                                        동참할 수 있는 축제</p>

                                    <p>○ 형식</p>
                                    <p>진주에서만이 행해져 온 교방문화의 뛰어난 제의성과 예술성이 돋보이는 의암별제와 탈춤을 중심으로 풍자와 해학, 놀이 성, 축제성이 돋보이는
                                        진주탈춤한마당을 결합하고 진주의 무형문화재 등 지역의 다양한 전통예술을 총망라하여 진주의 독자적인 전통문화 예술축제로 만듦</p>

                                    <p>○ 본 행사</p>
                                    <p>
                                        헌다례, 신위순행 퍼레이드, 의암별제, 논개순국 재현극, 전통혼례 등</p>

                                    <p>○ 부대행사</p>
                                    <p>의암별제 체험, 교방문화 체험, 교방의상 체험, 진주성 전통풍물장터 재현, 진주목사 집무체험, 진주교방의 악가무, 교방행렬,‘의기 논개’자료전,
                                        기념품
                                        부스 운영 등</p>

                                    <p>○ 동반행사</p>
                                    <p>진주 스트릿댄스 페스티벌, 진주 밴드 음악축제, 진주탈춤 한마당, 덧배기춤 경연대회 등</p>
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
    <script type="text/javascript" src="../../dist/js/jinjusung_sub1_festival_representation6.js"></script>
</body>

</html>