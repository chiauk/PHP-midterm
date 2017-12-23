<?php
    //echo "<meta charset='UTF-8' />";
    /*/$a="localhost";
	$conn=mysqli_connect($a,"root","JESUS125617","mission");
	mysqli_query($conn,"set names utf8");
	mysqli_select_db($conn,"mission");*/

//if(@mysql_connect("localhost","root","04172645")){

$s=mysqli_connect("localhost","root","host1187")
	or die("連接失敗");

//選資料庫
mysqli_select_db($s,"hanlu");
mysqli_query($s,"set character set'utf8'");
mysqli_query($s,"set names 'utf8'");

?>