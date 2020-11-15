<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>관리자 로그인</title>
    <style type="text/css">
        body,
        input,
        button {
            font-size: 20px
        }
    </style>
    <script type="text/javascript">
        function login_form_check() {
            var uid = document.getElementById("uid");
            var upw = document.getElementById("upw");

            if (!uid.value) {
                alert("아이디를 입력하세요.");
                uid.focus();
                return false;
            };

            if (!upw.value) {
                alert("비밀번호를 입력하세요.");
                upw.focus();
                return false;
            };

            document.login_form.submit();
        };
    </script>
</head>

<body>
    <form name="login_form" action="login_ok.php" method="post">
        <fieldset>
            <legend>관리자 로그인</legend>
            <p>
                <label for="uid">아이디</label>
                <input type="text" name="uid" id="uid">
            </p>
            <p>
                <label for="upw">비밀번호</label>
                <input type="password" name="upw" id="upw">
            </p>
            <p>
                <button type="button" onclick="login_form_check()">로그인</button>
            </p>
        </fieldset>
    </form>
</body>

</html>