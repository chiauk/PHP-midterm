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
			font-size: 20px;
			font-family: 微軟正黑體;
		}
	</style>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['會員帳號', '檢舉次數'],
          <?php
				include('contain.php');

				//讀取table資料
				$sql="SELECT name_id,count(`name_id`) AS time FROM notOK GROUP BY `name_id` ORDER BY time DESC LIMIT 0,5";
				$result=mysqli_query($s,$sql);
		
				if($result==FALSE){
					echo "<p>資料庫讀取失敗</p>";
				}else{
					while($rows=mysqli_fetch_array($result)){
						$rows0=$rows[0];
						$rows1=$rows[1];
          				echo "['".$rows0."',".$rows1."],";
					}
				}
          ?>
        ]);

        var options = {
          chart: {
            title: '最常使用檢舉會員排次',
            subtitle: '自動更新為排名前五啾咪',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>
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
			<a href="analize_1.php" style="height: 35px;font-size: 15px;">使用檢舉</a><br/><br/>
			<a href="analize_2.php" style="height: 35px;font-size: 15px;">被檢舉者</a><br/><br/>
			<a href="analize_3.php" style="height: 35px;font-size: 15px;">單篇點擊</a><br/><br/>
			<a href="analize_4.php" style="height: 35px;font-size: 15px;">好食來自</a><br/><br/>
			<a href="analize_5.php" style="height: 35px;font-size: 15px;">四處留情</a><br/><br/>
		</div>
		<div class="right">
			<div id="columnchart_material" style="width: 900px; height: 500px;"></div>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>

