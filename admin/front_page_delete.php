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
$feature_product_id=$_REQUEST['feature_product_id'];
$feature_product_image=$_REQUEST['feature_product_image'];



$sql="delete from `ad` where `id`='$feature_product_id'";
mysql_query($sql) or die(mysql_error());
unlink("feature_product_image/$feature_product_image");
//header("location:techMaster.php");
echo "<script type='text/javascript'> window.location= 'front_page.php'; </script>";
ob_flush();
?>