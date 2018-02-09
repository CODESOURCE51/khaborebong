<?php
ob_start();
include("connection.php"); 
$txtUsername=$_SESSION['txtUsername'];

if($_SESSION['txtUsername'])
	{
	
	}
	
else
{
echo "<script type='text/javascript'> window.location='index.php'; </script>"; 
}
?>
<?php
$id=$_REQUEST['vid'];
$query_update= "UPDATE `video` SET `pub`= 0 WHERE `id`=".$id;
$qu_up= mysql_query($query_update) or die(mysql_error());	
echo "<script type='text/javascript'> window.location= 'video.php'; </script>";
ob_flush();
?>