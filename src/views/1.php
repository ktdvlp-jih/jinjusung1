<?php include "../components/inc/session.php"; ?>
<?php include "../components/inc/dbcon.php"; ?>

<!-- //쿼리작성
$sql = "select * form human;";

//쿼리전송
$result = mysqli_query($con, $sql);

// db에서 데이터가져오기
// mysqli_fetch_array(); 필드명
// mysqli_fetch_row(); 필드 순서
// mysqli_num_rows(); 행 개수
$num = mysqli_num_rows($result);
?> -->
<?php
// include "../inc/sess.php";

// DB 연결
// include "../../inc/dbcon.php";

// 쿼리 작성
// $sql = "select * form human;";
// $sql = "SELECT * FROM human;";
// $sql = "select * from human;";
// $sql = "select * from qna ;";
// $sql = "select * from human order by idx desc;";

// $result = mysqli_query($con, $sql);
// 쿼리 전송
//전체 데이터 수 
$t_sql = "select count(*) from human;"; // 쿼리문 작성 // row갯수를 셈 행의 갯수
// $ss = "select * from human;"; // 쿼리문 작성 // row갯수를 셈 행의 갯수
// $num = mysqli_num_rows($result);
$t_result = mysqli_query($con, $t_sql); //db에 쿼리 전송
$row = mysqli_fetch_row($t_result); //db로부터 결과값 반환 (필드순서)
// $asd = mysqli_num_rows($t_result);
$total_count = $row[0];


// echo "<br>t_sql :" . $t_sql;
// echo "<br>t_total :" . $t_sql;
// echo "<br>t_total_count : " . $total_count;
// echo "<br>t_total_count : " . $asd;

// echo "<br>t_total_count : " . $row;

// 1. 총 데이터의 수


// 2. 페이지 번호가 없을 경우 페이지 초기값 선언

// if(!$page){
//     $page = 1;
// }else{
//     $page = $_GET["page"];
// }
$page = $_GET["page"] ? $_GET["page"] : 1;
// echo $page;

// 3. 페이지 당 데이터 수 & 블록 당 페이지 수
$list_num = 8; //페이지당 데이터 수
$page_num = 10; //블록당 페이지 수

// 4. 총 페이지 수 = 총 데이터 / 페이지 당 데이터 수
$total_page = ceil($total_count / $list_num); //ceil 실수를 정수로 반올림 해줌

// 5. 총 블록 수 = 총 페이지의 수 / 블록 당 페이지 수
$total_bloak = ceil($total_page / $page_num);

// 6. 현재 블록번호 = 현재 페이지 번호/ 블록당 페이지 수
$now_bloak = ceil($page / $page_num);

// 7. 각 블록 당 시작 페이지 = (해당글의 블록번호-1) * 블록 당 페이지 수+ 1
$s_pageNum = ($now_bloak - 1) * $page_num + 1;
//페이지가 0인 경우 1로 치환
if ($s_pageNum <= 0) {
    $s_pageNum = 1;
}



// 8. 종료 페이지 설정 = 해당글의 블록번호 * 블록당 페이지 수
$e_pageNum = $now_bloak * $page_num;
// echo $e_pageNum;
// echo $s_pageNum;
// 종료 페이지 번호가 최대 페이지 수를 넘지 않도록 설정
if ($e_pageNum > $total_page) {
    $e_pageNum = $total_page;
}


// echo $total_page;
// echo $e_pageNum;
/* ***현재 실행되고 있는 페이지의 url을 구합니다.*** */
$phpself = $_SERVER["PHP_SELF"];
// echo $phpself;

$count = "update human set count=count+1 where idx=$idx";
mysqli_query($con, $count); //db에 쿼리 전송
// echo "$now_bloak";
// echo "$row";
// echo "$t_sql";
// echo $total_page;
// echo "$e_pageNum";
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>역사와전설</title>

    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub0_human.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery 3.5.1.js"></script>
    <script type="text/javascript" src="../../dist/js/jquery.bxslider.js"></script>

</head>

