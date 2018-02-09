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
<script type='text/javascript' src='menu_jquery.js'></script>
<link href="css/eShop.css" rel="stylesheet" type="text/css" />
<!--//////////////image priview///////////////////-->
<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#test').attr('src', e.target.result);
}
reader.readAsDataURL(input.files[0]);
}
}
</script>
<!--/////////////////////////////////-->
</head>

<body>

<form name="payslip" id="payslip" method="post" action="news_img_up12.php?id=<?php echo $_REQUEST['id'];?>" enctype="multipart/form-data">
<?php
							$id=$_REQUEST['id'];
							
                            $query="SELECT * FROM `news` where `id`='$id'";
							$result=mysql_query($query) or die(mysql_error());
							$row = mysql_fetch_array($result);
							
							?>
<table align="center" width="700" border="0" cellspacing="0" style="border:1px solid #333; background:#CEFDF0;">
  <tr>
    <td class="err"><?php if(isset($_REQUEST['success'])) { echo "Thanks! updated successfully."; } ?>
      <?php if(isset($_REQUEST['error'])) { echo "Sorry!"; } ?></td>
    <td class="err">&nbsp;</td>
    <td colspan="3" class="err">&nbsp;</td>
  </tr>
  <tr>
    <td height="40" colspan="5"  align="center" class="nw_text_area"><h2>Image Update</h2></td>
  </tr>
  <tr>
    <td width="101" height="35" align="center" class="nw_text_area">Browse Image:</td>
    <td width="10" height="35" align="left"> : </td>
    <td width="250" height="35" align="left"><input type="file" name="item_image" id="item_image" style="width:250px; height:20px;" onchange="readURL(this);" /><input type="hidden" name="field" value="<?php echo $field; ?>" /><input type="hidden" name="tablename" value="<?php echo $tablename; ?>" /></td>
    <td width="147" height="35" align="left"><span class="form_txtr"></span></td>
    <td width="182" align="left"><span class="edit"><img src="" alt="" width='150' height='200' id="test"/></span></td>
  </tr>
  <tr>
    <td align="left" width="101">&nbsp;</td>
    <td align="left" width="10" class="table_bill_data">&nbsp;</td>
    <td height="40" colspan="3" align="left"><input type="image" src="images/update.PNG" border="0" value="submit" name="submit" id="submit" /></td>
  </tr>
</table>
</form>
</body>
</html>