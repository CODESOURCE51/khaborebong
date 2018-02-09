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
    

	$("#add1").validate({
		rules: {
			category: {
				required: true
			},
			static_ad1: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			category: {
				required: "<br /> Select Category."
			
			},
			static_ad1: {
				required: "<br /> Please Select Image."
			
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
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='add1')
{
	
$cid=$_REQUEST['category'];
$select_ad1 = "SELECT * FROM `category` where `id`='$cid'";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

$row1= mysql_fetch_array($exe_ad1);
$feature_product_image= $row1['cat_image']; 
unlink("background/$feature_product_image");

$thumb_img1= mysql_real_escape_string($_REQUEST['static_ad1']);	
$url=$_POST['url1'];
$tmp_name=$_FILES['static_ad1']['tmp_name'];
$rand= rand(1000, 9999);
$target = "background/"; 
$target = $target .$rand. basename( $_FILES['static_ad1']['name']) ; 
move_uploaded_file($_FILES['static_ad1']['tmp_name'], $target); 
$thumb_img1= basename($rand.$_FILES['static_ad1']['name']);


$query_update= "UPDATE `category` SET 
            `cat_image`='$thumb_img1'
			 WHERE `id`='$cid'";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
            echo "<script type='text/javascript'> window.location= 'background.php?success'; </script>";	


ob_flush();

}


?>
<table align="center" width="750" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="5" class="err">
<?php if(isset($_REQUEST['success'])) { echo "Thanks! AD inserted successfully."; } ?>
    <?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
</td> </tr>

<tr> <td height="40" colspan="6"  align="center" class="edit">Background Image(1200 X 600)px</td> </tr>
<form name="add1" id="add1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add1" />
<tr>
<td width="114" height="35" align="left" valign="middle" class="form_txtr">Background</td>
<td width="217" height="35" align="left" valign="middle"><select name="category" id="category" class="rounded" style="width:180px; height:25px;">
  <option value=""> Select Category</option>
  <?php
$sql3 = "SELECT * from `category` group by category ";
$rs3 = mysql_query($sql3);
while($row3 = mysql_fetch_array($rs3))
{
?>
  <option value="<?php echo $row3['id']; ?>"><?php echo $row3['category']; ?></option>
  <?php } ?>
</select></td>
<td width="58" align="left" valign="middle" class="form_txtr">Image:</td>
<td width="250" align="left" valign="middle"><input onchange="readURL(this);" type="file" name="static_ad1" id="static_ad1" style="width:250px; height:20px;" /></td>
    <td width="101" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit1" id="submit1" value="submit" /></td>
</tr>
</form>
<form name="add2" id="add2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add2" />
</form>
<?php /*?>
<form name="add3" id="add3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add3" />
<tr>
<td height="35" align="left" valign="middle" class="form_txtr">AD3 URL:</td>
<td width="221" height="35" align="left" valign="middle"><input type="text" id="url3" name="url3" value="#" /></td>
<td width="221" align="left" valign="middle" class="form_txtr">AD3 Image:</td>
<td width="221" align="left" valign="middle"><input onchange="readURL(this);" type="file" name="static_ad3" id="static_ad3" style="width:250px; height:20px;" /></td>
    <td width="221" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit3" id="submit3" value="submit" /></td>
</tr>
</form>
<form name="add4" id="add4" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add4" />
<tr>
<td height="35" align="left" valign="middle" class="form_txtr">AD4 URL:</td>
<td width="221" height="35" align="left" valign="middle"><input type="text" id="url4" name="url4" value="#" /></td>
<td width="221" align="left" valign="middle" class="form_txtr">AD4 Image:</td>
<td width="221" align="left" valign="middle"><input onchange="readURL(this);" type="file" name="static_ad4" id="static_ad4" style="width:250px; height:20px;" /></td>
    <td width="221" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit4" id="submit4" value="submit" /></td>
</tr>
</form>
<form name="add5" id="add5" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add5" />
<tr>
<td height="35" align="left" valign="middle" class="form_txtr">AD5 URL:</td>
<td width="221" height="35" align="left" valign="middle"><input type="text" id="url5" name="url5" value="#" /></td>
<td width="221" align="left" valign="middle" class="form_txtr">AD5 Image:</td>
<td width="221" align="left" valign="middle"><input onchange="readURL(this);" type="file" name="static_ad5" id="static_ad5" style="width:250px; height:20px;" /></td>
    <td width="221" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit5" id="submit5" value="submit" /></td>
</tr>
</form>
<form name="add6" id="add6" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add6" />
<tr>
<td height="35" align="left" valign="middle" class="form_txtr">AD6 URL:</td>
<td width="221" height="35" align="left" valign="middle"><input type="text" id="url6" name="url6" value="#" /></td>
<td width="221" align="left" valign="middle" class="form_txtr">AD6 Image:</td>
<td width="221" align="left" valign="middle"><input onchange="readURL(this);" type="file" name="static_ad6" id="static_ad6" style="width:250px; height:20px;" /></td>
    <td width="221" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit6" id="submit6" value="submit" /></td>
</tr>
</form><?php */?>
<tr>
  <td height="120" colspan="5" align="center" class="edit"><span class="edit"><img src="" alt="" width='150' height='100' id="test"/></span></td>
</tr>
</table>

<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" bgcolor="#999999" class="form_txtr">Background</td>
    </tr>
  <tr>
    <td width="600">
      <?php
$select_ad1 = "SELECT * FROM `category`";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

while($row1= mysql_fetch_array($exe_ad1))
 {
		$cat_name= $row1['cat_name']; 
	$cat_image= $row1['cat_image']; 

?>
      <div>
        <table width="600" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='background/$cat_image' border='0' width='60' height='40' />"; ?></td>
            <td width="277" align="center"><a href="" class="baneer_link"><?php echo $cat_name; ?></a></td>
            
            </tr>
          </table>
        </div>
      <?php } ?>
    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  
</table>
</td> 
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