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
			url1: {
				required: true
			},
			static_ad1: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			url1: {
				required: "<br /> Please Enter Url."
			
			},
			static_ad1: {
				required: "<br /> Please Select Image."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#add2").validate({
		rules: {
			url2: {
				required: true
			},
			static_ad2: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			url2: {
				required: "<br /> Please Enter Url."
			
			},
			static_ad2: {
				required: "<br /> Please Select Image."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#add3").validate({
		rules: {
			url3: {
				required: true
			},
			static_ad3: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			url3: {
				required: "<br /> Please Enter Url."
			
			},
			static_ad3: {
				required: "<br /> Please Select Image."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#add4").validate({
		rules: {
			url4: {
				required: true
			},
			static_ad4: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			url4: {
				required: "<br /> Please Enter Url."
			
			},
			static_ad4: {
				required: "<br /> Please Select Image."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#add5").validate({
		rules: {
			url5: {
				required: true
			},
			static_ad5: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			url5: {
				required: "<br /> Please Enter Url."
			
			},
			static_ad5: {
				required: "<br /> Please Select Image."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#add6").validate({
		rules: {
			url6: {
				required: true
			},
			static_ad6: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			url6: {
				required: "<br /> Please Enter Url."
			
			},
			static_ad6: {
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
	

$select_ad1 = "SELECT * FROM `static_ads` where `id`='1'";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

$row1= mysql_fetch_array($exe_ad1);
$feature_product_image= $row1['image']; 
unlink("ad/$feature_product_image");

$thumb_img1= mysql_real_escape_string($_REQUEST['static_ad1']);	
$url=$_POST['url1'];
$tmp_name=$_FILES['static_ad1']['tmp_name'];
$rand= rand(1000, 9999);
$target = "ad/"; 
$target = $target .$rand. basename( $_FILES['static_ad1']['name']) ; 
move_uploaded_file($_FILES['static_ad1']['tmp_name'], $target); 
$thumb_img1= basename($rand.$_FILES['static_ad1']['name']);


$query_update= "UPDATE `static_ads` SET 
            `image`='$thumb_img1',
			`url`='$url'
			 WHERE `id`=1";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
            echo "<script type='text/javascript'> window.location= 'static_ads.php?success'; </script>";	


ob_flush();

}
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='add2')
{
$select_ad1 = "SELECT * FROM `static_ads` where `id`='2'";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

$row1= mysql_fetch_array($exe_ad1);
$feature_product_image= $row1['image']; 
unlink("ad/$feature_product_image");
	
$thumb_img1= mysql_real_escape_string($_REQUEST['static_ad2']);	
$url=$_POST['url2'];
$tmp_name=$_FILES['static_ad2']['tmp_name'];
$rand= rand(1000, 9999);
$target = "ad/"; 
$target = $target .$rand. basename( $_FILES['static_ad2']['name']) ; 
move_uploaded_file($_FILES['static_ad2']['tmp_name'], $target); 
$thumb_img1= basename($rand.$_FILES['static_ad2']['name']);


$query_update= "UPDATE `static_ads` SET 
            `image`='$thumb_img1',
			`url`='$url'
			 WHERE `id`=2";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
            echo "<script type='text/javascript'> window.location= 'static_ads.php?success'; </script>";	


ob_flush();

}
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='add3')
{
	$select_ad1 = "SELECT * FROM `static_ads` where `id`='3'";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

$row1= mysql_fetch_array($exe_ad1);
$feature_product_image= $row1['image']; 
unlink("ad/$feature_product_image");
	
$thumb_img1= mysql_real_escape_string($_REQUEST['static_ad3']);	
$url=$_POST['url3'];
$tmp_name=$_FILES['static_ad3']['tmp_name'];
$rand= rand(1000, 9999);
$target = "ad/"; 
$target = $target .$rand. basename( $_FILES['static_ad3']['name']) ; 
move_uploaded_file($_FILES['static_ad3']['tmp_name'], $target); 
$thumb_img1= basename($rand.$_FILES['static_ad3']['name']);


$query_update= "UPDATE `static_ads` SET 
            `image`='$thumb_img1',
			`url`='$url'
			 WHERE `id`=3";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
            echo "<script type='text/javascript'> window.location= 'static_ads.php?success'; </script>";	


ob_flush();

}
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='add4')
{
	$select_ad1 = "SELECT * FROM `static_ads` where `id`='4'";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

$row1= mysql_fetch_array($exe_ad1);
$feature_product_image= $row1['image']; 
unlink("ad/$feature_product_image");
	
$thumb_img1= mysql_real_escape_string($_REQUEST['static_ad4']);	
$url=$_POST['url4'];
$tmp_name=$_FILES['static_ad4']['tmp_name'];
$rand= rand(1000, 9999);
$target = "ad/"; 
$target = $target .$rand. basename( $_FILES['static_ad4']['name']) ; 
move_uploaded_file($_FILES['static_ad4']['tmp_name'], $target); 
$thumb_img1= basename($rand.$_FILES['static_ad4']['name']);


$query_update= "UPDATE `static_ads` SET 
            `image`='$thumb_img1',
			`url`='$url'
			 WHERE `id`=4";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
            echo "<script type='text/javascript'> window.location= 'static_ads.php?success'; </script>";	


ob_flush();

}
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='add5')
{
	$select_ad1 = "SELECT * FROM `static_ads` where `id`='5'";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

$row1= mysql_fetch_array($exe_ad1);
$feature_product_image= $row1['image']; 
unlink("ad/$feature_product_image");
	
$thumb_img1= mysql_real_escape_string($_REQUEST['static_ad5']);	
$url=$_POST['url5'];
$tmp_name=$_FILES['static_ad5']['tmp_name'];
$rand= rand(1000, 9999);
$target = "ad/"; 
$target = $target .$rand. basename( $_FILES['static_ad5']['name']) ; 
move_uploaded_file($_FILES['static_ad5']['tmp_name'], $target); 
$thumb_img1= basename($rand.$_FILES['static_ad5']['name']);


$query_update= "UPDATE `static_ads` SET 
            `image`='$thumb_img1',
			`url`='$url'
			 WHERE `id`=5";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
            echo "<script type='text/javascript'> window.location= 'static_ads.php?success'; </script>";	


ob_flush();

}
if(isset ($_REQUEST['mode']) && $_REQUEST['mode']=='add6')
{
		$select_ad1 = "SELECT * FROM `static_ads` where `id`='6'";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

$row1= mysql_fetch_array($exe_ad1);
$feature_product_image= $row1['image']; 
unlink("ad/$feature_product_image");
	
$thumb_img1= mysql_real_escape_string($_REQUEST['static_ad6']);	
$url=$_POST['url6'];
$tmp_name=$_FILES['static_ad6']['tmp_name'];
$rand= rand(1000, 9999);
$target = "ad/"; 
$target = $target .$rand. basename( $_FILES['static_ad6']['name']) ; 
move_uploaded_file($_FILES['static_ad6']['tmp_name'], $target); 
$thumb_img1= basename($rand.$_FILES['static_ad6']['name']);


$query_update= "UPDATE `static_ads` SET 
            `image`='$thumb_img1',
			`url`='$url'
			 WHERE `id`=6";
            $qu_up= mysql_query($query_update) or die(mysql_error());	
            echo "<script type='text/javascript'> window.location= 'static_ads.php?success'; </script>";	


ob_flush();

}
?>
<table align="center" width="650" border="0" cellspacing="0" class="table_bill">

<tr> <td colspan="5" class="err">
<?php if(isset($_REQUEST['success'])) { echo "Thanks! AD inserted successfully."; } ?>
    <?php if(isset($_REQUEST['error'])) { echo "Sorry! Not inserted."; } ?>
</td> </tr>

<tr> <td height="40" colspan="6"  align="center" class="edit">Static AD Upload</td> </tr>
<form name="add1" id="add1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add1" />
<tr>
<td height="35" align="left" valign="middle" class="form_txtr">AD1 URL:</td>
<td width="221" height="35" align="left" valign="middle"><input type="text" id="url1" name="url1" value="#" /></td>
<td width="221" align="left" valign="middle" class="form_txtr">AD1 Image:</td>
<td width="221" align="left" valign="middle"><input onchange="readURL(this);" type="file" name="static_ad1" id="static_ad1" style="width:250px; height:20px;" /></td>
    <td width="221" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit1" id="submit1" value="submit" /></td>
</tr>
</form>
<form name="add2" id="add2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<input type="hidden" name="mode" id="mode" value="add2" />
<tr>
<td height="35" align="left" valign="middle" class="form_txtr">AD2 URL:</td>
<td width="221" height="35" align="left" valign="middle"><input type="text" id="url2" name="url2" value="#" /></td>
<td width="221" align="left" valign="middle" class="form_txtr">AD2 Image:</td>
<td width="221" align="left" valign="middle"><input onchange="readURL(this);" type="file" name="static_ad2" id="static_ad2" style="width:250px; height:20px;" /></td>
    <td width="221" align="left" valign="middle"><input type="image" src="images/submit.jpg" border="0" name="submit2" id="submit2" value="submit" /></td>
</tr>
</form>
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
</form>
<tr>
  <td width="257" height="120" colspan="5" align="center" class="edit"><span class="edit"><img src="" alt="" width='150' height='100' id="test"/></span></td>
</tr>
</table>

<table width="900" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" bgcolor="#999999" class="form_txtr">AD1 (640px X 120px)</td>
    <td>&nbsp;</td>
    <td align="center" bgcolor="#999999" class="form_txtr">AD2 (640px X 120px)</td>
  </tr>
  <tr>
    <td width="440">
	<?php
$select_ad1 = "SELECT * FROM `static_ads` where `id`='1'";
$exe_ad1 = mysql_query($select_ad1) or die (mysql_error());

$row1= mysql_fetch_array($exe_ad1);
 
    $feature_product_id=$row1['id'];
		$ad_link= $row1['url']; 
	$feature_product_image= $row1['image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='ad/$feature_product_image' border='0' width='60' height='40' />"; ?></td>
            <td width="277" align="center"><a href="" class="baneer_link"><?php echo $ad_link; ?></a></td>
            
          </tr>
        </table>
      </div>
      
      </td>
    <td width="440">&nbsp;</td>
    <td width="460">
	<?php
$select_ad2 = "SELECT * FROM `static_ads` where `id`='2'";
$exe_ad2 = mysql_query($select_ad2) or die (mysql_error());

$row2= mysql_fetch_array($exe_ad2);
 
    $feature_product_id=$row2['id'];
	$ad_link= $row2['url']; 
	$feature_product_image= $row2['image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='ad/$feature_product_image' border='0' width='60' height='40' />"; ?></td>
            <td width="283" align="center"><a href="" class="baneer_link"><?php echo $ad_link; ?></a></td>
            
          </tr>
        </table>
      </div>
      
      </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#999999" class="form_txtr">AD3(640px X 120px)</td>
    <td>&nbsp;</td>
    <td align="center" bgcolor="#999999" class="form_txtr">AD4(640px X 120px)</td>
  </tr>
  <tr>
    <td><?php
$select_ad3 = "SELECT * FROM `static_ads` where `id`='3'";
$exe_ad3 = mysql_query($select_ad3) or die (mysql_error());

$row3= mysql_fetch_array($exe_ad3);

    $feature_product_id=$row3['id'];
	$ad_link= $row3['url']; 
	$feature_product_image= $row3['image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='ad/$feature_product_image' border='0' width='60' height='35' />"; ?></td>
            <td width="280" align="center"><a href="" class="baneer_link"><?php echo $ad_link; ?></a></td>
            
          </tr>
        </table>
      </div></td>
    <td>&nbsp;</td>
    <td>
	<?php
$select_ad4 = "SELECT * FROM `static_ads` where `id`='4'";
$exe_ad4 = mysql_query($select_ad4) or die (mysql_error());

$row4= mysql_fetch_array($exe_ad4);
$feature_product_id=$row4['id'];
$ad_link= $row4['url']; 
$feature_product_image= $row4['image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='ad/$feature_product_image' border='0' width='60' height='35' />"; ?></td>
            <td width="287" align="center"><a href="" class="baneer_link"><?php echo $ad_link; ?></a></td>
            
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td align="center" bgcolor="#999999" class="form_txtr">AD5(640px X 120px)</td>
    <td>&nbsp;</td>
    <td align="center" bgcolor="#999999" class="form_txtr">AD6(640px X 120px)</td>
  </tr>
  <tr>
    <td><?php
$select_ad3 = "SELECT * FROM `static_ads` where `id`='5'";
$exe_ad3 = mysql_query($select_ad3) or die (mysql_error());

$row3= mysql_fetch_array($exe_ad3);

    $feature_product_id=$row3['id'];
	$ad_link= $row3['url']; 
	$feature_product_image= $row3['image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='ad/$feature_product_image' border='0' width='60' height='35' />"; ?></td>
            <td width="280" align="center"><a href="" class="baneer_link"><?php echo $ad_link; ?></a></td>
            
          </tr>
        </table>
      </div></td>
    <td>&nbsp;</td>
    <td>
	<?php
$select_ad4 = "SELECT * FROM `static_ads` where `id`='6'";
$exe_ad4 = mysql_query($select_ad4) or die (mysql_error());

$row4= mysql_fetch_array($exe_ad4);
$feature_product_id=$row4['id'];
$ad_link= $row4['url']; 
$feature_product_image= $row4['image']; 

?>
      <div>
        <table width="440" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
          <tr>
            <td width="111" style="padding:6px 0 6px 15px;"><?php echo "<img src='ad/$feature_product_image' border='0' width='60' height='35' />"; ?></td>
            <td width="287" align="center"><a href="" class="baneer_link"><?php echo $ad_link; ?></a></td>
            
          </tr>
        </table>
      </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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