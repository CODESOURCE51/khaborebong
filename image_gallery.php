<?php 
$cat_id=$_REQUEST['cat_id'];
$cat=$_REQUEST['category_name'];
?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
   

<title>Khaborebong.com - Online Bengali News Portal</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #B1C7D6;
}
.style4 {color: #FF0000; font-size: 14px; font-family: Arial, Helvetica, sans-serif; }
.style6 {
	color: #FFFFFF;
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
.style8 {
	font-size: 12px;
	color: #FFFFFF;
}
.style9 {
	color: #FF0000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style11 {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
}
.style16 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFFFF;
}
.style19 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #003366;
	font-weight: bold;
}
.style20 {
	color: #FFFFFF;
	font-size: 20px;
	font-family: 'Roboto Condensed', sans-serif;
	
}
.style22 {font-family: 'Roboto Condensed', sans-serif; font-size: 20px; color:#FFFFFF;}
.style23 {
	font-size: 24px;
	color: #FF0000;
}
.style27 {font-size: 19px}
.style28 {font-family: Arial, Helvetica, sans-serif}
.style29 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
}
.style31 {font-size: 14px; font-family: 'Roboto Condensed', sans-serif; }
.style34 {
	color: #666666;
	font-size: 12px;
	font-family: 'Roboto Condensed', sans-serif;
}
.style35 {
	color: #999999;
	font-weight: bold;
}
.style36 {color: #999999}
.style37 {font-size: 14px; font-family: 'Roboto Condensed', sans-serif; font-weight: bold; color: #999999; }
.style38 {font-size: 14px; font-family: 'Roboto Condensed', sans-serif; color: #999999; }
.style41 {
	font-size: 15px;
	font-family: 'Roboto Condensed', sans-serif;
	color: #000000;
}
.style44 {
	font-size: 18px;
	color: #FF0000;
}
.style46 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style48 {font-size: 24px; color: #FFFF00; }
.style50 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 12px;
}
.two_image
{
	list-style:none;
	float:left;
	height:auto;
	width:100%;
	margin:0px;
	padding:0px;
	margin-bottom:50px;
}
.two_image li
{
	width:calc((100% - 20px) / 2);
	height:auto;
	float:left;
	margin-right:20px;
	margin-bottom:20px;
}
.two_image li img
{
	width:100%;
	height:auto;
	display:block;
	padding:2px;
	border:1px solid #BDBDBD;
	box-sizing:border-box;
}
.two_image li p
{
	margin:5px 0px 0px 0px;
	text-align:center;
	text-transform:capitalize;
}
.two_image li:nth-child(2n)
{
	margin-right:0px;
}



.three_image
{
	list-style:none;
	float:left;
	height:auto;
	width:100%;
	margin:0px;
	padding:0px;
	margin-bottom:50px;
}
.three_image li
{
	width:calc((100% - 40px) / 3);
	height:auto;
	float:left;
	margin-right:20px;
	margin-bottom:20px;
}
.three_image li img
{
	width:100%;
	height:auto;
	display:block;
	padding:2px;
	border:1px solid #BDBDBD;
	box-sizing:border-box;
}
.three_image li p
{
	margin:5px 0px 0px 0px;
	text-align:center;
	text-transform:capitalize;
}
.three_image li:nth-child(3n)
{
	margin-right:0px;
}




-->
</style></head>

<body>
<script type="text/javascript" src="js/arrow27.js"></script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
<table width="1064" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1064" height="36" align="center" valign="middle" bgcolor="#000000"><?php include('social_search.php');?></td>
  </tr>
  <tr>
    <td width="1064" height="140" align="center" valign="middle" bgcolor="#FFFFFF"><?php include('banner.php');?></td>
  </tr>
  <tr>
    <td width="1064" height="40" align="center" valign="middle" bgcolor="#FFFFFF"><?php include('breaking_news.php');?></td>
  </tr>
  <tr>
    <td width="1064" height="76" align="center" valign="middle" bgcolor="#FFFFFF"><?php include('menu.php');?></td>
  </tr>
  
  <tr>
    <td height="40" align="center" valign="top" bgcolor="#FFFFFF"><?php include('news_flash.php');?></td>
  </tr>
  <tr>
    <td  align="center" valign="middle" bgcolor="#FFFFFF"><?php /*?><?php include('slider.php');?><?php */?></td>
  </tr>
  <tr>
    <td height="20" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5020" align="center" valign="top" bgcolor="#FFFFFF"><table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td></td>
        <td width="40" rowspan="2" align="center" valign="middle" background="images_khaborebong/divider.png">&nbsp;</td>
        <td width="360" rowspan="2" align="center" valign="top"><div  class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 ); width:360px; padding:8px 0px; text-align: left;">&nbsp;&nbsp;&nbsp;Popular News</div><?php include('right_bar.php');?></td>
      </tr>
      <tr>
        <td align="center" valign="top">
        <table width="640" border="0" cellspacing="0" cellpadding="0">
        	<ul class="two_image">
        	<?php
$select_user1 = "SELECT * FROM `album` WHERE special = 1 order by id DESC";
$exe_selectuser1 = mysql_query($select_user1) or die (mysql_error());
$row1= mysql_fetch_array($exe_selectuser1);
$total= mysql_num_rows($exe_selectuser1);


?> 
        	<?php
        	do {
            
	$id1= $row1['id'];
    $album_name1= $row1['album_name'];
	$album_url1= $row1['url'];
	
	$q1= "SELECT * FROM `album_details` WHERE `album_id`= '$id1' order by id asc limit 1";
	$r1= mysql_query($q1) or die (mysql_error());
	$roww1= mysql_fetch_array($r1);

	$imagee1= $roww1['image'];
    if($total > 0 ) {
?>
            	<li><a href="gallery_details.php?cat_id=17&category_name=photo_gallery&al_id=<?php echo $id1; ?>&caption=<?php echo $album_url1; ?>"><img src="admin/chobighar/<?php echo $imagee1; ?>" /><p><?php echo $album_name1; ?></p></a></li>
                <?php } } while ($row1= mysql_fetch_array($exe_selectuser1))?>
            </ul>
        
            <ul class="three_image">
            <?php
$select_user = "SELECT * FROM `album` WHERE special = 0 order by id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$i=0;

?> 
            <?php
            while ($row= mysql_fetch_array($exe_selectuser))
{
	$id= $row['id'];
    $album_name= $row['album_name'];
	$album_url= $row['url'];
	$i++;
	$q= "SELECT * FROM `album_details` WHERE `album_id`= '$id' order by id asc limit 1";
	$r= mysql_query($q) or die (mysql_error());
	$roww= mysql_fetch_array($r);

	$imagee= $roww['image'];
    if(($i % 3) == 0){ $val= "style='float:left; margin-right:0px;'"; }else{ $val= "style='float:left; margin-right:20px;'"; }
?>
            	<li><a href="gallery_details.php?cat_id=17&category_name=photo_gallery&al_id=<?php echo $id; ?>&caption=<?php echo $album_url; ?>"><img src="admin/chobighar/<?php echo $imagee; ?>" /><p><?php echo $album_name; ?></p></li></a>
                <?php } ?>
                
            </ul>
        </table>
        
        
        
                  
        </td>
      </tr>
      <tr>
        <td height="25" colspan="3" align="center" valign="middle"><hr /></td>
      </tr>
      <tr>
        <td height="320" colspan="3" align="center" valign="top"><?php include('footer.php');?></td>
        </tr>
      
      
    </table></td>
  </tr>
</table>
 <?php				
$select_user = "SELECT * FROM `category` where `category`='$cat'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row= mysql_fetch_array($exe_selectuser);
$cat_image= $row['cat_image']; 

?>
<div id="pbg">
<img src="admin/background/<?php echo $cat_image; ?>" />
</div>
<script src="js/jquery.ez-bg-resize.js"></script>
<script>
$("#pbg").ezBgResize();
</script>
</body>
</html>
