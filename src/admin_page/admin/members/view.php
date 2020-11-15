<?php

    include "../inc/sess.php";

    // DB 연결
    include "../inc/dbcon.php";

    // 이전 페이지에서 값 가져오기
    $idx = $_GET["idx"];
    
    // 쿼리 작성
    $sql = "select * from members where idx=$idx;";
    
    // 쿼리 전송
    $result = mysqli_query($con, $sql);
    
    // DB에서 값 가져오기
    $array = mysqli_fetch_array($result);

    // DB 종료
    mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원정보</title>
    <style type="text/css">
        body{font-size:20px}
        .btn{width:110px;padding:5px 0;display:block;float:left;margin-right: 10px;border:1px solid #aaa;text-align:center;text-decoration:none}
    </style>
    <script type="text/javascript">
        function del_con(){
            var i = confirm("정말 삭제하시겠습니까?");
            
            if(i){
                // delete.php에 idx값을 GET 방식으로 전송
                location.href = "delete.php?idx=<?php echo $idx; ?>";
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
        <h3>회원정보</h3>
        <p>
            이름 : <?php echo $array["uname"];?>
        </p>
        <p>
            아이디 : <?php echo $array["uid"];?>
        </p>
        <p>
            이메일 : <?php echo $array["uemail"];?>
        </p>
        <p>
            전화번호 : <?php echo  $array["utel"]; ?>
        </p>
        <p>
            가입일 : <?php echo  $array["ureg_date"]; ?>
        </p>
        <p>
            <a class="btn" href="list.php">목록으로</a>
            <a class="btn" href="edit.php?idx=<?php echo $idx; ?>">수정하기</a>
            <a class="btn" href="#none" onclick="del_con()">회원삭제</a>
        </p>
</body>
</html>
