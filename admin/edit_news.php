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
			}
			
		 
		}, //end rules
		messages: {
			
			path: {
				required: "<br /> Please Select Category."
			
			},
			slider_image: {
				required: "<br /> Please Choose Slider Image."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<!----------------------validation----------------------------->
<!----------------------popup----------------------------->
<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
newwindow=window.open(url,'name','height=500,width=700');
if (window.focus) {newwindow.focus()}
return false;
}

// -->
</script>


<!----------------------popup----------------------------->
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
	$newid=$_REQUEST['id'];
//$slider_image= mysql_real_escape_string($_REQUEST['slider_image']);	
$category=$_REQUEST['category'];
$caption=addslashes($_REQUEST['caption']);
$description=addslashes($_REQUEST['description']);
$description2=addslashes($_REQUEST['description2']);
$description3=addslashes($_REQUEST['description3']);
$description4=addslashes($_REQUEST['description4']);
$description5=addslashes($_REQUEST['description5']);
$description6=addslashes($_REQUEST['description6']);
$description7=addslashes($_REQUEST['description7']);
$description8=addslashes($_REQUEST['description8']);
$description9=addslashes($_REQUEST['description9']);
$description10=addslashes($_REQUEST['description10']);
$description11=addslashes($_REQUEST['description11']);
$description12=addslashes($_REQUEST['description12']);
$caption_display=$_REQUEST['caption_display'];
$recent_news=$_REQUEST['recent_news'];
$popular=$_REQUEST['popular'];
$editor=$_REQUEST['editor'];
$hass_code=addslashes($_REQUEST['hass_code']);
$reporter=$_REQUEST['reporter'];
$video=$_REQUEST['vid_url'];
$path="http://khaborebong.com/".$category;
	

$query_update= "UPDATE `news` SET 
            `category`='$category',
			`caption`='$caption',
      `video_url`='$video',
			`description`='$description',
      `description2`='$description2',
      `description3`='$description3',
      `description4`='$description4',
      `description5`='$description5',
      `description6`='$description6',
      `description7`='$description7',
      `description8`='$description8',
      `description9`='$description9',
      `description10`='$description10',
      `description11`='$description11',
      `description12`='$description12',
			`caption_display`='$caption_display',
			`recent_news`='$recent_news',
			`popular`='$popular',
      `editor`='$editor',
			`hass_code`='$hass_code',
			`reporter`='$reporter'
			 WHERE `id`='$newid'";
 $qu_up= mysql_query($query_update) or die(mysql_error());	
 			
		
echo "<script type='text/javascript'> window.location= 'approval.php?success_up'; </script>";

ob_flush();

}



?>
<form name="payslip" id="payslip" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<table align="center" width="600" border="0" cellspacing="0" class="table_bill">
<?php 
$id=$_REQUEST['id'];
$sql_news="select * from news where id='$id'";
$exe_news = mysql_query($sql_news) or die (mysql_error());
$row_news= mysql_fetch_array($exe_news);
$caption_display=$row_news['caption_display'];
$recent_news=$row_news['recent_news'];
$popular=$row_news['popular'];
$editor=$row_news['editor'];
$image=$row_news['image'];

?>
<tr> <td colspan="4" class="err">&nbsp;</td> </tr>
<tr> <td height="40" colspan="4"  align="center" class="edit">ADD NEWS</td> </tr>

<tr>
  <td height="20" align="left" class="form_txtr">Category</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
  <td align="left" valign="middle"><select name="category" id="category" class="rounded" style="width:265px; height:30px;">
    <option value="">Select Category</option>
     <?php
