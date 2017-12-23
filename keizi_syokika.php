<?php
include("contain.php");
mysqli_query("DELETE FROM tbj0");
mysqli_query("DELETE FROM tbj1");
mysqli_query("DELETE FROM tbj0 AUTO_INCREMENT=0");
mysqli_query("DELETE FROM tbj1 AUTO_INCREMENT=0");

print "憨盧的資料表重設好了";
mysql_close($s);
?>