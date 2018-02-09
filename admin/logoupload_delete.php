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
$logo=$_REQUEST['logo'];


$sql="delete from `logo_upload` where `id`='$id'";
mysql_query($sql) or die(mysql_error());

unlink("logo/$logo");
echo "<script type='text/javascript'> window.location= 'logoupload.php'; </script>";
ob_flush();
?>