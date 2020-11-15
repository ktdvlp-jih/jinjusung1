<?php include "../components/inc/session.php"; ?>
<?php include "../components/inc/dbcon.php"; ?>

<!--  -->
<!-- //쿼리작성
$sql = "select * form noticeBoard;";

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
// $sql = "select * form freeboard;";
// $sql = "SELECT * FROM freeboard;";
// $sql = "select * from freeboard;";
// $sql = "select * from qna ;";
// $sql = "select * from freeboard order by idx desc;";

// $result = mysqli_query($con, $sql);
// 쿼리 전송
//전체 데이터 수 
$t_sql = "select count(*) from freeboard;"; // 쿼리문 작성 // row갯수를 셈 행의 갯수
// $ss = "select * from freeboard;"; // 쿼리문 작성 // row갯수를 셈 행의 갯수
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
$list_num = 7; //페이지당 데이터 수
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

$count = "update freeboard set count=count+1 where idx=$idx";
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
    <title>공지사항 새소식</title>


    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub2_participation_yard_freeboard.css">
    <link rel="stylesheet" type="text/css" href="../../dist/css/jquery.bxslider.css">
    <script type="text/javascript" src="../../dist/js/jQuery3.5.1.js"></script>
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
                        <p>참여마당</p>
                    </dt>

                    <?php include "../components/layout/sub2_2.php"; ?>

                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>참여마당</h3>
                        <p><span>참여마당</span><span>공지사항</span>새소식</p>
                    </div>
                </div>
                <div class="section2_line"></div>

                <article class="section2_information">
                    <h2>진주성이야기_새소식</h2>
                    <div class="section2_information_in">

                        <form action="" id="form_table" name="form_table" method="get">
                            <fieldset>
                                <legend>글검색</legend>
                                <div>
                                    <select name="select_t" id="select_t" class="select_t">
                                        <option value="제목">제목</option>
                                        <option value="작성자">작성자</option>
                                        <option value="내용">내용</option>
                                    </select>
                                    <input type="text" name="input_t" id="input_t" class="input_t">
                                    <button type="button">검색</button>
                                    <span class="page_num"> 현재 페이지 <?php echo $page ?></span>
                                </div>
                            </fieldset>
                        </form>

                        <table>
                            <?php
                            // 9. 구해진 값에 따라 DB에서 데이터 구하기
                            // LIMIT(시작글 배열번호, 개수) 사용
                            // (배열) 시작 데이터 인덱스 = (현재페이지 번호 -1) * 페이지당 보여질 개수
                            $start = ($page - 1) * $list_num;
                            //"select*from $noticeBoard order by idx desc limit $start, $list_num";
                            $sql = "select*from freeboard order by idx desc limit $start, $list_num";
                            // echo "$sql";
                            $result = mysqli_query($con, $sql);



                            // echo "$sql";
                            // 글번호 : 전체데이터 - ((현재 페이지 번호 -1) * 페이지당 보여질 개수);
                            $list_count = $total_count - (($page - 1) * $list_num);
                            while ($array = mysqli_fetch_array($result)) { // mysqli_fetch_array(); 필드명

                            ?>
                                <tr>
                                    <td>

                                        <a href="jinjusung_sub2_participation_yard_freeboard_the.php?idx=<?php echo $array["idx"]; ?>">
                                            <p> <?php echo "[" . $array["idx"] . "]" . " " . $array["title"]; ?></p>
                                            <p><?php echo $array["contents"] ?></p>
                                            <br>
                                            <p class="p_i"><?php echo " 작성자 " . $array["uwrite"], " / 등록일 " . $array["reg_date"], " / 조회수 " . $array["count"] ?></p>
                                        </a>

                                    </td>
                                </tr>

                            <?php
                                $list_count--;
                            } //반복문 종료

                            ?>
                        </table>
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
                        <a href="jinjusung_sub2_participation_yard_freeboard_text.php" class="text_button">글쓰기</a>





                    </div>
                </article>
            </div>
        </div>

        <?php include "../components/layout/survey_form.php"; ?>
    </section>

    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sub2_participation_yard_freeboard.js"></script>
</body>

</html>