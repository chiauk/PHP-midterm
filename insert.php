<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>憨廬美食討論區</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	
	</head>
<body class="background">
</body>
</html>

<?php

include('contain.php'); 

if(isset($_POST['id']) and isset($_POST['password']) and isset($_POST['name']) and isset($_POST['telephone']) and isset($_POST['address']))
{
	$id=$_POST['id'];$pw=$_POST['password'];$na=$_POST['name'];$tele=$_POST['telephone'];$add=$_POST['address'];
	if(mysqli_query($s,"SELECT * FROM member WHERE id='$id'")->num_rows==0 && $id!=NULL && $pw!=NULL && $na!=NULL && $tele!=NULL && $add!=NULL)
	{
		//$pw=hash('sha512',$pw);
		mysqli_query($s,"INSERT INTO member(id,password,name,telephone,address,date) 
						VALUES ('$id','$pw','$na','$tele','$add',sysdate())");
		$result=mysqli_query($s,$sql);
		echo "<a href='login.php'><img src='relogin.png' width='300' height='250' style='margin-top:120px; margin-left:450px;'></img></a>";
		echo "<div><img src='han.png' width='150' height='150' style='margin-left:100px;'></img></div>";
	}else if(mysqli_query($s,"SELECT * FROM member WHERE id='$id'")->num_rows>0){
				echo "<a href='register.php'><img src='account.png' width='300' height='250' style='margin-top:120px; margin-left:450px;'></img></a>";
				echo "<div><img src='lu.png' width='150' height='150' style='margin-left:100px;'></img></div>";
			}else{
				echo "<a href='register.php'><img src='reregister.png' width='300' height='250' style='margin-top:120px; margin-left:450px;'></img></a>";
				echo "<div><img src='lu.png' width='150' height='150' style='margin-left:100px;'></img></div>";
			}
}




?>



