<?php

include ('contain.php');

$po_id=$_GET['po_id'];
$sql="UPDATE po SET `count`=`count`+1 WHERE `po_id`= $po_id";
echo $po_id."<br/>";
echo $_COOKIE["id"];
echo $sql."<br/>";
$result=mysqli_query($s,$sql);
if ($result==TRUE)
	echo "連結成功<br/>";
else
	echo "連結失敗<br/>";
$url="keizi.php?po_id=$po_id";
header("location:$url");

?>