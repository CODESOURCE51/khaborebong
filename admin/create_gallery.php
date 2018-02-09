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

			option1: {
				required: true
			},
			option2: {
				required: true
			}
			
		}, //end rules
		messages: {
			

			option1: {
				required: "<br /> Enter Album name."
			
			},
			option2: {
				required: "<br /> Enter Url title with using _ instead of spacebar."
			
			}
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
if(isset($_POST['albumsubmit']))
{
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$spc = $_POST['txt_spc'];

$query1= "INSERT INTO `album` (`album_name`,`url`,`special`) VALUES('$option1','$option2',$spc)";
$query_exi1= mysql_query($query1) or die(mysql_error());

		
echo "<script type='text/javascript'> window.location= 'create_gallery.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="5" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="5"  align="center" class="edit">Create Album</td> </tr>
<tr>
  <td height="35" align="centre" valign="middle" class="form_txtr">Album Name</td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="165" height="35" align="left" valign="middle"><input type="text" name="option1" id="option1" class="rounded" /></td>
  <td width="65" align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td height="35" align="centre" valign="middle" class="form_txtr">Meta Url</td>
  <td height="35" align="center" valign="middle">:</td>
  <td height="35" align="left" valign="middle"><input type="text" name="option2" id="option2" class="rounded" /></td>
  <td align="left" valign="middle">&nbsp;</td>
</tr>

<tr>
  <td height="35" align="centre" valign="middle" class="form_txtr">Special</td>
  <td height="35" align="center" valign="middle">:</td>
  <td height="35" align="left" valign="middle"><input type="checkbox" id="special" name="txt_spc" value="0" onclick="special_image();" /></td>
  <td align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td width="179" height="35" align="left" valign="middle">&nbsp; </td>  <td width="9" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="3" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="albumsubmit" id="albumsubmit" value="submit" /></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="3" align="left" valign="middle">&nbsp;</td>
</tr>
</table>
</form>
<?php
$select_user = "SELECT * FROM `album` order by id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	$url= $row['url']; 
	$album_name= $row['album_name']; 
	$album_day= $row['album_day'];

?>
        
        <div>
       		  <table width="900" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
  <tr>
    <td width="360" align="center" class="baneer_link"><span class="baneer_link">Album Name :</span><?php echo $album_name; ?></td>
    <td width="256" align="center" class="baneer_link">Url : <?php echo $url; ?></td>
    <td width="84" align="center"><a href="album_delete.php?id=<?php echo $id;?>"><img src="images/delete.png" height="24" width="75" border="0" /></a></td>
    <td width="200" class="baneer_link" align="center"><?php if($album_day==1) { ?> <span style="font-weight:bold; color:#FF0000;">Album of the Day</span><?php } else { ?><a href="active_album.php?id=<?php echo $id;?>">Active</a><?php } ?></td>
  </tr>
</table>
            </div>
          <?php } ?></td> 
</tr>
<tr>
  <td height="35" align="center" valign="top"> </td>
</tr>
</table></td>
</tr>
<tr>
  <td align="left" valign="top"><?php include_once ("footer.php"); ?></td>
</tr>

</table>
<script type="text/javascript">
	function special_image() {
		var sp = $('#special').val();
		//alert(sp);
		if (sp == 0) {
		$('#special').val(1);	
		}
		else if (sp == 1) {
		$('#special').val(0);	
		}
	}
</script>
</body>
</html>