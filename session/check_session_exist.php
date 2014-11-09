<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
    if($_SESSION['id']!="")
    {
        echo "登入成功<br>您好：".$_SESSION['name'];
        echo "<br><a href='logout.php'>登出</a>";
    }
    else 
    {
        echo "尚未登入。有沒有興趣註冊一個帳號?";
        echo "<a href='register_homework1106.php'>註冊</a>";
    }
    
?>