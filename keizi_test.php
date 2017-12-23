<?php
echo "<meta charset='UTF-8' />";
//讀取資料庫資訊
include("contain.php");
//取得主題的群組編號(gu)並且帶入$gu_d
$po_id=$_GET["po_id"];
$place_id=$_GET["place_id"];

//如果$gu_d含有數字外得東西就停止處理
if(preg_match("/[^0-9]/",$po_id)){
print <<<eto1
	輸入的值不正確</br>
	<a href="index.php">點這裡回主題</a>
eto1;
//$gu_d未含數字正常
}elseif(preg_match("/[0-9]/",$po_id)){
	//取得名字和訊息後將標題刪除
$na_d=htmlspecialchars($_GET["na"]);
$me_d=htmlspecialchars($_GET["me"]);
//取得IP位址
$ip=getenv("REMOTE_ADDR");
//顯示符合主題群組編號gu的紀錄
$re=mysqli_query($s,"SELECT * FROM po WHERE po_id=$po_id");
while($kekka=mysqli_fetch_array($re)){
$introduce=htmlspecialchars($kekka[3],ENT_QUOTES);
	$name=htmlspecialchars($kekka[2],ENT_QUOTES);
	$con=htmlspecialchars($kekka[5],ENT_QUOTES);
	$con=str_replace('	', '&nbsp;&nbsp;',nl2br($con));
//製作主題內容的字串$sure_com
$sure_com="$kekka[3]";
//輸入主題顯示的遭堤等資訊
print <<<eot2
	<html>
	<head>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=gbk">
	
	<title>憨廬美食地圖</title>
	</head>
        
	<body class="background1">
	<p class="want">
	<img src="女孩.gif" height="80" margin:auto></img>
	<font style="text-shadow:0px 0px 15px #00FFCC;">
	$sure_com 
	</font>
	<img src="小浣熊.gif" height="80" margin:auto></img>
	</p>
	</br>
	<div class="page_content">
	<color="black" style="font-size:20px;font-family:微軟正黑體 Light">
	</br> $con</br></br>
	<img src=$kekka[6] width="300" heigh="200"></br></br>
	美食種類: $kekka[4]</br>
	美食地址:$kekka[7]</br></br>
    BY $name 於 {$kekka[8]}發表
    </div>
	</br></br>
	
eot2;

















echo "</br>";
}
//如果沒有輸入名字的話($na_d)的話將紀錄寫在tbj1
if($na_d<>""){
	mysqli_query($s,"INSERT INTO tbj1 VALUES (0,'$na_d','$me_d',now(),'$po_id','$ip')");
}
//顯示水平線
print "<hr>";

//依照日期順序顯現回應資料
$re=mysqli_query($s,"SELECT * FROM tbj1 WHERE po_id=$po_id ORDER BY niti DESC");

$i=1;

while($kekka=mysqli_fetch_array($re)){
	$name=htmlspecialchars($kekka[1],ENT_QUOTES);
	$con=htmlspecialchars($kekka[3],ENT_QUOTES);
	$con=str_replace('	', '&nbsp;&nbsp;',nl2br($con));
	if($i%2==0){$liclass='even';}
	else{$liclass='odd';}
	print "<li class=\"$liclass\"><font color='#FFFF33'>$name </font>&nbsp;&nbsp; $con </li></br>";
	print "<div class='message_content' >".nl2br($kekka[2])."</div>";
	print "<br><br>";

		$i++;
}
//切斷資料庫
mysqli_close($s);
print <<<eot3
	<hr>

	<div class="page_content">
	<img src="打字.gif" height="60" margin:auto></img>
	<img src="我要留言.png" height="45" margin:auto></img>
 
	</font>
	
	<form method="GET" action="keizi.php">
	<br/>
	<img src="匿名.png" height="35" margin:auto></img><input type="text" name="na"></br>
	<img src="留言.png" height="35" margin:auto></img></br>
	<textarea name="me" rows="10" cols="70"></textarea>
	</br>
	<input type="hidden" name="po_id" value=$po_id>
	<input type="submit" value="送出" style="font-size: 15px;font-family: 微軟正黑體;border-style: ridge/ double">
	</div>
	</from>
	<hr>
	<div style='font-size:15px;font-family:微軟正黑體 Light; align='center'><a href="index.php"><img src="comeback.png" height="50" margin:auto></img></a></div>
	</body>
	</html>
	<div class="footer">
	<img src="lu.png" width="70" height="70"></img>
	</div>
	<div class="footer2">
	<img src="han.png" width="70" height="70"></img>
	</div>
eot3;
}else{
	print "請選擇主題<br>";
	print "<a href='index.php'>點這裡回到總覽頁</a>";
}
?>