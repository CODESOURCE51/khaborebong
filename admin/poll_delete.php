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

$sql="delete from `questions` where `id`='$id'";
mysql_query($sql) or die(mysql_error());
//header("location:techMaster.php");
echo "<script type='text/javascript'> window.location= 'poll.php'; </script>";
ob_flush();
?>