$sql3 = "SELECT * from `category` order by id";
$rs3 = mysql_query($sql3);
while($row3 = mysql_fetch_array($rs3))
{
?>
    <option value="<?php echo $row3['id']; ?>" <?php if($row_news['category']==$row3['id']){ echo "selected"; }else{} ?>><?php echo $row3['category']; ?></option>
    <?php } ?>
    </select>
  </td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Caption</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><input type="text" name="caption" id="caption" value="<?php echo $row_news['caption']; ?>" /></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img.php?id=<?php echo $id;?>" onclick="return popitup('news_img.php?id=<?php echo $id;?>')"><?php echo "<img src='news_image/$image' width='100' height='50' border='0' />"; ?></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description" id="description" class="posting_categori_txtbox"><?php echo $row_news['description']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img.php?id=<?php echo $id;?>" onclick="return popitup('news_img2.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image2"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description2</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description2" id="description2" class="posting_categori_txtbox"><?php echo $row_news['description2']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img.php?id=<?php echo $id;?>" onclick="return popitup('news_img3.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image3"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description3</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description3" id="description3" class="posting_categori_txtbox"><?php echo $row_news['description3']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img4.php?id=<?php echo $id;?>" onclick="return popitup('news_img4.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image4"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description4</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description4" id="description4" class="posting_categori_txtbox"><?php echo $row_news['description4']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img5.php?id=<?php echo $id;?>" onclick="return popitup('news_img5.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image5"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description5</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description5" id="description5" class="posting_categori_txtbox"><?php echo $row_news['description5']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img.php6?id=<?php echo $id;?>" onclick="return popitup('news_img6.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image6"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description6</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description6" id="description6" class="posting_categori_txtbox"><?php echo $row_news['description6']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img7.php?id=<?php echo $id;?>" onclick="return popitup('news_img7.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image7"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description7</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description7" id="description7" class="posting_categori_txtbox"><?php echo $row_news['description7']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img8.php?id=<?php echo $id;?>" onclick="return popitup('news_img8.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image8"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description8</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description8" id="description8" class="posting_categori_txtbox"><?php echo $row_news['description8']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img9.php?id=<?php echo $id;?>" onclick="return popitup('news_img9.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image9"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description9</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description9" id="description9" class="posting_categori_txtbox"><?php echo $row_news['description9']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img10.php?id=<?php echo $id;?>" onclick="return popitup('news_img10.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image10"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description10</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description10" id="description10" class="posting_categori_txtbox"><?php echo $row_news['description10']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img11.php?id=<?php echo $id;?>" onclick="return popitup('news_img11.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image11"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description11</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description11" id="description11" class="posting_categori_txtbox"><?php echo $row_news['description11']; ?></textarea></td>
</tr>
<tr> 
  <td height="20" align="left" class="form_txtr">Slider Image</td>  <td width="7" height="35" align="center" valign="middle"> : </td>
  <td width="250" height="35" align="left" valign="middle" class="error">
  <a href="news_img12.php?id=<?php echo $id;?>" onclick="return popitup('news_img12.php?id=<?php echo $id;?>')"><img src='news_image/<?php echo $row_news["image12"];?>' width='100' height='50' border='0' /></a>
<input type="hidden" name="id" value="<?php echo $id;?>"  /></tr>
<tr>
<tr>
<td td height="20" align="left" class="form_txtr">Description12</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><textarea name="description12" id="description12" class="posting_categori_txtbox"><?php echo $row_news['description12']; ?></textarea></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Video URL</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><input type="text" name="vid_url" id="vid_url" value="<?php echo $row_news["video_url"];?>" /></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Caption Display on HomePage</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><input type="checkbox" name="caption_display" id="caption_display" value="1" <?php if($caption_display>0) { echo "checked"; } else {} ?> /></td>
</tr>
<tr>
<td td height="20" align="left" class="form_txtr">Recent News</td>
  <td width="7" height="35" align="center" valign="middle">:</td>
<td align="left" valign="middle"><input type="checkbox" name="recent_news" id="recent_news" value="1" <?php if($recent_news>0) { echo "checked"; } else {} ?>/></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr">Popular</td>
  <td height="35" align="center" valign="middle">:</td>
  <td align="left" valign="middle"><input type="checkbox" name="popular" id="popular" value="1" <?php if($popular>0) { echo "checked"; } else {} ?>/></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr">Editors Pick</td>
  <td height="35" align="center" valign="middle">:</td>
  <td align="left" valign="middle"><input type="checkbox" name="editor" id="editor" value="1" <?php if($editor>0) { echo "checked"; } else {} ?>/></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr"># Code</td>
  <td height="35" align="center" valign="middle">&nbsp;</td>
  <td align="left" valign="middle"><input type="text" name="hass_code" id="hass_code" value="<?php echo $row_news['hass_code']; ?>" placeholder=" abc1,abc2,abc3..." /></td>
</tr>
<tr>
  <td td height="20" align="left" class="form_txtr">Reporter</td>
  <td height="35" align="center" valign="middle">&nbsp;</td>
  <td align="left" valign="middle"><input type="text" name="reporter" id="reporter" value="<?php echo $row_news['reporter']; ?>" placeholder=" Staff Reporter" /></td>
</tr>

<tr>
  <td height="5" align="left" valign="middle">&nbsp;</td>
  <td height="5" align="center" valign="middle">&nbsp;</td>
  <td height="5" align="left" valign="middle" class="thanks">
    <?php if(isset($_REQUEST['success'])) { echo "Thanks! News updated successfully."; } ?>
    <?php if(isset($_REQUEST['error'])) { echo "Sorry! Not updated."; } ?>
    <?php if(isset($_REQUEST['fail'])) { echo "Sorry! invalid File."; } ?>
  </td>
  </tr>


<tr>
  <td width="116" height="35" align="left" valign="middle">&nbsp; </td>  <td width="7" height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle"><input type="image" src="images/update.png" border="0" name="submit" id="submit" value="submit" /></td> 
</tr>
<tr>
  <td height="35" align="left" valign="middle">&nbsp;</td>
  <td height="35" align="center" valign="middle" class="table_bill_data">&nbsp;</td>
  <td height="35" colspan="2" align="left" valign="middle">&nbsp;</td>
</tr>
</table>
</form>
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