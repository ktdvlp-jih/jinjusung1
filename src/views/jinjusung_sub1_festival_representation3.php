<?php include "../components/inc/session.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성 축제/체험</title>
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=c28l131ly8"></script>
    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub1_festival_representation3.css">
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
                        <p><span>축제/체험</span><span>대표축제</span>코리아 드라마 페스티벌</p>
                    </div>
                </div>

                <div class="section2_line"></div>

                <article class="section2_information">
                    <div class="section2_information_in">
                        <div class="section2_bg">
                            <img id="section2_bg" src="../../dist/css/sub1_festival_representation3/small_bg1.jpg" alt="section2_bg" title="사진1" width="660px" height="383px">
                            <div class="small_bg">
                                <ul>
                                    <li>
                                        <img id="bg_left" class="bg_left" src="../../dist/css/sub1_festival_representation3/bg_left.png" alt="이전" title="이전" onclick="changeImage_left()"></li>
                                    <li>
                                        <img id="small_bg1" class="small_bg1" src="../../dist/css/sub1_festival_representation3/small_bg1.jpg" alt="사진1" title="사진1" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg2" class="small_bg2" src="../../dist/css/sub1_festival_representation3/small_bg2.jpg" alt="사진2" title="사진2" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg3" class="small_bg3" src="../../dist/css/sub1_festival_representation3/small_bg3.jpg" alt="사진3" title="사진3" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="small_bg4" class="small_bg4" src="../../dist/css/sub1_festival_representation3/small_bg4.jpg" alt="사진4" title="사진4" onclick="changeImage(this.src,this.alt,this.title)">
                                    </li>
                                    <li>
                                        <img id="bg_right" class="bg_right" src="../../dist/css/sub1_festival_representation3/bg_right.png" alt="다음" title="다음" onclick="changeImage_right()">
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="guide_box">
                            <h2 class="content_bar2">관람안내</h2>
                            <ul class="guide_box1">
                                <li><span>명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;칭</span>
                                    <p>코리아 드라마 페스티벌</p>
                                </li>
                                <li><span>기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간</span>
                                    <p>2020-10-01 ~ 2020-10-11</p>
                                </li>
                                <li><span>주&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;관</span>
                                    <p>코리아드라마페스티벌 조직위원회</p>
                                </li>
                                <li><span>주차시설</span>
                                    <p>주변 임시주차장 사용</p>
                                </li>
                                <li><span>전화번호</span>
                                    <p>055-755-2363</p>
                                </li>
                                <li><span>위&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;치</span>
                                    <p>강남로 215 경남문화예술회관</p>
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
                                    <p>국내·외 팬들의 사랑을 받고 있는 드라마와 스타를 직접 만나볼 수 있는 국내 최고의 한국드라마 축제</p>

                                    <p class="content_bar3">○ 행사소개</p>

                                    <p>한류라는 단어가 본격적으로 세(勢)를 얻기 시작한지 어느덧 17년이 지났습니다.</p>
                                    <p>강산이 변한다는 시간동안 한류는 꾸준히 변화의 흐름을 만들어 왔습니다. 드라마, 영화, 음반, 뮤지컬에 이르기까지 한류에 의해 파생된 문화 컨텐츠
                                        수출은 매년 증가되고 있습니다.</p>
                                    <p>따라서 한류의 부가가치를 높이기 위한 장기전략 차원에서 드라마를 컨텐츠로 한 코리아 드라마 페스티벌은 이제 천년의 멋과 여유가 살아 숨쉬는 역사와
                                        전통의 고장 진주에서 신(新) 한류문화의 불빛을 밝힙니다.</p>

                                    <p class="content_bar3">○ 공연프로그램</p>
                                    <p>- 코리아드라마어워즈</p>
                                    <p>지난 1년간 방영된 모든 드라마를 만나는 최고의 코리아드라마어워즈. TV드라마를 대상으로 방송 3사와 종편4사, 케이블을 통합하여 진행하는 국내 최대의
                                        드라마 시상식이며, 각계 전문가로 구성된 심사위원의 엄격한 심사를 거쳐 수상자를 선정하고 시상합니다.</p>
                                    <p>- 드라마O.S.T콘서트</p>
                                    <p>드라마 속에서 만나볼 수 있었던 주옥같은 O.S.T곡들을 콘서트를 통해 한자리에서 만나볼 수 있는 기회로 다양한 색깔을 구사하는 뮤지션과 함께 드라마와
                                        음악을 즐기는 공연.</p>

                                    <p class="content_bar3">○ 영상산업 연계 프로그램</p>

                                    <p>- 드라마 영상 국제포럼</p>
                                    <p>국내와 해외 드라마 트렌트와 기술 ․ 환경에 대해 논의하며 더 나은 제작 환경 조성과 콘텐츠 개발, 기술공유를 위한 포럼</p>
                                    <p>- 한류테마투어</p>
                                    <p>어워즈나 콘서트 관람, 축제행사장 방문을 메인테마로 하고 합천영상 테마파크, 창원해양세트장 등 유명 촬영지나 인근지역 명소를 연계한 투어 프로그램 운영</p>

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
    <script type="text/javascript" src="../../dist/js/jinjusung_sub1_festival_representation3.js"></script>
</body>

</html>