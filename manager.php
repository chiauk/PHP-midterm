<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>管理頁面</title>
</head>
<body>

<?php

include('db.php');
if($_GET['del']){
	$a=$_GET['del'];
	$s="delete from member where no=$a";
	mysql_query($s);
	echo '你成功刪除:'.mysql_affected_rows();
}

$sql="SELECT * from member";
$result=mysql_query($sql);
echo '<br>總共有'.mysql_num_rows($result).'個成員';
if(!$_GET['order']){
	echo "<table width=100% border=2 align=center cellpadding=0 cellspacing=0>";
	echo "<tr>
		  <td>成員編號</td>
		  <td>成員名字</td>
		  <td>成員帳號</td>
		  <td>成員密碼</td>
		  <td>成員電話</td>
		  <td>成員住址</td>
		  <td>成員照片</td>
		  <td>刪除</td></tr>";
}

while($row=mysql_fetch_array($result)){
	echo "<tr>
		  <td>$row[0]</td>
		  <td>$row[1]</td>
		  <td>$row[2]</td>
		  <td>$row[3]</td>
		  <td>$row[4]</td>
		  <td>$row[5]</td>
		  <td><img src=./upload/$row[6] width=102 height=122 /></td>
		  <td><a href=manager.php?del=$row[0]>刪除</a></td></tr>";
}

echo "</table>";
?>

</body>
</html>