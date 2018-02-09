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
$id=$_REQUEST['id'];

$query_update= "UPDATE `album` SET `album_day`='0'";
 $qu_up= mysql_query($query_update) or die(mysql_error());
 
 $query_update2= "UPDATE `album` SET `album_day`='1' WHERE `id`='$id'";
 $qu_up2= mysql_query($query_update2) or die(mysql_error());

echo "<script type='text/javascript'> window.location= 'create_gallery.php'; </script>";
ob_flush();
?>