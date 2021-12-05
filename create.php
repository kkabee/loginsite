<?php
require('lib/print.php');
require('view/top.php');
?>
<script src = "night_day.js">
</script>
    <input type = "button" value = "생성" onclick= "location.href='create.php'">
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="제목"> 
        </p>
        <p>
            <textarea name="description" placeholder = "본문"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>



    </form>
    </body>
</html>