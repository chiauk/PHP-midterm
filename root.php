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
			width: 250px;
			height: 900px;
			margin-top: 30px;
		}
		.right{
			float: left;
			width: 920px;
			height: 900px;
			margin-left: 30px;
			font-size: 25px;
                        color: black; 
                        text-shadow: skyblue 0px 0px 0px 4px; 
			font-family: 微軟正黑體 Light;
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
			<br/><br/>
			<marquee onMouseOver="this.stop()" onMouseOut="this.start()"><img src="點選.png" height="80" margin:auto></img></marquee>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>
