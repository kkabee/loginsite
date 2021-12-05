<?php
require_once('lib/print.php');
require('view/top.php');
?>

<script src = "night_day.js">
</script>

    <input type = "button" value = "생성" onclick= "location.href='create.php'">
    <?php
    if(isset($_GET['id'])){ ?>
    <input type = "button" value = "수정" onclick= "location.href='update.php?id=<?=$_GET['id']; ?>'">
    
    <form action="delete_process.php" method="post" onsubmit= "return confirm('정말로 삭제하시겠습니까?');">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <br><input type="submit" value="삭제">
    </form> 
    
    <?php } ?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
        <?php
        
        print_contents();
        ?>
    </body>
</html>