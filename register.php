<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>憨廬的美食板</title>
	<link href="indexm.css" rel="stylesheet" type="text/css">
    <style>
        input[name='button'] { padding:5px 15px; 
            background:white; 
            border:1 none;
            border-style: double;
            cursor:pointer;
            border-radius: 5px; }
    </style>
	
</head>
<body class="background">
	<div>
	<img src="pic.png" title="憨廬愛美食" width="723" height="170" style="display:block; margin:auto">
	</div>


<form name="form2" method="post" action="insert.php">
	<br/><br/>
	<div style="font-size:35px;font-family:微軟正黑體;text-shadow:0px 0px 15px #00FFCC;font-weight: bold">請輸入基本資料</div>
	<br/><br/>

	<div class="container" style="font-family:微軟正黑體; font-size: 25px; line-height: 45px">
		帳號：<input type="text" name="id" placeholder="請輸入帳號" maxlength="20" size="20"
			style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none;"><br/>
		密碼：<input type="password" name="password" placeholder="請輸入密碼" maxlength="20" size="20"
			style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none;"><br/>
		暱稱：<input type="text" name="name" placeholder="請輸入暱稱" maxlength="20" size="20"
			style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none;"><br/>
		電話：<input type="text" name="telephone" placeholder="09xx-xxx-xxx" maxlength="20" size="20"
			style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none;"><br/>
		地址：<input type="text" name="address" placeholder="請輸入地址" maxlength="20" size="20"
			style="background-color:transparent; border-style:none; border-bottom-style:solid; outline:none;"><br/><br/>
		照片：<input type="file" name="picture" 
			style="background-color:transparent; border-style:none; outline:none;"><br/><br>
	</div>

	<div>
		<input type="submit" name="button" value="確定" style="font-size:18px; font-family:微軟正黑體; width:80px; height:40px;">&nbsp;&nbsp;&nbsp;
		<input type="reset" name="button" value="清除" style="font-size:18px; font-family:微軟正黑體; width:80px; height:40px;">
	</div>
</form>

<link href="indexm.css" rel="stylesheet" type="text/css">
<div class="footer">
    <img src="lu.png" width="70" height="70"></img>
</div>
<div class="footer4">
    <a href="index.php"><img src="index.png" width="80" height="70"></img></a>
</div>
<div class="footer3">
    <a href="login.php"><img src="lastpage.png" width="80" height="70"></img></a>
</div>
<div class="footer2">
    <img src="han.png" width="70" height="70"></img>
</div>

</body>
</html>