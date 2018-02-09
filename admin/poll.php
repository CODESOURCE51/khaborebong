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
				required: "<br /> Enter First option."
			
			},
			option2: {
				required: "<br /> Enter Second option."
			
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
if(isset($_POST['submit']))
{
$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];

/////////////////////////////////////////////////////

$query= "INSERT INTO `film_questions` (`ques`) VALUES('$question')";
$query_exi= mysql_query($query) or die(mysql_error());

$new_id=mysql_insert_id();

$query1= "INSERT INTO `film_options` (`ques_id`,`value`) VALUES('$new_id','$option1')";
$query_exi1= mysql_query($query1) or die(mysql_error());

$query2= "INSERT INTO `film_options` (`ques_id`,`value`) VALUES('$new_id','$option2')";
$query_exi2= mysql_query($query2) or die(mysql_error());

		
echo "<script type='text/javascript'> window.location= 'poll.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="5" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="5"  align="center" class="edit">POLL QUESTIONS</td> </tr>
<tr>
<td height="35" align="centre" valign="middle" class="form_txtr">Insert Question</td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="165" height="35" align="left" valign="middle"><textarea name="question" id="question" class="rounded"></textarea></td>
	<td width="65" align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td height="35" align="centre" valign="middle" class="form_txtr">Option 1</td>
  <td height="35" align="center" valign="middle">:</td>
  <td height="35" align="left" valign="middle"><input type="text" name="option1" id="option1" class="rounded" /></td>
  <td align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td height="35" align="centre" valign="middle" class="form_txtr">Option 2</td>
  <td height="35" align="center" valign="middle">:</td>
  <td height="35" align="left" valign="middle"><input type="text" name="option2" id="option2" class="rounded" /></td>
  <td align="left" valign="middle">&nbsp;</td>
</tr>


<tr>
  <td width="179" height="35" align="left" valign="middle">&nbsp; </td>  <td width="9" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="3" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit" id="submit" value="submit" /></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="3" align="left" valign="middle">&nbsp;</td>
</tr>
</table>
</form>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="577" height="5" align="centre" class="thanks">
	<?php if(isset($_REQUEST['success'])) { echo "Thanks! Questions inserted successfully."; } ?>
    </td>
    </tr>
  <tr>
    <td height="35" colspan="3" align="centre" valign="middle" class="form_txtr">Questions</td>
    <td width="183" height="35" align="left" valign="middle" class="form_txtr">Delete</td>
    </tr>
    <?php
	$select_qs = "SELECT * FROM `film_questions` ORDER BY `id` DESC";
$exe_qs = mysql_query($select_qs) or die (mysql_error());

while ($row= mysql_fetch_array($exe_qs))
{  
    $ques=$row['ques'];
	$id=$row['id'];

	 ?>
  <tr>
    <td height="35" colspan="3" align="left" valign="middle"><?php echo $ques ?></td>
    <td height="35" align="left" valign="middle"><a href="poll_delete.php?id=<?php echo $id;?>"><img src="images/del_icon.png" alt="" border="0"/delete.png /></a> </td>
    </tr>
 <?php } ?>
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