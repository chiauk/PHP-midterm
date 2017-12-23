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
///資料庫名稱密碼等資料的讀取
include("contain.php");
//標題顯示
print <<<eot1
	<html>
	<head>
	<meta http-eqiv="Content-Type" content="text/html;charset=UTF-8">
	<title>憨盧美食地圖搜尋頁</title>
	</head> 
	<body bgcolor="orange">
	<hr>
	<font size="5">
	以下是搜尋結果唷
	</font>
	<br>
eot1;
//取的搜尋字串後刪除標籤
$se_d=htmlspecialchars($_GET["se"]);
//搜尋字串($se_d)中如果有資料的話就進行搜尋
if($se_d<>""){
	//搜尋SQL語法 在資料表tbj1中結合tbj0
$str=<<<eot2
	SELECT tbj1.bang,tbj1.nama,tbj1.mess,tbj0.sure
		FROM tbj1
	JOIN tbj0
	ON
		tbj1.guru=tbj0.guru
	WHERE tbj1.mess LIKE "%$se_d%"
eot2;
//執行搜尋查詢
	$re=mysqli_query($str);//
	while($kekka=mysqli_fetch_array($re)){//
		print " $kekka[0]:$kekka[1]:$kekka[2]($kekka[3])";
		print "</br></br>";
	}
}
//切斷資料庫
mysqli_close($s);
//顯示輸入搜尋字串用的表單，回到首頁的連結
print <<<eot3
	<hr>
	請在這裡輸入訊息中包含的文字!
	</br>
		<form method="GET" action="keizi_search.php">
	搜尋字串
		<input type="text" name="se">
		</br>
		<input type="submit" value="搜尋">
		</form>
	</br>
		</body>
		</html>
eot3;
?>

<body>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	<div class="footer">
    	<img src="lu.png" width="70" height="70"></img>
	</div>
	<div class="footer4">
    	<a href="index.php"><img src="index.png" width="80" height="70"></img></a>
	</div>
	<div class="footer3">
   	 <a href="login.php"><img src="login.png" width="80" height="70"></img></a>
	</div>
	<div class="footer2">
  	  <img src="han.png" width="70" height="70"></img>
	</div>
</body>