<!DOCTYPE html>
<html>
    <head>
        <title>readonly</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            function check_select(form){
            if(confirm("確定要送出此資料嗎？")){
                $("#in_name").removeAttr("disabled");
                $("#in_name2").removeAttr("disabled");
                return true;
            }else{
                return false;
            }
            }  
        </script>
    </head>
<body>
    <form id="in_form" name="in_form" method="post" action="./test.inc.php" onsubmit="return check_select()">
        名稱1：
        <select id="in_name" name="in_name" disabled >
            <option value="">請選擇名稱</option>
            <option value="GOOD_IDEA" selected >GOOD IDEA</option>
        </select>
        <br /><br />
        名稱2：
        <select id="in_name2" name="in_name2" disabled >
            <option value="">請選擇名稱</option>
            <option value="GOOD_IDEA2" selected >GOOD IDEA2</option>
        </select>
        <br /><br />
        <input id="submit" name="submit" type="submit" value="確定送出" />         
    </form>
</body>
</html>