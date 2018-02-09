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
			breakingnews: {
				required: true
			},
		}, //end rules
		messages: {
			
			breakingnews: {
				required: "<br /> Please Enter Breaking News."
			
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
if(isset($_POST['submit']))
{
$breakingnews = $_POST['breakingnews'];

/////////////////////////////////////////////////////
$query= "INSERT INTO `breaking_news` (`breakingnews`) 
                       VALUES('$breakingnews')";

			$query_exi= mysql_query($query) or die(mysql_error());	
		
echo "<script type='text/javascript'> window.location= 'breaking_news.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="4" class="err">
<?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
<?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
</td> </tr>

<tr> <td height="40" colspan="4"  align="center" class="edit">Breaking News</td> </tr>
<tr>
<td height="35" align="center" valign="middle" class="form_txtr">News</td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="485" height="35" align="left" valign="middle"><textarea name="breakingnews" id="breakingnews" class="video" style="width:300px; height:50px;"></textarea></td>
	</tr>


<tr>
  <td width="126" height="35" align="left" valign="middle">&nbsp; </td>  <td width="33" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle"><input type="image" src="images/update.png" border="0" name="submit" id="submit" value="submit" /></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle">&nbsp;</td>
</tr>
</table>
</form>
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5" align="centre" class="thanks">
	<?php if(isset($_REQUEST['success'])) { echo "Thanks! Inserted successfully."; } ?>
    </td>
    </tr>
  <tr>
    <td>
    <?php
$select_user = "SELECT * FROM `breaking_news` order by id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id']; 
	$breakingnews= $row['breakingnews']; 

?>
        
        <div>
       		  <table width="900" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
  <tr>
    <td style="padding:6px 0 6px 15px;"><span class="baneer_link">Caption :</span><?php echo $breakingnews; ?></td>
    <td width="123" align="center"><a href="breaking_news_del.php?id=<?php echo $id;?>"><img src="images/delete.png" height="24" width="75" border="0" /></a></td>
  </tr>
</table>
            </div>
                    <?php } ?> 
    </td>
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