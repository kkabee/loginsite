<?php
require('lib/print.php');
require('view/top.php');
?>
<script src = "night_day.js">
</script>
    <input type = "button" value = "생성" onclick= "location.href='create.php'">
    <?php
    if(isset($_GET['id'])){ ?>
    <input type = "button" value = "수정" onclick= "location.href='update.php?id=<?=$_GET['id']; ?>'">
    <?php } ?>
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>">
        <p>
            <input type="text" name="title"value="<?php print_title() ?>" placeholder="제목"> 
        </p>
        <p>
            <textarea name="description" placeholder = "본문"><?php print_contents() ?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>

    </form>
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