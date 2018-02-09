<?php
ob_start();
include("connection.php"); 
$txtUsername=$_SESSION['txtUsername'];

if($_SESSION['txtUsername'])
	{
	$sql = 'DELETE FROM video WHERE id='.$_REQUEST['vid'];
	$query = mysql_query($sql) or die(mysql_error());
	header('Location: video.php');
	}
	
else
{
echo "<script type='text/javascript'> window.location='index.php'; </script>"; 
}
?>
