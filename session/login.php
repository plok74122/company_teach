<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
	$username=$_POST['username'];
	$password=$_POST['password'];
	echo "這是帳號".$username."<br>";
	echo "這是密碼".$password."<br>";
	//接下來就是去資料庫認證瞜
	$conn =mysql_connect("127.0.0.1","root","qwer4321`");
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		echo "連線成功<br>";
		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET CHARACTER_SET CLIENT=utf8");
		mysql_query("SET CHARACTER_SET RESULTS=utf8");
	}
	$sql ="select count(*) from `member`.`user` where `username`='".$username."' and `password`='".$password."'";
	echo "這是資料庫查詢的語法：<br>";
	echo $sql."<br>";
	$result = mysql_query($sql,$conn);
	echo "查詢成功後的指標位置".$result."<br>";
	$x  = mysql_fetch_array($result);
	echo "查詢到的筆數：".$x[0]."<br>";
	if($x[0]==0)
	{
		echo "登入失敗";
	}
	else
	{
		echo "登入成功，不過這次登入成功的資訊我們不只需要筆數，所以我們再來一次。<br>";
	}
	echo "這次我們重組資料庫查詢語法，我們將為一值id與姓名查詢出來<br>";
	$sql="select `id`,`name` from `member`.`user` where `username`='".$username."' and `password`='".$password."'";
	echo "這是資料庫查詢的語法：<br>";
	echo $sql."<br>";
	$result = mysql_query($sql,$conn);
	echo "查詢成功後的指標位置".$result."<br>";
	$x  = mysql_fetch_array($result);
	if($x[0]==0)
	{
		echo "登入失敗";
	}
	else
	{
		echo "登入成功<br>";
		echo "資料庫唯一值：".$x[0]." <br>使用者名稱：".$x[1]."<br>";
		echo "接著我們把資訊寫入Session中<br>";
		$_SESSION['id']=$x[0];
		$_SESSION['name']=$x[1];
		echo "\$_session['id']：".$_SESSION['id']."<br>";
		echo "\$_session['name']：".$_SESSION['name']."<br>";
		echo "<a href='check_session_exist.php'>讓我們去別的網頁檢察一下Session是不是存在</a>";
	}
?>  