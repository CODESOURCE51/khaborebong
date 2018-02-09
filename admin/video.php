<?php
ob_start();
include("connection.php"); 
$txtUsername=$_SESSION['txtUsername'];

if($_SESSION['txtUsername'])
	{
	
	}
	
else
{
//echo "<script type='text/javascript'> window.location='index.php'; </script>"; 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khabor Ebong</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<link rel='stylesheet' type='text/css' href='styles.css' />
<link rel='stylesheet' type='text/css' href='css/admin.css' />
<script type='text/javascript' src='menu_jquery.js'></script>



<style type="text/css">
.style4 {	font-family: Tahoma;
	font-size: 12px;
}
</style>

<!----------------------validation----------------------------->
 <script type="text/javascript" src="js/jquery.js"></script>  
  <script type="text/javascript" src="js/validate.js"></script>  
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#payslip").validate({
		rules: {
			video: {
				required: true
			},
		}, //end rules
		messages: {
			
			video: {
				required: "<br /> Please Enter a Video."
			
			},
		} //end messages
		
	}); //end validate
  });
</script>
<!----------------------validation----------------------------->

</head>

<body topmargin="0">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" style="border-left:solid #CCCCCC 1px; border-right:solid #CCCCCC 1px; border-bottom:solid #CCCCCC 1px;">
<tr>
<td align="left" valign="middle" height="110"><?php include("header.php"); ?></td>
</tr>
<tr>
<td align="left" valign="top" bgcolor="#ffffff" style="padding-left:8px; padding-right:8px;">
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
<td  width="265" rowspan="2" align="left" valign="top" class="left_panel"><?php include("left_panel.php"); ?></td>
<td height="250" align="center" valign="top" style="padding-left:6px; padding-top:10px;">
<?php
if(isset($_POST['submitted']))
{
$video = $_POST['video'];

/////////////////////////////////////////////////////
$q = "insert into video(video_path) values('".$video."')";
$query = mysql_query($q, $con) or die(mysql_error());

// $query_update= "UPDATE `video` SET 
//             `video_path`='$video'
// 			 WHERE `id`=1";
//             $qu_up= mysql_query($query_update) or die(mysql_error());	
		
echo "<script type='text/javascript'> window.location= 'video.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="35" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="5"  align="center" class="edit">VIDEO UPLOAD</td> </tr>
<tr>
<td height="35" align="right" class="form_txtr">Video(420px X 236px) </td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="209" height="35" align="left" valign="middle"><textarea name="video" id="video" class="video" style="height:100px; width:350px;"></textarea></td>
	<td width="157" align="left" valign="middle"><input type="image" src="images/update.png" border="0" name="submitted" id="submitted" value="submit" /></td>
</tr>


<tr>
  <td width="257" height="35" align="left" valign="middle">&nbsp; </td>  <td width="19" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="3" align="left" valign="middle"></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="3" align="left" valign="middle">&nbsp;</td>
</tr>
</table>
</form>
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="35" align="centre" class="thanks">
	<?php if(isset($_REQUEST['success'])) { echo "Thanks! Video inserted successfully."; } ?>
    </td>
    </tr>

    <?php
$select_user = "SELECT * FROM `video` order by id desc";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row= mysql_fetch_array($exe_selectuser);
do {
?>
  <tr>
    <td align="center">

	<?php echo $row['video_path']; ?>&nbsp; &nbsp;&nbsp;<?php if ($row['pub'] == 1){?> <a href="hide_bvideo.php?vid=<?php echo $row['id'];?>">Hide</a><?php } else {?><a href="publish_bvideo.php?vid=<?php echo $row['id'];?>">Publish</a><?php } ?>&nbsp;&nbsp;<a href="delete_bvideo.php?vid=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
    <?php } while($row= mysql_fetch_array($exe_selectuser)); ?>
  <tr>
    <td>&nbsp;</td>
    </tr>
</table></td> 
</tr>
<tr>
  <td height="35" align="center" valign="top">&nbsp;</td>
</tr>
</table></td>
</tr>
<tr>
  <td align="left" valign="top"><?php include_once ("footer.php"); ?></td>
</tr>

</table>
</body>
</html>