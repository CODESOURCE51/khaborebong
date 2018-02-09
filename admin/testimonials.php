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
<!---------------------- Popup----------------------------->
<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height=500,width=700');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
<!---------------------- Popup---------------->
<!----------------------validation----------------------------->
 <script type="text/javascript" src="js/jquery.js"></script>  
  <script type="text/javascript" src="js/validate.js"></script>  
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#add1").validate({
		rules: {
			album_name: {
				required: true
			},
			caption: {
				required: true
			},
			static_ad1: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			album_name: {
				required: "<br /> Please Select Album Name."
			
			},
			caption: {
				required: "<br /> Please Enter Caption."
			
			},
			static_ad1: {
				required: "<br /> Please Select Image."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<!--validation-->

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
if(isset($_POST['submit_album']))
{

$tmp_name=$_FILES['static_ad1']['tmp_name'];
$rand= rand(10000, 99999);
$target = "testimonials/"; 
$target = $target .$rand. basename( $_FILES['static_ad1']['name']) ; 
move_uploaded_file($_FILES['static_ad1']['tmp_name'], $target); 
$thumb_img1= basename($rand.$_FILES['static_ad1']['name']);


$query1= "INSERT INTO `td_testimonials` (`image`) VALUES('$thumb_img1')";
$query_exi1= mysql_query($query1) or die(mysql_error());

echo "<script type='text/javascript'> window.location= 'testimonials.php?success'; </script>";	

ob_flush();

}

?>
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="6" align="center" class="err">
<?php if(isset($_REQUEST['success'])) { echo "Thanks! AD inserted successfully."; } ?>
    <?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
</td> 
  </tr>

<tr> <td height="40" colspan="7"  align="center" class="edit">Testimonials</td> </tr>
<form name="add1" id="add1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

<tr>
  <td height="35" align="left" valign="middle" class="form_txtr"></td>
  <td height="35" align="left" valign="middle"><span class="edit"><img src="" alt="" width='200' height='100' id="test"/></span></td>
  <td width="232" rowspan="4" align="center" valign="top"></td>
</tr>

<tr>
  <td height="35" align="left" valign="middle" class="form_txtr">Image:</td>
  <td height="35" align="left" valign="middle"><input onchange="readURL(this);" type="file" name="static_ad1" id="static_ad1" style="width:250px; height:20px;" />(632 * 140)</td>
  </tr>
<tr>
  <td height="15" align="left" valign="middle" class="form_txtr">&nbsp;</td>
  <td height="15" align="left" valign="middle">&nbsp;</td>
  </tr>
<tr>
  <td height="35" align="left" valign="middle" class="form_txtr">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit_album" id="submit_album" value="submit_album" /></td>
  </tr>
</form>
<tr>
  <td colspan="6" align="center" class="edit"></td>
</tr>
</table>
<table width="900" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #CCC; padding:20px;">
  <tr>
    <td align="left" valign="top">
    <?php
	
	$q= "SELECT * FROM `td_testimonials` order by testi_id asc";
	$r= mysql_query($q) or die (mysql_error());
	$roww= mysql_fetch_array($r);
do {
?>
   
    <table width="200" border="0" cellspacing="0" cellpadding="0" align="left" style="margin-right:12px; margin-bottom:10px;">
      <tr>
        <td height="155" align="center" valign="bottom" style="background-image:url(images/folder.png);"><img src="testimonials/<?php echo $roww['image'];?>" width="191" height="124" style="padding-bottom:5px; border-radius: 5px 5px 0px 0px; "/></td>
      </tr>
       <tr>
        <td height="30" align="center" valign="bottom" ><a href="delete_testimonials.php?id=<?php echo $roww['testi_id'];?>">Delete</a></td>
      </tr>
    </table>
    
    <?php } while($roww= mysql_fetch_array($r));?>
   
    </td>
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