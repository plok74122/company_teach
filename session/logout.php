<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
	echo "\$_session['id']：".$_SESSION['id']."<br>";
	echo "\$_session['name']：".$_SESSION['name']."<br>";
	echo "執行Session_destroy()<br>";
	session_destroy();
	echo "登出完畢。";
	echo "<a href='check_session_exist.php'>讓我們去別的網頁檢察一下Session是不是存在</a>";
?>