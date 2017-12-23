<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>憨廬美食討論區</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.wrap{
			width: 1200px;
			height: 1000px;
			margin-left: 50px;
		}
		.header{
			height: 30px;
		}
		.left{
			float: left;
			width: 200px;
			height: 900px;
			margin-top: 30px;
		}
		.right{
			float: left;
			width: 900px;
			height: 900px;
			margin-left: 30px;
		}
		.clear{
			clear: both;
		}

		a{
			height: 50px;
			font-size: 20px;
			font-family: 微軟正黑體;
			color: #FF95CA;
		}
		a:link {text-decoration:none;}
		a:hover {color:#99DD00;}

		p{
			width: 920px;
			font-size: 18px;
			font-family: 微軟正黑體;
		}

		td{
			font-size: 18px;
			font-family: 微軟正黑體 Light;
		}

		table.TB_COLLAPSE {
		  width:100%;
		  border-collapse:collapse;
		}
		table.TB_COLLAPSE thead {
		  padding:5px 0px;
		  color:#fff;
		  background-color:#915957;
		}
		table.TB_COLLAPSE tbody{
		  padding:5px 0px;
		  color:#555;
		  text-align:center;
		  background-color:#fff;
		  border-bottom:1px solid #915957;
		}

</style>
</head>
<body class="background">
	<div class="wrap">
		<div class="header">
			<a href="index.php" style="float:right; margin-right:15px; margin-top:10px;">
			<img src="door.png" width="20" height="25"></img>&nbsp;&nbsp;首頁</a>
		</div>
		<div class="left">
			<br/><br/>
			<a href="member.php">會員管理</a><br/><br/>
			<a href="allpost.php">貼文管理</a><br/><br/>
			<a href="nookpost.php">檢舉文章</a><br/><br/>
			<a href="analize.php">數據分析</a><br/><br/>
		</div>
		<div class="right">
			<?php
				session_start();

				include('contain.php');
				
				//刪除被選擇項目
				if($_GET['del']!=NULL){
					$del=$_GET['del'];
					$b="DELETE FROM member WHERE no=$del";
					mysqli_query($s,$b);
					echo "<p style='font-size:15px'>會員編號 ".$del." 刪除成功</p>";
				}

				//讀取table資料

				$sql="SELECT * from member";
				$result=mysqli_query($s,$sql);
				
				echo '<p>總共有'.mysqli_num_rows($result).'個成員唷<br/></p>';
	
				echo "<table class='TB_COLLAPSE' border=2 align=center cellpadding=5>";
				echo "<thead><tr>
					  <td>會員編號</td>
					  <td>會員帳號</td>
					  <td>會員密碼</td>
					  <td>會員暱稱</td>
					  <td>會員電話</td>
					  <td>會員住址</td>
					  <td>刪除</td></tr></thead>";

				if($result==FALSE){
					echo "<p>資料庫讀取失敗</p>";
				}else{
						while($rows=mysqli_fetch_array($result)){
							echo "<tbody><tr>
								  <td>$rows[0]</td>
								  <td>$rows[1]</td>
								  <td>$rows[2]</td>
								  <td>$rows[3]</td>
								  <td>$rows[4]</td>
								  <td>$rows[5]</td>
								  <td><a href='member.php?del={$rows[0]}'>刪除</a></td></tr></tbody>";
						}echo "</table>";
			 	}
				?>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>

