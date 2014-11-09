<!DOCTYPE html>
<?php 
    session_destroy();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<h1>登入後透過session檢察登入狀態<h1>
<h2>這個網頁在一開啟則對全部session進行清除(session_destroy();)<h2>
<body>
<form action="login.php" method="post">
	帳號：<input type="text" name="username"></br>
	密碼：<input type="password" name="password"></br>
	<input type="submit" value="登入">
</form>
</body>
</html>
