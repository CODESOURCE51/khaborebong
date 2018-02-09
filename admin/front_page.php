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

<!--          double selection                  -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#wait_1').hide();
	$('#drop_1').change(function(){
	  $('#wait_1').show();
	  $('#result_1').hide();
      $.get("func.php", {
		func: "drop_1",
		drop_var: $('#drop_1').val()
      }, function(response){
        $('#result_1').fadeOut();
        setTimeout("finishAjax('result_1', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax(id, response) {
  $('#wait_1').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}
</script>

<!--------------->

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
			drop_1: {
				required: true
			},
			product_name: {
				required: true
			},
			feature_product_image: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			drop_1: {
				required: "<br /> Please Select Category."
			
			},
			product_name: {
				required: "<br /> Please Enter Product Name."
			
			},
			feature_product_image: {
				required: "<br /> Please Choose Product Image."
			
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
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='add2')
{
$ads = $_POST['ads'];
$feature_product_image= mysql_real_escape_string($_REQUEST['feature_product_image']);
$url=$_POST['url'];
$tmp_name=$_FILES['feature_product_image']['tmp_name'];
$rand= rand(1000, 9999);
$target = "feature_product_image/"; 
$target = $target .$rand. basename( $_FILES['feature_product_image']['name']) ; 
move_uploaded_file($_FILES['feature_product_image']['tmp_name'], $target); 
$feature_product_image= basename($rand.$_FILES['feature_product_image']['name']);

/////////////////////////////////////////////////////

$query= "INSERT INTO `ad` (`feature_product_image`,`catagory`,`url`) 
                    VALUES('$feature_product_image','$ads','$url')";

			$query_exi= mysql_query($query) or die(mysql_error());
		
echo "<script type='text/javascript'> window.location= 'front_page.php?success'; </script>";

ob_flush();

}
?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add2" />
<table align="center" width="680" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="5" class="err">&nbsp;</td> </tr>

<tr> <td height="40" colspan="5"  align="center" bgcolor="#66FFFF" class="edit">Dynamic ADs(Each category should have 5 picture for proper functioning)</td> </tr>
<tr>
<td height="35" align="left" valign="middle" class="form_txtr">Product AD URL</td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="165" height="35" align="left" valign="middle"><input type="text" id="url" name="url" value="#" /></td>
	<td width="65" align="left" valign="middle">&nbsp;</td>
</tr>
<tr>
  <td height="35" align="left" valign="middle" class="form_txtr">Feature Product Path</td>
  <td height="35" align="center" valign="middle">:</td>
  <td width="165" height="35" align="left" valign="middle">
<select name="ads" id="ads" class="rounded" style="width:265px; height:30px;">
    <option value=""> Select AD</option>
    <option value="1">First ADs</option>
    <option value="2">Second ADs</option>
    <option value="3">Third ADs</option>
    </select>
    </td>
  <td width="65" align="left" valign="middle">&nbsp;</td>
  <td width="222" rowspan="3" align="left" valign="middle"><img alt="" id="test" src="" /></td>
</tr>
<tr> 
  <td width="179" height="35" align="left" valign="middle" class="form_txtr">Feature Product Image</td>  <td width="9" height="35" align="center" valign="middle"> : </td>
  <td height="35" colspan="2" align="left" valign="middle">
    <input onchange="readURL(this);" type="file" name="feature_product_image" id="feature_product_image" style="width:250px; height:20px;" /></td>
</tr>

<tr>
  <td height="5" align="left" valign="middle">&nbsp;</td>
  <td height="5" align="center" valign="middle">&nbsp;</td>
  <td height="5" colspan="2" align="left" valign="middle" class="thanks">
    <?php if(isset($_REQUEST['success'])) { echo "Thanks! Image inserted successfully."; } ?>
    <?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
  </td>
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
<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" class="form_txtr">AD1 (360px X 190px)</td>
    <td>&nbsp;</td>
    <td align="center" class="form_txtr">AD2 (360px X 190px)</td>
  </tr>
  <tr>
    <td width="440"><?php
$select_user = "SELECT * FROM `ad` where `catagory`='1'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $feature_product_id=$row['id'];
		$ad_link= $row['url']; 
	$feature_product_image= $row['feature_product_image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='feature_product_image/$feature_product_image' border='0' width='60' height='40' />"; ?></td>
            <td width="277" align="center"><a href=""><?php echo $ad_link; ?></a></td>
            <td width="52" align="center"><a href="front_page_delete.php?feature_product_id=<?php echo $feature_product_id;?>&feature_product_image=<?php echo $feature_product_image;?>"><img src="images/del_icon.png" alt="" border="0"/delete.png /></a></td>
          </tr>
        </table>
      </div>
      <?php } ?></td>
    <td width="440">&nbsp;</td>
    <td width="460"><?php
$select_user = "SELECT * FROM `ad` where `catagory`='2'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $feature_product_id=$row['id'];
	$ad_link= $row['url']; 
	$feature_product_image= $row['feature_product_image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='feature_product_image/$feature_product_image' border='0' width='60' height='40' />"; ?></td>
            <td width="283" align="center"><a href=""><?php echo $ad_link; ?></a></td>
            <td width="46" align="center"><a href="front_page_delete.php?feature_product_id=<?php echo $feature_product_id;?>&feature_product_image=<?php echo $feature_product_image;?>"><img src="images/del_icon.png" alt="" border="0"/delete.png /></a><a href="front_page_delete.php?feature_product_id=<?php echo $feature_product_id;?>"></a></td>
          </tr>
        </table>
      </div>
      <?php } ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" class="form_txtr">AD3 (360px X 190px)</td>
    <td>&nbsp;</td>
    <td align="center" class="form_txtr">&nbsp;</td>
  </tr>
  <tr>
    <td><?php
$select_user = "SELECT * FROM `ad` where `catagory`='3'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $feature_product_id=$row['id'];
	$ad_link= $row['url']; 
	$feature_product_image= $row['feature_product_image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='feature_product_image/$feature_product_image' border='0' width='60' height='35' />"; ?></td>
            <td width="280" align="center"><a href=""><?php echo $ad_link; ?></a></td>
            <td width="49" align="center"><a href="front_page_delete.php?feature_product_id=<?php echo $feature_product_id;?>&feature_product_image=<?php echo $feature_product_image;?>"><img src="images/del_icon.png" alt="" border="0"/delete.png /></a><a href="front_page_delete.php?feature_product_id=<?php echo $feature_product_id;?>"></a></td>
          </tr>
        </table>
      </div>
      <?php } ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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