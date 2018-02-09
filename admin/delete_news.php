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
$image=$_REQUEST['image'];
$source = "news_image/".$image;
$dest = "back_up_images/".$image;
copy($source, $dest);
unlink($source);
//unlink("news_image/$image");

$sql="delete from `news` where `id`='$id'";
mysql_query($sql) or die(mysql_error());
//header("location:techMaster.php");
echo "<script type='text/javascript'> window.location= 'approval.php'; </script>";
ob_flush();
?>