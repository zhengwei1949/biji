<?php
//判断用户有没有登录，如果没有则跳转到login.php
if($_COOKIE['isLogin'] != true){
	header('Location:./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>  这是首页!  </h1>
	<a href="logout.php">退出</a>
</body>
</html>