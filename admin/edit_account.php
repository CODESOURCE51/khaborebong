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

     

 if(isset($_REQUEST['mode']) && $_REQUEST['mode']='mode')
{
$sql="update `admin` set `password`='".$_REQUEST['password']."' where `username`='".$_REQUEST['username']."' ";
		mysql_query($sql) or die(mysql_error());
		
		
		echo "<script type='text/javascript'> window.location= 'edit_account.php?success'; </script>";	
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

<!----------------------validation----------------------------->

 <script type="text/javascript" src="js/jquery.js"></script>  
  <script type="text/javascript" src="js/validate.js"></script>  
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#change_password").validate({
		rules: {
			username: {
				required: true
			},
			password: {
				required: true,
				minlength:6
			}
			
		 
		}, //end rules
		messages: {
			
			username: {
				required: "<br /> Please Enter Username."
			
			},
			password: {
				required: "<br /> Please Enter New Password.",
				minlength: "<br /> Password must be 6 character."
			
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
<td  width="265" align="left" valign="top" class="left_panel"><?php include("left_panel.php"); ?></td>
<td height="500" align="center" valign="middle">

<form action="edit_account.php" method="post" name="change_password" id="change_password"> 
<input type="hidden" name="mode" value="mode"> 
<table width="450" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="40" colspan="3" align="center" valign="middle" class="edit">Edit Account<br /><?php
                                if(isset($_REQUEST['success']))
								{
									echo "Your Password Changed Successfully.";
								}
								
								
								?></td>
    </tr>
  <tr>
    <td width="100" height="35" align="left" valign="middle" class="form_txtr">Username</td>
    <td width="25" height="35" align="center" valign="middle">:</td>
    <td width="325" height="35" align="left" valign="middle" class="error"><input type="text" name="username" id="" class="rounded" value="<?php echo $_SESSION['txtUsername']; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td height="35" align="left" valign="middle" class="form_txtr">New password</td>
    <td height="35" align="center" valign="middle">:</td>
    <td height="35" align="left" valign="middle"><input type="password" name="password" class="rounded" value=""/></td>
  </tr>
  <tr>
    <td height="20" align="left" valign="middle">&nbsp;</td>
    <td height="20" align="left" valign="middle">&nbsp;</td>
    <td height="20" align="left" valign="middle"> <i>(leave blank if you do not want to change your password)</i> </td>
  </tr>
  <tr>
    <td height="35" align="left" valign="middle">&nbsp;</td>
    <td height="35" align="left" valign="middle">&nbsp;</td>
    <td height="35" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" value="submit" /></td>
  </tr>
</table>
</form></td> 
</tr>
</table></td>
</tr>
<tr>
  <td height="50" align="left" valign="top" bgcolor="#ffffff"><?php include_once ("footer.php"); ?></td>
</tr>

</table>
</body>
</html>