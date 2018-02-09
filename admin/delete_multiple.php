<?php
include('connection.php');
$bill = 'DELETE FROM news WHERE id IN ('.$_REQUEST["news_id"].')';
$bill_query = mysql_query($bill, $con) or die(mysql_error());
$bill_data = mysql_fetch_assoc($bill_query);
header('Location: approval.php');
?>