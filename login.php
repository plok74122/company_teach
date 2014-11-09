<?php
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
		echo "success<br>";
		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET CHARACTER_SET CLIENT=utf8");
		mysql_query("SET CHARACTER_SET RESULTS=utf8");
	}
	$sql ="select count(*) from `member`.`user` where `username`='".$username."' and `password`='".$password."'";
	echo "這是資料庫查詢的語法<br>";
	echo $sql."<br>";
	$result = mysql_query($sql,$conn);
	echo $result."<br>";
	$x  = mysql_fetch_array($result);
	echo "查詢到的筆數：".$x[0]."<br>";
	if($x[0]==0)
	{
		echo "登入失敗";
	}
	else
	{
		echo "登入成功";
	}
?>