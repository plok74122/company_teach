<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>

<?php
    header("Content-Type:text/html; charset=utf-8");
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
	$sql="select `id`,`username`,`password`,`name` from `member`.`user`";
	echo "這是資料庫查詢的語法：<br>";
	echo $sql."<br>";
	$result = mysql_query($sql,$conn);
	echo "<table class=\"table table-striped\">";
	echo "<tr><td>唯一值</td><td>帳號</td><td>密碼</td><td>姓名</td></tr>";
	while($row = mysql_fetch_array($result)) 
	{
	    echo "<tr>";
	    echo "<td>".$row['id']."</td>";
	    echo "<td>".$row['username']."</td>"; 
	    echo "<td>".$row['password']."</td>";
	    echo "<td>".$row['name']."</td>"; 
	    echo "</tr>";
	}
	echo "</table>";
?>