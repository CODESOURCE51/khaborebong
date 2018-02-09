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

$sql_news="select * from news where id='$id'";
$exe_news = mysql_query($sql_news) or die (mysql_error());
$row_news= mysql_fetch_array($exe_news);
$image=$row_news['image2'];

unlink("news_image/$image");

$tmp_name=$_FILES['item_image']['tmp_name'];
$rand= rand(1000, 9999);
$target = "news_image/"; 
$target = $target .$rand. basename( $_FILES['item_image']['name']) ; 
move_uploaded_file($_FILES['item_image']['tmp_name'], $target); 
$item_image= basename($rand.$_FILES['item_image']['name']);

///////////////////////////////////////////////////// 	
			$query_update= "UPDATE `news` SET 
            `image2`='$item_image'
			 WHERE `id`='$id'";
            $qu_up= mysql_query($query_update) or die(mysql_error());
			echo "<script type='text/javascript'> window.location='edit_news.php?id=$id'; </script>";


?>