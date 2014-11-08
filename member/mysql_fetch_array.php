<?php
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
	$result = mysql_query("SELECT * FROM `member`.`user`",$conn);
	echo $result."<br>";
	print_r(mysql_fetch_array($result));
?>