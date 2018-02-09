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

<script src="js/modernizr-2.6.2.min.js"></script>

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
			category: {
				required: true
			},
			path: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			category: {
				required: "<br /> Please Select Category."
			
			},
			path: {
				required: "<br /> Please Select Path."
			
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
if(isset($_POST['submitted']))
{
$caption= mysql_real_escape_string($_REQUEST['caption']);	

$path=mysql_real_escape_string($_REQUEST['path']);

$query= "INSERT INTO `importent_link` (`caption`,`path`) 
                       VALUES('$caption','$path')";

			$query_exi= mysql_query($query) or die(mysql_error());
		
echo "<script type='text/javascript'> window.location= 'imp_link.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="600" border="0" cellspacing="0" class="table_bill">

<tr> <td width="265" colspan="4" class="err">&nbsp;</td> </tr>
<tr> <td height="40" colspan="4"  align="center" class="edit">Page News Flash</td> </tr>
<tr> 
  <td height="35" align="left" class="form_txtr">Caption</td>  <td width="20" height="35" align="center" valign="middle" class="form_txtr"> : </td>
  <td colspan="2" rowspan="2" align="left" valign="middle" class="error">
    <textarea name="caption" id="caption" class="video" style="width:260px; height:50px;"></textarea>
    </td>
</tr>

<tr>
  <td height="5" align="left" valign="middle">&nbsp;</td>
  <td height="5" align="center" valign="middle">&nbsp;</td>
  </tr>


<tr>
  <td height="35" align="left" valign="middle" class="form_txtr">Link</td>
  <td height="35" align="center" valign="middle" class="form_txtr">:</td>
  <td height="35" colspan="2" align="left" valign="middle"><input type="text" name="path" id="path" value="#" /></td>
</tr>
<tr>
  <td width="99" height="35" align="left" valign="middle">&nbsp; </td>  <td width="20" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submitted" id="submitted" value="submit" /></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle"><?php if(isset($_REQUEST['success'])) { echo "Thanks! Feature Image inserted successfully."; } ?>
    <?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; }?>  </td>
</tr>
</table>
</form>
<?php
$select_user = "SELECT * FROM `importent_link` order by id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	$path= $row['path']; 
	$caption= $row['caption']; 

?>
        
        <div>
       		  <table width="900" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
  <tr>
    <td width="208" style="padding:6px 0 6px 15px;"><span class="baneer_link">Path :</span> <?php echo $path; ?></td>
    <td width="547" align="center" class="baneer_link"><span class="baneer_link">Caption :</span><?php echo $caption; ?></td>
    <td width="123" align="center"><a href="imp_link_del.php?id=<?php echo $id;?>"><img src="images/delete.png" height="24" width="75" border="0" /></a></td>
  </tr>
</table>
            </div>
                    <?php } ?> 
</td> 
</tr>
<tr>
  <td height="30" align="center" valign="top">&nbsp;</td>
</tr>
</table></td>
</tr>
<tr>
  <td align="left" valign="top"><?php include_once ("footer.php"); ?></td>
</tr>

</table>
</body>
</html>