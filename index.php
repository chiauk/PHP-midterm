<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>憨盧美食網-全台美食地圖</title>
        <style type="text/css">
	
	input[type='text']{
		border:2px #DDDDDD solid;
		margin-left:780px;
        border-radius: 5px;
        font-family:微軟正黑體;
	}
	.word{
		font-family:微軟正黑體 Light;
		font-size:15px;
		letter-spacing:8px;
		text-align:center;
		font-weight: bold;
		color:#20B2AA;
	}
	</style>
</head>
<body>
	<img src="HanluLove.jpg" title="憨廬愛美食" width="723" height="170" style="display:block; margin:auto" >
	<br/>
	<p class="word">快在憨廬美食地圖上點選任一城市，看看有甚麼好ㄘ的吧！</p>
	<br/>
	<br/>

	<!全台地圖>
	<img src="taiwan_map.jpg" usemap="#taiwan_map.jpg" style="display:block; margin:auto">
	<map name="taiwan_map.jpg">
		<area shape="rect" coords="469,17,534,47" href="place.php?place_id=1 &name_id=$_COOKIE['id']">
		<area shape="rect" coords="342,12,407,42" href="place.php?place_id=2" >
		<area shape="rect" coords="506,65,571,95" href="place.php?place_id=3">
		<area shape="rect" coords="288,33,353,63" href="place.php?place_id=4">
		<area shape="rect" coords="267,61,332,91" href="place.php?place_id=5">
		<area shape="rect" coords="245,89,310,119" href="place.php?place_id=6">
		<area shape="rect" coords="225,124,290,154" href="place.php?place_id=7">
		<area shape="rect" coords="198,155,263,185" href="place.php?place_id=8">
		<area shape="rect" coords="181,185,246,215" href="place.php?place_id=9">
		<area shape="rect" coords="166,217,231,247" href="place.php?place_id=10">
		<area shape="rect" coords="153,247,218,277" href="place.php?place_id=11">
		<area shape="rect" coords="140,277,205,307" href="place.php?place_id=12">
		<area shape="rect" coords="153,308,218,338" href="place.php?place_id=13">
		<area shape="rect" coords="176,349,241,379" href="place.php?place_id=14">
		<area shape="rect" coords="211,390,276,420" href="place.php?place_id=15">
		<area shape="rect" coords="414,322,479,352" href="place.php?place_id=16">
		<area shape="rect" coords="463,215,528,245" href="place.php?place_id=17">
		<area shape="rect" coords="474,173,539,203" href="place.php?place_id=18">
		<area shape="rect" coords="496,109,561,139" href="place.php?place_id=19">
		<area shape="rect" coords="80,42,145,72" href="place.php?place_id=20">
		<area shape="rect" coords="32,162,97,192" href="place.php?place_id=21">
		<area shape="rect" coords="20,334,85,364" href="place.php?place_id=22">
	</map>

	
</body>
</html>
<?php
echo "<meta charset='UTF-8' />";
include('contain.php');
if($_COOKIE["id"]!=null && $_COOKIE["id"]=='root'){
	echo "<div class='page_top'>哈囉!&nbsp;&nbsp;".$_COOKIE['id']."</div><br>";
	
	print <<<eot2
                <link href="indexm.css" rel="stylesheet" type="text/css">
		<div class="footer">
		     <a href="logout.php"><img src="登出.png" height="40" margin:auto></img></a>
		</div>
eot2;

echo "<div class='footer2'><a href='root.php'><img src='回管理.png' height='45' margin:auto></a></div>";
}elseif ($_COOKIE["id"]!=null) {
	$id=$_COOKIE["id"];
	$re=mysqli_query($s,"SELECT * FROM member where id='$id'");
	$kekka=mysqli_fetch_array($re);
	//製作主題內容的字串$sure_com
	$name=$kekka[3];
	echo "<div class='page_top'>哈囉!&nbsp;&nbsp;".$name."</div><br>";

	print <<<eot2
                <link href="indexm.css" rel="stylesheet" type="text/css">
    
		
		<div class="footer">
		     <a href="logout.php"><img src="登出.png" height="40" margin:auto></img></a>
		</div>
                
		<div class="footer2">
		     <a href="profile.php"><img src="修改.png" height="45" margin:auto></img></a>
		</div>
eot2;
}else{
print <<<eot1
	<!古錐小圖片：我要登入>
	<link href="indexm.css" rel="stylesheet" type="text/css">
	<div class="footer">
		<img src="lu.png" width="70" height="70"></img>
	</div>
	<div class="footer3">
		<a href="login.php"><img src="login.png" width="80" height="70"></img></a>
	</div>
	<div class="footer2">
		<img src="han.png" width="70" height="70"></img>
	</div>
eot1;
}
	
?>