<body>

    <?php include "../components/layout/header.php"; ?>

    <section class="section1_bg">
        <h2 class="section1_box">진주성 이야기</h2>
    </section>

    <section class="section2_wrap">
        <div class="section2">
            <div class="section2_snb">
                <dl>
                    <dt class="section2_snb_menu"><span class="section2_snb_logo">section2_snb_logo</span>
                        <p>진주성역사</p>
                    </dt>

                    <?php include "../components/layout/sub0_2.php"; ?>
                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>진주성역사</h3>
                        <p><span>진주성역사</span><span>역사와전설</span>인물</p>
                    </div>
                </div>
                <div class="section2_line"></div>

                <article class="section2_information">
                    <h2>진주성이야기_인물</h2>
                    <div class="section2_information_in">
                        <?php
                        // 9. 구해진 값에 따라 DB에서 데이터 구하기
                        // LIMIT(시작글 배열번호, 개수) 사용
                        // (배열) 시작 데이터 인덱스 = (현재페이지 번호 -1) * 페이지당 보여질 개수
                        $start = ($page - 1) * $list_num;
                        //"select*from $human order by idx desc limit $start, $list_num";
                        $sql = "select * from human order by idx asc limit $start, $list_num";
                        // echo "$sql";
                        $result = mysqli_query($con, $sql);



                        // echo "$sql";
                        // 글번호 : 전체데이터 - ((현재 페이지 번호 -1) * 페이지당 보여질 개수);
                        $list_count = $total_count - (($page - 1) * $list_num);
                        while ($array = mysqli_fetch_array($result)) { // mysqli_fetch_array(); 필드명

                        ?>
                            <a href="jinjusung_sub0_human_the.php?idx=<?php echo $array["idx"]; ?>">
                                <table>

                                    <tr>
                                        <th><?php echo $array["title"] ?></th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $array["contents"] ?></td>
                                    </tr>


                                <?php
                                $list_count--;
                            } //반복문 종료

                                ?>
                                </table>
                            </a>
                            <ul>
                                <?php
                                if ($page > 1) {
                                ?>
                                    <li class="aside_box_left"> <a href="<?php $phpself ?>?page=<?php echo $page - 1 ?>" target="_self">이전 목록</a></li>
                                <?php
                                } else {
                                ?>

                                <?php
                                }
                                ?>
                                <?php
                                // 10. for 문을 이용하여 하단에 페이지 번호 출력
                                // 각 번호에 실제 페이지 번호 변수처리하여 링크
                                // echo "<p>1</p>";

                                // for ($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++) {
                                for ($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++) {
                                    // echo "<p>1</p>";
                                    // echo "<p>$print_page</p>";
                                ?>

                                    <li class="aside_box_list"> <a href="<?php $phpself ?>?page=<?php echo $print_page ?>"><?php echo $print_page ?></a></li>
                                    <!-- <p>asd</p> -->

                                <?php
                                }
                                ?>
                                <!-- 다음 -->

                                <?php
                                // echo $total_page;
                                if ($page < $total_page) {
                                ?>
                                    <li class="aside_box_right"><a href="<?php $phpself ?>?page=<?php echo $page + 1 ?>" target="_self">다음 목록</a></li>
                                <?php
                                } else {
                                ?>
                                    <!-- <li class="aside_box_right"><a href="<?php $phpself ?>?page=<?php echo $page + 1 ?>" target="_self">다음 목록</a></li> -->

                                <?php
                                }
                                ?>
                                <!-- <li class="aside_box_top_right"><a href="#">제일 끝번째 목록</a></li> -->
                            </ul>

                            <!-- //asd -->

                            <!-- <dl>
                            <dt>강귀손(姜龜孫)</dt>
                            <dd>
                                세종 32년(1450)에 나서 연산군 11년(1505)에 세상을 떠나신 조선조의 문신으로 자는 용휴이며 진주강씨 좌찬성 강희맹의 아들이다. 특채로 군기지
                                주부가 되었고 돈영부 첨정을 거친 뒤 성종 10년(1479) 별시문과에 급제하여 사재감정, 좌통례를 거쳐 성종 16년(1485) 상주목사가 되고 이어서
                                판결사, 부제학, 도승지를 거쳐 연산군 3년(1497) 경기도 관찰사가 되었다. 이듬해 무오사화 때 대사헌으로 김일손 등을 가볍게 벌주도록 주장하였다. 이어서
                                이조, 병조, 형조의 판서를 두루 역임하고 연산군 6년(1500) 진원군에 봉작되고 세자 책봉의 주청사가 되어 명나라에 갔다가 돌아온 뒤 좌찬성이 되었다.
                                연산군 11년(1505) 우의정에 올라 등극사가 되어 명나라에 가는 도중 평안도의 노중에서 세상을 떠났다. 시호는 숙헌이다.
                            </dd>
                        </dl>

                        <dl class="section2_information_R">
                            <dt>강덕용(姜德龍)</dt>
                            <dd>임진왜란 때 왜구들이 영남지방에 가득찼을 때 고을의 수령들과 군민들이 모두 산속으로 피난갔었는데 초유사, 김성일이 그를 불러 함창현감을 겸임시켰더니 있는 힘을
                                다하니 그 성의가 너무나 간곡하여 흩어졌던 고을 사람들이 돌아와 모이게되었다. 이듬해 적이 울산으로 물러나 진치고 있는데 명나라의 장수가 상주와 대구 사이에
                                주둔하게 되었다. 이때 그는 명나라군대를 지성으로 보살피니 감사가 그에게 양료차관에 능하다는 것을 알고 3도의 음식물 보내는 업무를 총지휘케 하였더니 그는
                                마음을 다해 계획을 세워 이를 처리해 나가니 군량이 끊어지지 않아 사람마다 모두 기뻐하였고 명나라 군사도 역시 그를 경애하였다. 오리 이원익이 체찰사가되어
                                호남에서 집무하고 있었는데 그를 불러 체찰부의 아문장으로 삼았고 곧 본부 영장으로 승진되었다. 일찍이 정기룡 병마절도사를 쫓아서 성주의 화원현에서 적을 만나
                                싸워서 크게 이겼고 고령 안림역에서도 적을 크게 무찔렀다. 별장 우배선과의 합동작전으로 삼가에서 적을 쳐서 크게 이긴바 있었다. 그가 목숨을 거두니 일실이
                                숙연하였고 다만 장검 한 자루와 단금 하나가 있었을 정도로 청렴하게 살았었다.</dd>
                        </dl>

                        <dl class="section2_information_B">
                            <dt>강맹경(姜孟卿)</dt>
                            <dd>태종 10년(1410)에 나서 세조 7년(1461)에 세상을 뜨신 조선조의 문신으로 자는 자장이며, 진주강씨 강우덕의 아들이다. 세종 11년(1429)
                                식년문과에 급제하여 예문관의 벼슬을 두루 거쳐 세종 30년(1448) 지승정원사가 되었고, 문종 2년(1452) 도승지, 단종 1년(1453) 이조참판으로
                                있으면서 계유정난 때 수양대군을 도왔고, 수양대군이 왕위에 오르자 좌익공신 2등에 뽑혀 진산부원군에 봉작 되었다. 그 뒤 좌참찬을 거쳐 세조 3년(1457)
                                우의정으로 있으면서 등극사가 되어 명나라에 다녀와서 좌의정이 되었고, 세조 5년(1459) 영의정이 되었다. 그는 성품이 침착하고 너그러우며 또한 강직,
                                근엄하여 대신의 기품이 있었고 타고난 바탕이 체격이 크고 훌륭하였으며, 의례와 법도에 밝았다. 빈례와 제례의 큰 예식이 있을 때마다 임금께서 반드시 그로
                                하여금 빈객을 맞이하게 하니 조금도 어긋남이 없었다. 황희가 정승이 되었을 때 요좌가 되었는데 황희가 말하기를 "내가 많은 사람을 보았지만 그대는 큰 그릇이니
                                10년 못가서 내 자리를 차지할 것이다"하였는데 과연 그의 말대로 되었다. 임금께서 그의 집에 순행하여 집의 기둥이 섞었음을 보고 놀라 급히 수리케 하였으니
                                그의 청백함을 가히 짐작할만 하다. 이계전이 연경에 갔을 때 그곳 주객랑중이 일찍 조회하는 시를 짓기를 청하였다. 이 계전이 대단히 곤란하여 목은 이 색의 글
                                가운데서 "조조 대명궁"이라는 시의 글귀를 써서 보였더니 주객랑중이 크게 칭찬을 하였다. 그 뒤에 그가 연경에 사신으로 가게 되었을 때, 이계전이 그를
                                회롱하기를 "중국 선비들이 글을 시험하면 그대는 어찌 하려는고"하니, 그는 곧 그 말을 받아 "우리집에도 통정집(그의 조부 강회백의 문집)이 있으니 무슨
                                걱정인가"하였더니 좌중에 있던 사람들이 모두 포복절도 하였다. 이는 이계전이 자기 글이 아닌 윗대 할아버지의 글을 제글처럼 써 먹은 것을 빈정댄 것이다.
                                시호는 문경이다.</dd>
                        </dl>

                        <dl class="section2_information_B section2_information_R">
                            <dt>강문회(姜文會)</dt>
                            <dd>세종 15년(1433)에 나서 연산군 11년(1505)에 세상을 뜨신 조선조의 문신으로 자는 우인, 호는 소요당이며 진주강씨 광양 현감 강행 아들이다. 단종
                                1년(1453) 사마시에 급제하였고, 예종 1년(1469) 식년문과에 급제하여 벼슬은 저작이 되었다. 성종 7년(1476) 전적을 거쳐 오랫동안 양사의 언관을
                                지내다가 연산군이 왕위에 오른 뒤 정치가 날로 어지러워지자 은퇴하여 고향으로 돌아와 여생을 저술과 독서로 보냈다. 조계원이 지은 그의 묘갈에서 이르기를 "그는
                                자질과 품성이 이미 고명하였고, 학술이 또한 참다움을 얻어서 정자와 주자로서 중심을 삼고 성과 경으로 돌아가 지절을 삼으니 평생 제행한 높음이 진실로 일세의
                                큰 선비였다. 그의 문장은 조회에 얽매이지 않고 더욱 시에 능해서 한 때 사단의 주맹이 되니 배움길에 있는 자들이 서로 사모하여 원근에서 모여들어 재주에 따라
                                가르침을 받아 각각 성취하였으니 관포 어득강 초계군수 김수돈 교리 이적등이 모두 그의 문하에 나왔고 그 나머지 근행한 선비들이 또한 많으니 한때의 현송하는
                                성함을 정강성에게 견주었다"하였다. 뒷날 예조판서를 추증하였다.</dd>
                        </dl>

                        <dl class="section2_information_B">
                            <dt>강석덕(姜碩德)</dt>
                            <dd>태조 4년(1395)에 나서 세조 5년(1459)에 세상을 뜨신 조선조의 문신으로 자는 자명, 호는 완역재이며 진주강씨 정당문학 강회백의 아들이다. 특채로
                                계성전직이 된 뒤, 지양근군사가 되어 선정을 베풀었고, 그 공으로 인수부 소윤에 발탁되었다. 이어서 집의를 거쳐 태종 16년(1416) 공조좌랑이 되었으나
                                이해 천추사가 갖고간 무역물자 중에서 공조에서 납품한 은이 중국에서 가짜로 판명되어 그 책임을 지고 파면되었다. 세종 5년(1423) 다시 복직이 되어
                                우부승지가 되고, 좌승지를 거쳐 세종 26년(1444) 호조참판 이듬해에 개성부 유수 뒤에 지돈영부사에 올랐다. 그는 시에 뛰어나고 글씨를 잘 썼다. 시호는
                                대민이다.</dd>
                        </dl>

                        <dl class="section2_information_B section2_information_R">
                            <dt>강숙경(姜叔卿)</dt>
                            <dd>세종 10년(1428)에 나서 성종 12년(1481)에 세상을 떠난 조선조의 문신으로 자는 경장, 호는 수헌이며 진주강씨이다. 그는 일찍이 어버이를 여의고
                                홀어머니의 교훈을 받아 호사함을 버리고 글 읽기에 열중하니 이미 대의를 통달했다. 세종이 왕위에 오르자 내외에 인재를 추천케 하였더니 그의 이름이 제일
                                많았다. 임금께서 그 어짐을 알고 장차 불러 쓰려했으나 어머니가 늙었다 하여 각별히 보살펴 함안군수를 제수하여 그 홀어머니를 봉양케했었다. 그가 나이 어릴 때
                                밀양부사가 되었다. 그러나 고을을 다스림에 있어서 위엄과 은혜로 보살피니 간악함과 교활함이 없어지고 한 고을이 평온하였다. 뒤에 강원도 도사를 거쳐 집의에
                                올랐었다.</dd>
                        </dl> -->

                            <!-- <ul>
                            <li id="aside_box_top_left"><a href="#">제일 첫번째 목록</a></li>
                            <li id="aside_box_left"><a href="#">이전 목록</a></li>
                            <li id="aside_box_list1"><a href="#" title="1">1</a></li>
                            <li id="aside_box_list2"><a href="#" title="2">2</a></li>
                            <li id="aside_box_list3"><a href="#" title="3">3</a></li>
                            <li id="aside_box_list4"><a href="#" title="4">4</a></li>
                            <li id="aside_box_list5"><a href="#" title="5">5</a></li>
                            <li id="aside_box_right"><a href="#">다음 목록</a></li>
                            <li id="aside_box_top_right"><a href="#">제일 끝번째 목록</a></li>
                        </ul> -->
                    </div>
                </article>
            </div>
        </div>

        <?php include "../components/layout/survey_form.php"; ?>
    </section>

    <?php include "../components/layout/footer.php"; ?>
</body>

</html>

<script type="text/javascript" src="../../dist/js/jinjusung_sub0_history.js"></script>