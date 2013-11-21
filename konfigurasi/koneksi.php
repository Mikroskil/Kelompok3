<?php
$host="localhost";
$username="root";
$password="";
$databasename="pkti";

$link=mysql_connect($host,$username,$password) or die ("Data Base Error");
mysql_select_db($databasename,$link);

?>