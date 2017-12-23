<?php
echo "<meta charset='UTF-8' />";
//讀取資料庫資訊
include("contain.php");
//取得主題的群組編號(gu)並且帶入$gu_d
$place_id=$_GET["place_id"];
$name_id=$_COOKIE["id"];
//顯示符合主題群組編號gu的紀錄*/

$re=mysqli_query($s,"SELECT place_num FROM place WHERE place_id=$place_id");
$kekka=mysqli_fetch_array($re);
$de=mysqli_query($s,"SELECT name FROM member WHERE id='$name_id'");
$kk=mysqli_fetch_array($de);
$nickname=$kk[0];


//製作主題內容的字串$sure_com
$sure_com=$kekka[0];

print <<<eot2
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=gbk">
		<title>憨廬的美食板</title>
		<link href="indexm.css" rel="stylesheet" type="text/css">
	</head>
	<body class="background3">
		<form enctype="multipart/form-data"  action="po.php?place_id=$place_id" method="POST">

		<div>
			<img src="pic.png" title="憨廬愛美食" width="723" height="170" style="display:block; margin:auto">
		</div>
    	<br/>
    
		<div class="container">
		<color="black" style="font-size:20px;font-weight: bold;">
		<nav>暱稱</nav>
		<section><input type="text" name="name" value="$nickname"></section><br/><br/>
		<nav>美食標題</nav>
		<section><input type="text" name="title"></section><br/><br/>
    	<nav>美食分類</nav>
    	<section>
			<select name="food">
				<option value="未選擇">未選擇</option>
　				<option value="西式">西式</option>
　				<option value="中式">中式</option>
　				<option value="泰式">泰式</option>
　				<option value="義式">義式</option>
			</select>
		</section>
		<br><br>
		<nav>美食所在</nav>
		<section><input type="text" name="city" value=$kekka[0] style="width:45px" readonly/>
			<input type="text" name="address" ></section><br/>
		<input type="hidden" name="place_id" value="place_id">
		<br/>
		<nav>上傳一張美食圖吧!</nav>
		<section>
			<input type="file" name="upload[]">
		</section>
		<br/>
		<br/>
		<nav>關於美食</nav>
		<section>
			<textarea cols="50" rows="10" name="message"></textarea></section><br/>
		<input type="submit" value="確認送出" style="font-size: 15px;font-family: 微軟正黑體;border-style: ridge/ double">
			<input type="reset" value="清除" style="font-size: 15px;font-family: 微軟正黑體;"></br>
			</br>
			</br>
		</div>
		</form>

    	<div class="footer">
			<img src="main.png" height="95" width="90" margin:auto></img>
		</div>
		<div class="footer4">
	    	<a href="index.php"><img src="index.png" width="80" height="70" style="margin-left:20px;"></img></a>
		</div>
		<div class="footer2">
			<img src="panda.png" width="100" margin:auto></img>
		</div>
		<div class="footer3">
	   	 	<a href="place.php?place_id=$place_id"><img src="lastpage.png" width="80" height="70"  style="margin-right:30px"></img></a>
		</div>
			
	</body>
	</html>
eot2;

?>


