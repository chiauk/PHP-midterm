<?php
echo "<meta charset='UTF-8' />";
//讀取資料庫資訊
include("contain.php");

//取得主題的群組編號(gu)並且帶入$gu_d
$place_id=$_GET["place_id"];
//顯示符合主題群組編號gu的紀錄*/

$re=mysqli_query($s,"SELECT place_num FROM place WHERE place_id=$place_id");
$kekka=mysqli_fetch_array($re);
//製作主題內容的字串$sure_com
$sure_com=$kekka[0];
//輸入主題顯示的遭堤等資訊
print <<<eot2
    <!DOCTYPE html>
	<html>
	<head>
	<link href="indexm.css" rel="stylesheet" type="text/css">
      	 <script src="//s3-ap-northeast-1.amazonaws.com/justfont-user-script/jf-42681.js"></script>
      <meta http-eqiv="Content-Type"
	contemt="text/html;charset=UTF-8">
	<title>憨盧美食地圖</title>
	<style>
table 
{
    margin-left:auto;margin-right:auto;
    width:70%;
    border:0;
}

table,th,td{ 
    border-collapse:collapse;
    font-size: 18px;
    
}
th,td{
	height:25px;
	border: 1px solid #cff8fe;
        font-family:微軟正黑體 Light; 
	border-width:1px 0 1px 0 ;
        font-weight:bold;
}
th
{
    height:40px;
    
    background-color:#ACF3FF;
    color:	#003377;
}
tr { 
    border: 1px solid #cff8fe; 
}
td
{
    text-align:center;
    
}
tr:nth-child(odd){
	background-color:#e3fbfe;
}
tr:nth-child(even){
	background-color:#fdfdfd;
}

</style>
	</head>
        
	<body class="background1">
	
	<p class="sum">
         <img src="magi.gif" height="80" margin:auto></img>
	<img src="美食小天地.png" height="80" margin:auto></img>
	<img src="Piske&Usagi.gif" width="95" margin:auto></img>
        <br/>
        <br/>       
        <font style="text-shadow:0 -1px 0 #374683;">
	>> $sure_com << 
	
	</font>
    </p>
	
eot2;
print <<<eot3
<html>

<div class="po" style="color:#00DDAA">
    <img src="我要PO文.png" height="35" margin:auto></img>
eot3;
    if($_COOKIE["id"]!=null){
print <<<eot5
    	<a href="po1.php?place_id=$place_id">
eot5;
	}else{
print <<<eot6
		<a href="login.php">
eot6;
	}
print <<<eot7
    <input type="submit" value="前往PO文" style="font-size: 15px;font-family: 微軟正黑體 Light"></a>
    </div>
<br/><br/>
</form>
</body>
</html>
eot7;

//顯示水平線
//print "<hr>";
//依照日期順序顯現回應資料
$re=mysqli_query($s,"SELECT * FROM po WHERE place_id=$place_id ORDER BY time DESC");

$i=0;
echo "<table border='0'>";
echo "<tr><th width='70%'>標題</th><th>版主</th><th>發表時間</th></tr>";

while($kekka=mysqli_fetch_array($re)){
	$introduce=htmlspecialchars($kekka[3],ENT_QUOTES);
	$name=htmlspecialchars($kekka[2],ENT_QUOTES);
	echo "<tr>";
    echo "<td width='70%'><a href='count.php?po_id=$kekka[0]'>$introduce</a></font></td>";
    echo "<td>$kekka[2]</td>";
    echo "<td>$kekka[8]</td>";
	echo "</tr>";
	$i++;
}
echo "</table>";

//切斷資料庫
mysqli_close($s);
?>
<?php
include('contain.php');
if($_COOKIE["id"]!=null){

print <<<eot4
	<link href="indexm.css" rel="stylesheet" type="text/css">
	<div class="footer">
		<img src="lu.png" width="70" height="70"></img>
	</div>
	<div class="footer4">
    	<a href="index.php"><img src="index.png" width="80" height="70"></img></a>
	</div>
	
	<div class="footer2">
		<img src="han.png" width="70" height="70"></img>
	</div>
eot4;
}else{
print <<<eot1
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
eot1;

}
echo "<div class='po' style='color: #737373;text-shadow: 0px 1px 0px #e5e5ee;text-align:right;margin-right: 15%;'>PO文人數:".$i."</div>";
?>