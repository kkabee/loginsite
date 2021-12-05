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
    $n = 0;
    while($n < count($ids)){
        if($_POST['cid'] == $ids[$n] and $_POST['cpw'] == $pws[$n]){
            echo "<script>location.href = 'index.php'</script>";
        } elseif($n+1 == count($ids) and $_POST['cid'] != $ids[$n]){
         echo "<script>location.href = 'login.php'; alert('아이디 혹은 비밀번호가 틀렸습니다.'); </script>";
        }
    $n += 1;
    }
?>