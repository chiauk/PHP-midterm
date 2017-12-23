<?php
include("contain.php");
$name=$_POST["name"];
$po=$_POST["message"];
$title=$_POST["title"];
$city=$_POST["city"];
$add=$_POST["address"];
$place_id=$_GET["place_id"];
$food=$_POST["food"];
date_default_timezone_set('Asia/Taipei');//設定時間
$today=getdate();	
$time=date("Y-m-d H:i:s");
//SQL
echo"<br/>";
$dir="upload/";
$i=count($_FILES["upload"]["name"]);
for($j=0;$j<$i;$j++){
	$tmpname=$_FILES["upload"]["tmp_name"][$j];
	$filename=$_FILES["upload"]["name"][$j];
	$now=new DateTime("now",new DateTimeZone("Asia/Taipei"));
	$nowtime=$now->format("YmdHis");
	$extension=pathinfo($filename, PATHINFO_EXTENSION);
	move_uploaded_file($tmpname, $dir.$nowtime.$j.".".$extension);
	$ree=$dir.$nowtime.$j.".".$extension;
	
	
	}
	


$re=mysqli_query($s,"SELECT * FROM po");
$row=mysqli_fetch_array($re);
$numRows=mysqli_num_rows($re);
$myTable='po';
$errMsg='';//存放錯誤訊息的變數
$name='';//存放姓名的變數
$po='';//存放內容的變數

//檢查是否已輸入姓名
if ( !empty($_POST['name']) && !empty($_POST['message'])){
	//將姓名放入$name變數
	//$name=??
	$name=$_POST['name'];
	//將留言放入$message變數
	$po=$_POST['message'];
	}


//若否.將錯誤資訊寫入 $errMsg
else{
     echo "<ul>";
	$errMsg.="<div style='font-size:20px;font-family:標楷體'>您忘記輸入姓名或文章內容</div><br/>";
	echo "</ul>";
}

?>
<html>
<head>
	<meta charset="UTF-8">
        <script src="https://use.typekit.net/xif4etq.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
	<title>憨廬的美食板</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
</head>
<body class="background3">
<?php
		
//如果$errMsg是空字串.表示無誤.故可放心寫入資料庫
if ($errMsg ==''){
	date_default_timezone_set('Asia/Taipei');//設定時間
	//$ip=getenv("REMOTE_ADDR");
	$time=date("Y-m-d H:i:s");
	
	echo "<div style='font-size:20px;font-family:標楷體'>".$time."</div>";
	

	if($numRows>0){
		//$query="SELECT * FROM tbj0 ORDER BY no DESC";
		$query="INSERT INTO po(place_id,name,title,food,po,file,city,address,time) VALUES('$place_id','$name','$title','$food','$po','$ree','$city','$add','$time')";
		mysqli_query($s,$query);
		echo "<div style='font-size:20px;font-family:標楷體'>已成功新增文章</div><br/>";

	}
else{
		echo "<div style='font-size:20px;font-family:標楷體'>無法新增文章</div><br/>";
	}
}
//如果 $errMsg不是空字串.便顯示錯誤訊息
else{
	echo $errMsg . "<div style='font-size:20px;font-family:標楷體'>請按上一頁重新輸入</div><br/>";
}

print <<<eot1
	<div style='font-size:20px;font-family:標楷體'><a href="place.php?place_id=$place_id">回留言板</a></div></p>
	

	
eot1;
?>
</body>
</html>