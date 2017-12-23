<?php
include("contain.php");
print <<<eot1
<html>
<head>
<meta http-eqiv="Content-Type"
contemt="text/html;charset=UTF-8">
<title>憨盧美食地圖</title>
</head>
<body bgcolor="lightsteelblue">
<img src="dodo.jpg" width="150" height="200">
<font size="7" color="indigo">
這裡是憨盧的美食地圖
</font>
</br></br>

<hr>

eot1;
//取的用戶端的IP
$ip=getenv("REMOTE_ADDR");
//在主題的標題(su)如果有資料寫入tbj0
$su_d=htmlspecialchars($_GET["su"]);
if($su_d<>""){
	mysql_query("INSERT INTO tbj0 (sure,niti,message,aipi) VALUES ('$su_d',now(),'$ip')");
}
//提取tbj0所有資料
$re=mysqli_query($s,"SELECT * FROM tbj0");
while($row=mysqli_fetch_array($re)){	
    //將姓名中的特殊字元轉成 HTML 碼
    $row[1]=htmlspecialchars($row[1], ENT_QUOTES);
    //將留言中的特殊字元、換行字元、與空白轉成 HTML 碼
    $row[2]=htmlspecialchars($row[2], ENT_QUOTES);
    $row[2]=str_replace('	', '&nbsp;&nbsp;', nl2br($row[2]));
	//echo "<ul>";  
    //$i++;
    //顯示留言者姓名、留言日期時間、與留言內容
    /*echo "<li class=\"$liclass\"><p><strong>$row[1]</strong>
	      <em>於 {$row[3]}發文</em></p>
		  <p>$row[2]</p></li>";*/
    
/*while ($kekka=mysqli_fetch_array($re)){*/
print <<<eot2
	<a href="keizi.php?gu=$row[0]">$row[1]於 {$row[3]}發文</a>
	</br>
	$row[2]</br></br>

eot2;
}
//切斷資料庫
mysqli_close($s);
//顯示主題名稱輸入欄位，回到首頁等連結
print <<<eot3
		<hr>
		<font size="5">
(我要PO文)
</font>
</br>
<a href="mymessage.html"><input type="submit" value="前往PO文"></a>
</form>
<hr>
<font size="5">
(訊息搜尋)
</font>
<a href="keizi_search.php">點這裡進行搜尋</a>
<hr>
</body>
</html>
eot3;
?>