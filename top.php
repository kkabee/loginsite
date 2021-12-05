<?php
require_once('lib/print.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title><?php print_title(); ?></title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>

        <input type="button" onclick="night_day()" value = "야간모드" id = "nd"><br><br>
        <input type="button" onclick="location.href='login.php'" value = "로그아웃"><br><br>
    <ol>
        <?php
        print_list();
        ?>
    </ol>