<?php
    session_start();
    header("Content-Type:text/html; charset=utf-8");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	echo "這是帳號：".$username."<br>";
	echo "這是密碼：".$password."<br>";
	echo "這是姓名：".$name."<br>";
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
	$sql ="select count(*) from `member`.`user` where `username`='".$username."'";
	echo "這是資料庫查詢的語法：<br>";
	echo $sql."<br>";
	$result = mysql_query($sql,$conn);
	echo "查詢成功後的指標位置".$result."<br>";
	$x  = mysql_fetch_array($result);
	echo "查詢到的筆數：".$x[0]."<br>";
	if($x[0]!=0)
	{
		echo "<script>alert('這個帳號已經存在');history.go(-1);</script>";
	}
	else
	{
		echo "帳號不存在，開始組合資料庫語法，使用insert<br>";
		$sql ="insert into `member`.`user` (`username`, `password`, `name`) value ('".$username."','".$password."','".$name."')";
    	echo "這是資料庫寫入的語法：<br>";
    	echo $sql."<br>";
    	$result = mysql_query($sql,$conn);
    	if($result==1)
    	{
    	    echo "<script>alert('註冊成功');window.location='form_login.php';</script>";
    	}
	}
?>