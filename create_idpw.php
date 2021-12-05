<?php
file_put_contents('logindata/'.$_POST['nid'], $_POST['npw']);
header('Location: /login.php');
?>