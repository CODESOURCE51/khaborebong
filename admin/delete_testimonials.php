<?php
ob_start();
include("connection.php"); 
$txtUsername=$_SESSION['txtUsername'];

if($_SESSION['txtUsername'])
	{
	$sql = 'DELETE FROM td_testimonials WHERE testi_id='.$_REQUEST['id'];
	$query = mysql_query($sql) or die(mysql_error());
	header('Location: testimonials.php');
	}
	
else
{
echo "<script type='text/javascript'> window.location='index.php'; </script>"; 
}
?>
