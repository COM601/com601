<?php
$mysql_hostname = "localhost";

//$mysql_user = "COM601_A11";
//$mysql_password = "ppv93YUm";

$mysql_user = "root";
$mysql_password = "root";

$mysql_database = "com601";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Oops some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Oops some thing went wrong");
?>
