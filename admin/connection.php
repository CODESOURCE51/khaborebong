<?php
error_reporting(0);
session_start();
$con=mysql_connect("localhost","khaboreb_ong","khabor123") or die(mysql_error());
mysql_select_db("khaboreb_ong",$con) or die(mysql_error());
//$con=mysql_connect("localhost","root","") or die(mysql_error());
//mysql_select_db("khabor",$con) or die(mysql_error());
?>
