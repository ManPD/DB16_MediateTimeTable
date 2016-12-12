<?php
	header("Content-Type: text/html;charset=UTF-8");
	$mysql_hostname = "localhost";
	$mysql_user = "HongikDB";
	$mysql_password = "hongik";
	$mysql_database = "hongik";
	 
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");
	mysql_select_db($mysql_database, $bd) or die("db connect error");
?>
