<?php 
    include "../inc/session_admin.php.php";

    // DB 연결
    include "../inc/dbcon.php";

    // 쿼리 작성
    $sql = "select * from members;";
    
    // 쿼리 전송
    $result = mysqli_query($con, $sql);

    // DB에서 데이터 가져오기
    // mysqli_fetch_array : 필드명
    // mysqli_fetch_row : 필드 순서
    // mysqli_num_rows : 행 개수
    $num = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원 관리</title>
    <style type="text/css">
        body{font-size:20px}
        td{text-align:center}
    </style>
    <script type="text/javascript">
        function logout_check(){
            var q = confirm("정말 로그아웃하시겠습니까?");
            
            if(q){
                location.href="../logout.php";
            };
        };
    </script>
</head>
<body>
    <h2>관리자 페이지</h2>
    <p>
        안녕하세요. 관리자님 
        <a href="#none" onclick="logout_check()">로그아웃</a>
    </p>
    <p>
        <a href="../admin.php">처음으로</a>
        <a href="list.php">회원관리</a>
        <!--<a href="../notice/list.php">공지사항 관리</a>-->
        <a href="#none">공지사항 관리</a>
    </p>
    <hr>
    <p>
        총 : <span class=""><?php echo $num; ?></span>명
    </p>
    <table border="1" cellpadding="5">
        <tr>
            <td width="50">번호</td>
            <td width="100">이름</td>
            <td width="100">아이디</td>
            <td width="200">전화번호</td>
            <td width="300">이메일</td>
            <td width="150">가입일</td>
            <td width="80">보기</td>
            <td width="80">수정</td>
            <td width="80">삭제</td>
        </tr>
        
        <?php
        echo $num;
            for($i=1; $i<=$num; $i++){
                
            // DB에서 데이터 가져오기
            $array = mysqli_fetch_array($result);
            
        ?>
        
        <tr>
            <td width="50"><?php echo $i; ?></td>
            <td width="100"><?php echo $array["uname"]; ?></td>
            <td width="100"><?php echo $array["uid"]; ?></td>
            <td width="200"><?php echo $array["utel"]; ?></td>
            <td width="300"><?php echo $array["uemail"]; ?></td>
            <td width="150"><?php echo $array["ureg_date"]; ?></td>
            <td width="80">
                <a href="view.php?idx=<?php echo $array["idx"]; ?>">보기</a>
            </td>
            <td width="80">
                <a href="edit.php?idx=<?php echo $array["idx"]; ?>">수정</a>
            </td>
            <td width="80">
                <a href="delete.php?idx=<?php echo $array["idx"]; ?>">삭제</a>
            </td>
        </tr>
        
        <?php
            }
        ?>
        
    </table>
</body>
</html>










