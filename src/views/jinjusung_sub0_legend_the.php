<?php include "../components/inc/session.php"; ?>
<?php include "../components/inc/dbcon.php"; ?>

<!-- //쿼리작성
$sql = "select * form legend;";

//쿼리전송
$result = mysqli_query($con, $sql);

// db에서 데이터가져오기
// mysqli_fetch_array(); 필드명
// mysqli_fetch_row(); 필드 순서
// mysqli_num_rows(); 행 개수
$num = mysqli_num_rows($result);
?> -->
<?php

// 쿼리 전송
//전체 데이터 수 
$idx = $_GET["idx"];
$sql = "select * from legend where idx=$idx";
$result = mysqli_query($con, $sql); //db에 쿼리 전송
$array = mysqli_fetch_array($result); //db로부터 결과값 반환 (필드순서)


$count_sql = "SELECT * FROM legend;";
$count_result = mysqli_query($con, $count_sql); //db에 쿼리 전송
$table_count = mysqli_num_rows($count_result); //db로부터 결과값 반환 (필드순서)



// echo $array["title"];
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


// 3. 페이지 당 데이터 수 & 블록 당 페이지 수
$list_num = 3; //페이지당 데이터 수
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

// 조회수 증가
$count = "update legend set count=count+1 where idx=$idx";
mysqli_query($con, $count); //db에 쿼리 전송

// echo "$now_bloak";
// echo "$row";
// echo "$t_sql";
// echo $total_page;
// echo "$e_pageNum";
$p_sql = "select * from legend where idx=$idx-1";
$n_sql = "select * from legend where idx=$idx+1";
$p_result = mysqli_query($con, $p_sql); //db에 쿼리 전송
$n_result = mysqli_query($con, $n_sql); //db에 쿼리 전송
$p_array = mysqli_fetch_array($p_result); //db로부터 결과값 반환 (필드순서)
$n_array = mysqli_fetch_array($n_result); //db로부터 결과값 반환 (필드순서)
?>





<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>진주성역사 역사와전설 인물</title>

    <link rel="stylesheet" type="text/css" href="../../dist/css/jinjusung_sub0_legend_the.css">
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
                        <p>진주성역사</p>
                    </dt>

                    <?php include "../components/layout/sub0_2.php"; ?>
                </dl>
            </div>

            <div class="section2_box">
                <div class="section2_text">
                    <div class="text2">
                        <h3>진주성역사</h3>
                        <p><span>진주성역사</span><span>역사와전설</span>전설</p>
                    </div>
                </div>
                <div class="section2_line"></div>

                <article class="section2_information">
                    <h2>진주성이야기_역사와전설 전설</h2>
                    <div class="section2_information_in">


                        <table>
                            <tr>
                                <th colspan="3">
                                    <h3 class="th_title"><?php echo $array["title"] ?></h3>
                                </th>
                            </tr>
                            <tr class="b_n">
                                <td>작성자</td>
                                <td>등록일시</td>
                                <td>조회수</td>
                            </tr>
                            <tr class="b_n">
                                <td><?php echo $array["uwrite"] ?></td>
                                <td><?php echo $array["reg_date"] ?></td>
                                <td><?php echo $array["count"] ?></td>
                            </tr>

                            <tr>
                                <td colspan="3" class="td_img"><img src="../../dist/css/sub0_history_legend/legend<?php echo $array["idx"] ?>.jpg" alt="" width="636px" height="390px"></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text_contents">
                                    <p><?php echo $array["contents"] ?></p>
                                </td>
                            </tr>

                        </table>

                        <br>
                        <table class="b_nb">
                            <?php
                            if ($array["idx"] == $table_count) {

                            ?>

                            <?php
                            } else {
                            ?>
                                <tr style="cursor: pointer;" onclick="location.href='<?php echo $phpself . '?idx=' . $n_array['idx'] ?>'">
                                    <td class="td_title" style="width:14%">다음글 <i class="the_icon_n"></i></td>
                                    <td colspan="5"><?php echo $n_array["title"] ?></td>
                                </tr>
                            <?php
                            } ?>


                            <?php
                            if ($array["idx"] == 1) {

                            ?>

                            <?php
                            } else {
                            ?>
                                <tr style="cursor: pointer;" onclick="location.href='<?php echo $phpself . '?idx=' . $p_array['idx'] ?>'">
                                    <td class="td_title " style="width:14%">이전글 <i class="the_icon_p"></i></td>
                                    <td colspan="5"><?php echo $p_array["title"] ?></td>
                                </tr>
                            <?php
                            } ?>




                        </table>
                        <br>
                        <!-- <a href="#" class="list_b" onclick="history.back()">목록</a> -->
                        <a href="jinjusung_sub0_legend.php" class="list_b">목록</a>
                    </div>
                </article>
            </div>
        </div>

        <?php include "../components/layout/survey_form.php"; ?>
    </section>

    <?php include "../components/layout/footer.php"; ?>
    <script type="text/javascript" src="../../dist/js/jinjusung_sub0_legend.js"></script>
</body>

</html>