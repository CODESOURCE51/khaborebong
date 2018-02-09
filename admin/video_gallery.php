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
			question: {
				required: true
			},
			option1: {
				required: true
			},
			option2: {
				required: true
			}
			
		}, //end rules
		messages: {
			
			question: {
				required: "<br /> Please Enter Question."
			
			},
			option1: {
				required: "<br /> Enter Caption."
			
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
if(isset($_POST['vgallery']))
{
$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];


/////////////////////////////////////////////////////

$query= "INSERT INTO `video_gallery` (`ques`,`caption`,`url`) VALUES('$question','$option1','$option2')";
$query_exi= mysql_query($query) or die(mysql_error());

		
echo "<script type='text/javascript'> window.location= 'video_gallery.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="5" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="5"  align="center" class="edit">Enter Video Iframe Code (300X200)</td> </tr>
<tr>
<td height="35" align="centre" valign="middle" class="form_txtr">Insert Iframe Code</td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="165" height="35" align="left" valign="middle"><textarea name="question" id="question" class="rounded" style="height:100px; width:250px;"></textarea></td>
	<td width="65" align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td height="40" align="centre" valign="middle" class="form_txtr">Caption</td>
  <td height="40" align="center" valign="middle">:</td>
  <td height="40" align="left" valign="middle"><input type="text" name="option1" id="option1" class="rounded"  placeholder="ক্যাপশন"/></td>
  <td align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td height="35" align="centre" valign="middle" class="form_txtr">Meta Url</td>
  <td height="35" align="center" valign="middle">:</td>
  <td height="35" align="left" valign="middle"><input type="text" name="option2" id="option2" class="rounded" placeholder="abc_xyz"/></td>
  <td align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td height="35" align="centre" valign="middle" class="form_txtr">&nbsp;</td>
  <td height="35" align="center" valign="middle">&nbsp;</td>
  <td height="35" align="left" valign="middle"></td>
  <td align="left" valign="middle">&nbsp;</td>
</tr>


<tr>
  <td width="179" height="35" align="left" valign="middle">&nbsp; </td>  <td width="9" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="3" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="vgallery" id="vgallery" value="submit" /></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="3" align="left" valign="middle">&nbsp;</td>
</tr>
</table>
</form></td> 
</tr>
<tr>
  <td height="35" align="center" valign="top"><?php
$select_user = "SELECT * FROM `video_gallery` order by id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	$url= $row['url']; 
	$caption= $row['caption']; 
	$ques= $row['ques']; 

?>
        
        <div>
       		  <table width="900" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
  <tr>
    <td width="204" style="padding:6px 0 6px 15px;"><?php echo $ques; ?></td>
    <td width="369" align="center" class="baneer_link"><span class="baneer_link">Caption :</span><?php echo $caption; ?></td>
    <td width="200" align="center" class="baneer_link">Url : <?php echo $url; ?></td>
    <td width="127" align="center"><a href="vgallary_delete.php?id=<?php echo $id;?>"><img src="images/delete.png" height="24" width="75" border="0" /></a></td>
  </tr>
</table>
            </div>
          <?php } ?> </td>
</tr>
</table></td>
</tr>
<tr>
  <td align="left" valign="top"><?php include_once ("footer.php"); ?></td>
</tr>

</table>
</body>
</html>