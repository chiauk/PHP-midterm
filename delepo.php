<html>
<head>
	<meta charset="UTF-8">
        <script src="https://use.typekit.net/xif4etq.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
	<title>憨廬的美食板</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
</head>
<body class="background">
<?php
				echo "<meta charset='UTF-8' />";
				session_start();

				include('contain.php');
				
				//刪除被選擇項目
				if($_GET['po_id']!=NULL){
					$del=$_GET['po_id'];
					echo $del;
					$b="DELETE FROM po WHERE po_id=$del";
					mysqli_query($s,$b);
					echo "<div style='font-size:20px;font-family:標楷體'>好食貼文編號 ".$del." 刪除成功</div></p>";
				
				echo "<div style='font-size:20px;font-family:標楷體'>刪除成功</div><br>";
			echo "<div style='font-size:20px;font-family:標楷體'>兩秒後跳轉</div><br>";
			header("Refresh:2;URL=nookpost.php");
		}else{
			echo "<div style='font-size:20px;font-family:標楷體'>刪除失敗</div><br>";
			echo "<div style='font-size:20px;font-family:標楷體'>兩秒後跳轉</div><br>";
			header("Refresh:2;URL=nookpost.php");
		}
?>
</body>
</html>