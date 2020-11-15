<?php
include "../inc/session.php";
include "../inc/dbcon.php";

$sql = "delete from members where idx=$s_idx;";

mysqli_query($con, $sql);
// mysqli_close($con);

unset($_SESSION["uid"]);
unset($_SESSION["uname"]);
unset($_SESSION["idx"]);

// echo"$sql";

echo "

<script>
    alert(\"탈퇴 되었습니다.\");
    location.href=\"../../views/jinjusung_main.php\"
</script>
";
