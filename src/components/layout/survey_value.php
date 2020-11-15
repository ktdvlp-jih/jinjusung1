<!-- <script>
    alert("정보제공 감사드립니다.")
</script> -->
<?php

$s_vl = $_POST["survey_radio"];
$s_vt = $_POST["s_vt"];
$reg_datetime = date("Y-m-d-H:i:s");
// echo "
// <script>
//             alert(\"정보제공 감사드립니다.\");
// </script>
// ";
include "../inc/dbcon.php";

$sql = "insert into surveys(
    s_vl,s_vt,reg_datetime
        ) value(
            '$s_vl','$s_vt','$reg_datetime'
        );";

mysqli_query($con, $sql);

// mysqli_close($con);
// echo $sql;


echo
    "
        <script>
            // 이전페이지 주소값 받기
            alert(\"소중한 의견 감사합니다.\");        
            var referrer =  document.referrer;

             location.replace(referrer);
        </script>
    ";;
?>

<script>