<html>
<head>
</head>
<body>

<?php
session_start();
if($_SESSION['flag']='1'){
	echo '歡迎你登入 ROOT, ';
	echo "<a href=1.php>登出</a>";
}else{
	echo'你不是ROOT';
	echo "<a href=1.php>回到登入畫面</a>";
	die();
}

?>

<p><a href="5.php">管理成員資料</a></p>

</body>
</html>