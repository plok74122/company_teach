<?php
	$conn =mysql_connect("127.0.0.1","root","qwer4321`");
	if(!$conn)
	{
		die("Connection failed: " . mysql_connect_error());
	}
	else
	{
		echo "success";
		mysql_query("SET NAMES 'utf8'");
		mysql_query("SET CHARACTER_SET CLIENT=utf8");
		mysql_query("SET CHARACTER_SET RESULTS=utf8");
	}
?>