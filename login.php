<?php

session_start();
$_SESSION['flag']='0';

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>憨廬的美食版</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
    <style>
        input[name='button'] { 
            padding:5px 15px; 
            background:white; 
            border:1 none;
            border-style: double;
            cursor:pointer;
            border-radius: 5px; 
            font-family:微軟正黑體 Light;
            font-size: 18px;
            width:80px; 
            height:40px;
        }
    </style>
	
</head>
<body class="background">
	<br/><br/>
	<p class="want">
	<img src="iamback.gif" height="80" margin:auto></img>
	<font style="font-size:30px;font-family:標楷體;color: #444444;text-shadow: 0px 1px 0px #444444;font-weight: bold">
	會員登入
	</font>
	<img src="smallbin.gif" height="80" margin:auto></img>
	</p>
<!登入>
<form name="form1" method="post" action="verify.php">
         
    <div class="container" style="font-family:微軟正黑體 Light;text-shadow: 0px 1px 0px #e5e5ee;font-size: 20px">
        帳號：<input type="text" name="id" placeholder="請輸入帳號" maxlength="20" size="20" style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none;  font-family:微軟正黑體 Light"><br><br>
        密碼：<input type="password" name="password" placeholder="請輸入密碼" maxlength="20" size="20" style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none; font-family:微軟正黑體 Light"><br><br><br>

        <input type="submit" name="button" value="登入">&nbsp;
        <input type="reset" name="button" value="清除">&nbsp;&nbsp;
    </div>
</form>

<!古錐小圖片：回到首頁or我要註冊>
<link href="indexm.css" rel="stylesheet" type="text/css">
<div class="footer">
    <img src="lu.png" width="70" height="70"></img>
</div>
<div class="footer4">
    <a href="index.php"><img src="index.png" width="80" height="70"></img></a>
</div>
<div class="footer3">
    <a href="register.php"><img src="register.png" width="80" height="70"></img></a>
</div>
<div class="footer2">
    <img src="han.png" width="70" height="70"></img>
</div>

</body>
</html>