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
$slider_image=$_REQUEST['slider_image'];

$sql="delete from `feature_slider` where `id`='$id'";
mysql_query($sql) or die(mysql_error());

unlink("slider_image/$slider_image");

echo "<script type='text/javascript'> window.location= 'feature_slider.php'; </script>";
ob_flush();
?>