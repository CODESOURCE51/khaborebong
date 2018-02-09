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
$page_name = $_POST['page_name'];

/////////////////////////////////////////////////////

$query_update= "UPDATE `category` SET 
            `cat_name`='$page_name'
			 WHERE `id`=20";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
		
echo "<script type='text/javascript'> window.location= 'special.php?success'; </script>";

ob_flush();

}
?>
<?php
if(isset($_POST['submitted_val']))
{
$page_name = $_POST['page_name1'];

/////////////////////////////////////////////////////

$query_update= "UPDATE `category` SET 
            `cat_name`='$page_name'
			 WHERE `id`=21";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
		
echo "<script type='text/javascript'> window.location= 'special.php?success'; </script>";

ob_flush();

}
?>
<?php
if(isset($_POST['submitted_quote']))
{
$page_name = $_POST['txt_quote'];

/////////////////////////////////////////////////////

$query_update= "UPDATE `category` SET 
            `cat_name`='$page_name'
			 WHERE `id`=22";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
		
echo "<script type='text/javascript'> window.location= 'special.php?success'; </script>";

ob_flush();

}
?>

<?php
if(isset($_POST['submitted_quote2']))
{
$page_name = $_POST['txt_quote2'];

/////////////////////////////////////////////////////

$query_update= "UPDATE `category` SET 
            `cat_name`='$page_name'
       WHERE `id`=23";
            $qu_up= mysql_query($query_update) or die(mysql_error()); 
    
echo "<script type='text/javascript'> window.location= 'special.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="35" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="5"  align="center" class="edit">SPECIAL PAGE NAME</td> </tr>
<tr>
<td height="35" align="right" class="form_txtr">Page Name </td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="209" height="35" align="left" valign="middle"><input type="text" name="page_name" id="page_name" value="<?php
$select_user = "SELECT * FROM `category` where id=20";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row= mysql_fetch_array($exe_selectuser);

	echo $row['cat_name']; 

?>" /></td>
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

<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="35" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="5"  align="center" class="edit">SPECIAL PAGE NAME</td> </tr>
<tr>
<td height="35" align="right" class="form_txtr">Page Name </td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="209" height="35" align="left" valign="middle"><input type="text" name="page_name1" id="page_name1" value="<?php
$select_user = "SELECT * FROM `category` where id=21";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row= mysql_fetch_array($exe_selectuser);

	echo $row['cat_name']; 

?>" /></td>
	<td width="157" align="left" valign="middle"><input type="image" src="images/update.png" border="0" name="submitted_val" id="submitted" value="submit" /></td>
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

<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="35" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="5"  align="center" class="edit">QUOTE O KOTHA</td> </tr>
<tr>
<td height="35" align="right" class="form_txtr"><input type="image" src="images/update.png" border="0" name="submitted_quote" id="submitted" value="submit" /> </td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="209" height="35" align="left" valign="middle"><textarea name="txt_quote" id="page_name1"><?php
$select_user = "SELECT * FROM `category` where id=22";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row= mysql_fetch_array($exe_selectuser);

	echo $row['cat_name']; 

?></textarea></td>
	<td width="157" align="left" valign="middle"></td>
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

<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="35" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="5"  align="center" class="edit">POST of THE DAY</td> </tr>
<tr>
<td height="35" align="right" class="form_txtr"><input type="image" src="images/update.png" border="0" name="submitted_quote2" id="submitted" value="submit" /> </td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="209" height="35" align="left" valign="middle"><textarea name="txt_quote2" id="page_name1"><?php
$select_user = "SELECT * FROM `category` where id=23";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row= mysql_fetch_array($exe_selectuser);

  echo $row['cat_name']; 

?></textarea></td>
  <td width="157" align="left" valign="middle"></td>
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
	<?php if(isset($_REQUEST['success'])) { echo "Thanks! Page name inserted successfully."; } ?>
    </td>
    </tr>
  <tr>
    <td align="center">&nbsp;</td>
    </tr>
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