<link rel="icon" type="image/png" href="/images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>타이틀</title>
<script language="JavaScript">
  function setCookie(name, value, expiredays) {
    var todayDate = new Date();
    todayDate.setDate(todayDate.getDate() + expiredays);
    document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";";
  }

  function closePop() {
    if (document.frm.pop.checked) {
      setCookie("popname", "done", 1);
    }
    self.close();
  }
</script>
<style type="text/css">
  body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
  }
</style>


<form name="frm" method="post" action="">
  <table width="" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td><img src="../images/pop1.jpg" width="100%" height="100%" border="0"></td>
      </tr>
      <tr>
        <td height="30" align="right" bgcolor="#000000">
          <table border="0" cellpadding="0" cellspacing="2">
            <tbody>
              <tr>
                <td><input class="PopupCheck" type="checkbox" name="pop" onclick="closePop()"></td>
                <td style="font-size:11px;color:#FFFFFF;">1일동안 이 창을 열지 않음</td>
                <td style="font-size:11px;"><a href="javascript:self.close();" onfocus="this.blur()">[닫기]</a></td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</form>