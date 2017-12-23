<html>
	<head>
		<meta charset="utf-8">
		<title>憨廬的美食板</title>
		<link href="indexm.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<body class="background2">
	</body>
</html>

<?php

	include('contain.php');

	if(isset($_POST['id']) and isset($_POST['password']))
	{
		$id=$_POST['id'];$pw=$_POST['password'];//$pw=hash('sha512',$pw);
		
		if(mysqli_query($s,"SELECT id,password FROM member WHERE id='$id' and password='$pw'")->num_rows==0)
		{
			echo "<a href='login.php'><img src='loginloss.png' width='300' height='250' style='margin-top:120px; margin-left:450px;'></img></a>";
			echo "<div><img src='han.png' width='150' height='150' style='margin-left:100px;'></img></div>";
			die();
		}
		else{
			date_default_timezone_set("Asia/Taipei");
			$res = mysqli_fetch_assoc(mysqli_query($s,"SELECT id,password,name,telephone FROM test WHERE id='$id' and pw='$pw' "));
			$lt = $res['lt'];$lc = $res['lc'];
			}if (date('Y-m-d', strtotime($lt))==date('Y-m-d', strtotime('now')) and $lc>0){
				mysqli_query($conn,"UPDATE test SET lt=now() WHERE id='$id'");
			}
			else{
				if($lc==0)
				{
					setcookie("new",1,time()+3600);
				}
				$lc = $res['lc']+1;
				mysqli_query($conn,"UPDATE test SET lt=now(),lc='$lc' WHERE id='$id'");
			}
			setcookie("id",$id,time()+3600);
			setcookie("lc",$lc,time()+3600);
			setcookie("lt",$lt,time()+3600);
			echo "<script>document.location.href='index.php';</script>";
		}
	if($_POST[id]=='root'){
	header('location:root.php');
	}

?>
