<meta charset="utf-8">
<?php
print <<<eot1
<html>
	<head>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=gbk">
	
	<title>憨廬美食地圖</title>
	</head>
        
	<body class="background3">
        <br/><br/>
	<p class="want">
	<img src="girl2.gif" height="80" margin:auto></img>
	<font style="font-size:30px;font-family:標楷體;color: #444444;text-shadow: 0px 1px 0px #444444;font-weight: bold">
	修改個人資料
	</font>
	<img src="white.gif" height="80" margin:auto></img>
	</p></br>

	
	</body>
	</html>
eot1;

	echo "<meta charset='UTF-8' />";
	include("contain.php");
	$id=$_COOKIE["id"];
	$res = mysqli_fetch_assoc(mysqli_query($s,"SELECT name,telephone,address FROM member WHERE id='$id'"));
	$name = $res['name'];$telephone=$res['telephone'];$address=$res['address'];
	echo "<form action='' method='POST'><div class='container' style='font-family:微軟正黑體 ;font-size: 20px;color:#000000;text-shadow: 0px 1px 0px #e5e5ee'>
	修改密碼：<input type='password' name='password' placeholder='$password'><br><br>
	修改暱稱：<input type='name' name='name' placeholder='$name'><br><br>
	修改電話：<input type='text' name='telephone' placeholder='$telephone'><br><br>
	修改地址：<input type='text' name='address' placeholder='$address'><br><br>
	<input type='submit'>
	</div></form>";
	if(isset($_POST['password']) or isset($_POST['name']) or isset($_POST['telephone']) or isset($_POST['address']))
	{
		
		if(isset($_POST['name'])){
			$name=$_POST['name'];
			mysqli_query($s,"UPDATE member SET name='$name' WHERE id='$id'");
		}
		if(isset($_POST['telephone'])){
			$telephone=$_POST['telephone'];
			
			mysqli_query($s,"UPDATE member SET telephone='$telephone' WHERE id='$id'");
		}
		if(isset($_POST['address'])){
			$address=$_POST['address'];
			
			mysqli_query($s,"UPDATE member SET address='$address' WHERE id='$id'");
		}
		if(isset($_POST['password'])){
			$password=$_POST['password'];
			mysqli_query($s,"UPDATE member SET password='$password' WHERE id='$id'");
		}
		echo "修改成功<br>";
		echo "一秒後將轉至首頁<br>";
		header("Refresh:1;URL=index.php");

	}
print <<<eot2
	<link href="indexm.css" rel="stylesheet" type="text/css">
	
        <div class="footer">
		<img src="lu.png" width="70" height="70"></img>
	</div>
	<div class="footer4">
    	<a href="index.php"><img src="index.png" width="80" height="70"></img></a>
	</div>
	<div class="footer2">
		<img src="han.png" width="70" height="70"></img>
	</div>
eot2;
?>
