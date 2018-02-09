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
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='teacher_reg')
{
$img_id=$_REQUEST['img_id'];
$album_id=$_REQUEST['album_id'];
$img_name=$_REQUEST['img_name'];

$sql="delete from `album_details` where `id`='$img_id'";
mysql_query($sql) or die(mysql_error());

unlink("chobighar/$img_name");

			echo "<script type='text/javascript'> window.location='criteria.php?id=$album_id'; </script>";

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #666666;
}
-->
</style>
</head>

<body>
<table width="600"  cellspacing="1" cellpadding="1"  align="center">
  <tr>
   
    <td height="30" align="center" bgcolor="#24A4CB"  class="search style1">Minimum Eligibility Criteria for Honours</td>
  </tr>
  <tr>
    <td height="30" align="center" class="search style1"><?php
$id=$_REQUEST['id'];
$select_user = "SELECT * FROM `album_details` where `album_id`= '$id' order by id ASC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $img_id=$row['id'];
	$album_id=$row['album_id'];
	$image= $row['image']; 

?>
        <form name="add1" id="add1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <input type="hidden" name="mode" id="mode" value="teacher_reg" />
        <input type="hidden" name="img_id" id="img_id" value="<?php echo $img_id; ?>" />
        <input type="hidden" name="album_id" id="album_id" value="<?php echo $album_id; ?>" />
        <input type="hidden" name="img_name" id="img_name" value="<?php echo $image; ?>" />
       		  <table width="550" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;" align="center">
  <tr>
    <td width="257" style="padding:6px 0 6px 15px;"><?php echo "<img src='chobighar/$image' width='191' height='124'/>"; ?></td>
    <td width="202" align="center" class="baneer_link"><?php echo $row['caption']; ?></td>
  <td width="91" align="center"><input type="image" src="images/del_icon.png" border="0" name="submit_album" id="submit_album" value="submit_album" /></td>
    </tr>
</table>
</form>
                    <?php } ?> </td>
  </tr>
</table>

</body>
</html>