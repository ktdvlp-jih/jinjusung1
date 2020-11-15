    <script>
        function logout_check() {
            // var log_q = confirm("정말 로그아웃하시겠습니까?");

            // if (log_q == 1) {
            //     location.href = "../components/members/logout.php";
            //     return false;
            // };
            var log_q = confirm("정말 로그아웃하시겠습니까?");
            if (log_q == true) { //확인
                // alert(log_q);
                location.href = "../components/members/logout.php";
            } else { //취소
                return;
            }
        };
    </script>

    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_header.css">

    <header>

        <nav class="gnb">
            <h1 class="jinjusung_logo"><a href="jinjusung_main.php">진주성로고</a></h1>
            <h3>top_menu</h3>
            <ul>
                <li class="gnbcc"><a href="./jinjusung_sub0_outline.php">진주성역사</a>
                    <ul>
                        <li class="gnbcc_li"><a href="./jinjusung_sub0_outline.php">진주성 이야기</a></li>
                        <li><a href="./jinjusung_sub0_history.php">역사와 전설</a></li>
                        <li><a href="https://jinju.museum.go.kr/site/cyber/jinjufortress/" target="_blank">진주성 탐방로</a></li>
                        <li><a href="https://jinju.museum.go.kr/kor/" target="_blank">한눈에 보는 역사</a></li>
                    </ul>
                </li>

                <li class="gnbcc"><a href="./jinjusung_sub1_festival_representation.php">축제체험</a>
                    <ul>
                        <li class="gnbcc_li"><a href="./jinjusung_sub1_festival_representation.php">대표축제</a></li>
                        <li><a href="./jinjusung_sub1_culture_art.php">문화예술체험</a></li>
                    </ul>
                </li>
                <li class="gnbcc"><a href="./jinjusung_sub2_participation_yard_noticeboard.php">참여마당</a>
                    <ul>
                        <li class="gnbcc_li"><a href="./jinjusung_sub2_participation_yard_noticeboard.php">공지사항</a></li>
                        <li><a href="./jinjusung_sub2_participation_yard_freeboard.php">게시판</a></li>
                        <!-- <li><a href="jinjusung_sub2_participation_yard_file.php">자료실</a></li>
                        <li><a href="jinjusung_sub2_participation_yard_photo.php">포토갤러리</a></li> -->
                    </ul>
                </li>
                <li class="gnbcc"><a href="./jinjusung_sub3_guide_traffic_bus.php">가이드</a>
                    <ul>
                        <li class="gnbcc_li"><a href="./jinjusung_sub3_guide_traffic_bus.php">상세주소</a></li>
                        <li><a href="./jinjusung_sub3_guide_traffic_car.php">교통안내</a></li>
                        <!-- <li><a href="./jinjusung_sub3_guide_food_han.php">진주맛집</a></li>
                        <li><a href="./jinjusung_sub3_guide_lodge_1.php">숙박</a></li> -->
                    </ul>
                </li>
            </ul>

            <div class="header_top_menu">
                <dl>
                    <dt></dt>
                    <dd><span class="sitemap_logo"><a href="jinjusung_site_map.php" title="사이트로고"></a></span></dd>
                    <dd><a href="jinjusung_site_map.php" class="sitemap">사이트 맵</a></dd>
                    <dd><span class="language_logo"><a href="#" title="언어변경 로고"></a></span></dd>

                    <dd>
                        <select name="language_change" id="language_change" class="language_top">
                            <option value="한국어">한국어</option>
                            <option value="영어">영어</option>
                            <option value="일어">일어</option>
                            <option value="중어">중어</option>
                        </select>
                    </dd>

                    <?php
                    if (!$s_uid) {
                        echo "<dd><a href=\"./jinjusung_sign_up_page.php\" class=\"login\">로그인</a></dd>";
                        echo "<dd><a href=\"./jinjusung_sign_up_page2.php\" class=\"sign_up\">회원가입</a></dd> ";
                    } else {
                        if ($s_uid == "admin" || $s_idx == 1) { // 관리자 로그인
                            echo "
                                <script>
                                    location.href=\"../admin_page/index.php\"
                                </script>
                            ";
                        } else {
                            echo "<dd><a href=\"#\" class=\"login\" onclick=\"logout_check()\">로그아웃</a></dd>";
                            // echo "<dd><a href=\"../components/layout/delete.php\" class=\"login\" onclick=\"logout_check()\">로그아웃</a></dd>";
                            echo "<dd><a href=\"../components/members/edit.php\" class=\"sign_up\">정보수정</a></dd>";
                        }
                    }
                    ?>
                </dl>
            </div>
        </nav>
        <div class="nav_bg"></div>
    </header>