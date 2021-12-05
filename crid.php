<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src = "night_day.js">
</script>
<script src = "crid.js">
</script>
<script src = "login.js">
</script>
</head>
<body>
<input type="button" onclick="night_day()" value = "야간모드" id = "nd"><br><br>
<form action="create_idpw.php" method="post">
    <p><label>아이디 : <input type="text" id ="nid" name="nid" ></label> </p>
    <p><label>비밀번호 : <input type="password" id = "npw" name="npw"></label> </p>
    <p><label>비밀번호확인 : <input type="password" name="cnpw"></label> </p>
    <label><input type = "submit" value="생성"></label>
</form>