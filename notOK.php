<html>
<head>
	<meta charset="UTF-8">
        <script src="https://use.typekit.net/xif4etq.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
	<title>憨廬的美食板</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
</head>
<body class="background1">

<?php
		include("contain.php");
		echo "<meta charset='UTF-8' />";
		if($_GET['po_id']!=NULL){
			$po_id=$_GET['po_id'];
			$name=$_GET['name'];
			$sure_com=$_GET['sure_com'];
			$name_id=$_COOKIE["id"];
			$connet=mysqli_query($s,"INSERT INTO notOK(po_id,po_name,po_title,name_id)  
										VALUES ('$po_id','$name','$sure_com','$name_id')");
			if($connet==TRUE){
				echo "<div style='font-size:20px;font-family:標楷體'>成功檢舉編號 ".$po_id." 的好食貼文</div></br>";
				echo "<div style='font-size:20px;font-family:標楷體'>兩秒後自動跳轉回原頁面唷</div></br>";
				$url="keizi.php?po_id=$po_id";
				header("Refresh:2; url=$url");
			}

		}else{
			echo "<div style='font-size:20px;font-family:標楷體'>檢舉失敗，請檢察連線</div><br/>";
			echo "<div style='font-size:20px;font-family:標楷體'>兩秒後自動跳轉回原頁面唷</div></br>";
			$url="keizi.php?po_id=$po_id";
			header("Refresh:2; url=$url");
		}
?>
</body>
</html>