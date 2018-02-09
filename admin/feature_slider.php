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
			path: {
				required: true
			},
			slider_image: {
				required: true
			},
			caption: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			path: {
				required: "<br /> Please Select Category."
			
			},
			slider_image: {
				required: "<br /> Please Choose Slider Image."
			
			},
			caption: {
				required: "<br /> Please Enter Caption."
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
if(isset($_REQUEST['slide_submit']))
{
$slider_image= mysql_real_escape_string($_REQUEST['slider_image']);	
$category=$_REQUEST['category'];
$caption=$_REQUEST['caption'];
$path=$category;	
$tmp_name=$_FILES['slider_image']['tmp_name'];
$rand= rand(1000, 9999);
$target = "slider_image/"; 
$target = $target .$rand. basename( $_FILES['slider_image']['name']) ; 
move_uploaded_file($_FILES['slider_image']['tmp_name'], $target); 
$slider_image= basename($rand.$_FILES['slider_image']['name']);

/////////////////////////////////////////////////////

$query= "INSERT INTO `feature_slider` (`slider_image`,`path`,`caption`) 
                       VALUES('$slider_image','$path','$caption')";

			$query_exi= mysql_query($query) or die(mysql_error());
		
echo "<script type='text/javascript'> window.location= 'feature_slider.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="600" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="4" class="err">&nbsp;</td> </tr>
<tr> <td height="40" colspan="4"  align="center" class="edit">Slider Image Upload (600 X 400)px</td> </tr>

<tr>
  <td height="20" align="left" class="form_txtr">Copy &amp; paste URL</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
  <td align="left" valign="middle"><input type="text" name="category" id="category" value="#" />
  
  </td>
</tr>
<tr>
  <td height="20" align="left" class="form_txtr">Caption</td>
  <td height="35" align="center" valign="middle">:</td>
  <td height="35" align="left" valign="middle" class="error"><input type="text" name="caption" id="caption" /></td>
  <td width="217" rowspan="3" align="left" valign="middle"><img alt="" id="test" src="" /></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
    <input onchange="readURL(this);" type="file" name="slider_image" id="slider_image" style="width:250px; height:20px;" /></td>
  </tr>

<tr>
  <td height="5" align="left" valign="middle">&nbsp;</td>
  <td height="5" align="center" valign="middle">&nbsp;</td>
  <td height="5" align="left" valign="middle" class="thanks">
    <?php if(isset($_REQUEST['success'])) { echo "Thanks! Feature Image inserted successfully."; } ?>
    <?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; }?>
  </td>
  </tr>


<tr>
  <td width="116" height="35" align="left" valign="middle">&nbsp; </td>  <td width="7" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="slide_submit" id="submit" value="submit" /></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle">&nbsp;</td>
</tr>
</table>
</form>
<?php
$select_user = "SELECT * FROM `feature_slider`";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $id=$row['id'];
	$path= $row['path']; 
	$caption= $row['caption']; 
	$slider_image= $row['slider_image']; 

?>
        
        <div>
       		  <table width="900" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
  <tr>
    <td width="155" style="padding:6px 0 6px 15px;"><?php echo "<img src='slider_image/$slider_image' border='0' width='100' height='65' />"; ?></td>
    <td width="309" align="center" class="baneer_link"><a href=""><?php echo $path; ?></a></td>
    <td width="309" align="center" class="baneer_link"><?php echo $caption; ?></td>
    <td width="127" align="center"><a href="feature_slider_delete.php?id=<?php echo $id;?>&slider_image=<?php echo $slider_image;?>"><img src="images/delete.png" border="0" /></a></td>
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