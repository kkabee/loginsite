<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src = "night_day.js">
</script>
</head>
<body>
<?php
    $ids = scandir('./logindata');
    $pws = [];
    unset($ids[0]);
    unset($ids[1]);
    $ids = array_values($ids);
    $i = 0;
    while($i < count($ids)){
        array_push($pws,file_get_contents("logindata/".$ids[$i]));
        $i += 1;
    }
    
?>

<input type="button" onclick="night_day()" value = "야간모드" id = "nd"><br><br>
<form action ="confirm.php" method="post">
아이디: <input type="text" name="cid"><br>
비밀번호: <input type = "password" name="cpw"><br>
<input type="submit" value="로그인" ><br><br>
</form>
<input type="button" value="회원가입" onclick= "location.href='crid.php'" >
</body>
</html>