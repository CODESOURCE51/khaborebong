<?php 
$cat="index";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="css/index_style.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/crawler.js" type="text/javascript"></script>
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
    <td height="400" align="center" valign="middle" bgcolor="#FFFFFF"><?php include('slider.php');?></td>
  </tr>
  <tr>
    <td height="20" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5020" align="center" valign="top" bgcolor="#FFFFFF"><table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="300" height="40" bgcolor="#FF0000" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><span class="style20"><a href="news_list.php?cat_id=1&category_name=kolkata">&nbsp;&nbsp;&nbsp;Kolkata</a></span></td>
        <td width="40" rowspan="3" align="center" valign="middle" background="images_khaborebong/divider2.png">&nbsp;</td>
        <td width="300" height="40" bgcolor="#FF0000" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><span class="style20">
<a href="news_list.php?cat_id=2&category_name=district">&nbsp;&nbsp;&nbsp;District</a></span></td>
        <td width="40" rowspan="45" align="center" valign="middle" background="images_khaborebong/divider.png">&nbsp;</td>
        <td width="360" height="40" bgcolor="#000000" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Popular News</td>
      </tr>
      <tr>
        <td width="300" height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '1'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=1&category_name=kolkata"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        <td width="300" height="200" align="center" valign="middle"><?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '2'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=2&category_name=district"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a></td>
        <td width="360" rowspan="44" align="center" valign="top"><?php include('right_bar.php');?></td>
      </tr>
      <tr>
        <td width="300" height="200" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
          <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '1' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category'];

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27">
			<a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a></span>
            </td>
          </tr>
          
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=1&category_name=kolkata">Read More</a></span></td>
          </tr>
        </table></td>
        <td width="300" height="200" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
           <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '2' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a></span>
</td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=2&category_name=district">Read More</a></span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td width="300" height="18">&nbsp;</td>
        <td width="40" height="18">&nbsp;</td>
        <td width="300" height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="120" colspan="3" align="center" valign="middle" bgcolor="#E6E6E6"> <?php $qa= "SELECT * FROM `static_ads` WHERE `id`= '1'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$url= $row1['url'];
	$image= $row1['image']; ?>
                
        <a href="<?php echo $url; ?>"><img src="admin/ad/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="640" height="120" /></a></td>
        </tr>
      <tr>
        <td width="300" height="18">&nbsp;</td>
        <td width="40" height="18">&nbsp;</td>
        <td width="300" height="18">&nbsp;</td>
        </tr>
      <tr>
        <td width="300" height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=3&category_name=nation">&nbsp;&nbsp;&nbsp;Nation</a></td>
        <td width="40" rowspan="3" align="center" valign="middle" background="images_khaborebong/divider2.png">&nbsp;</td>
        <td width="300" height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=4&category_name=international">&nbsp;&nbsp;&nbsp;International</a></td>
        </tr>
      <tr>
        <td width="300" height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '3'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=3&category_name=nation"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        <td width="300" height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '4'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=4&category_name=international"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        </tr>
      <tr>
        <td width="300" height="200" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
          <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '3' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=3&category_name=nation">Read More</a></span></td>
          </tr>
        </table></td>
        <td width="300" height="200" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
          <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '4' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=4&category_name=international">Read More</a></span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td width="300" height="18">&nbsp;</td>
        <td width="40" height="18">&nbsp;</td>
        <td width="300" height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="120" colspan="3" align="center" valign="middle" bgcolor="#E6E6E6">
        <?php $qa= "SELECT * FROM `static_ads` WHERE `id`= '2'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$url= $row1['url'];
	$image= $row1['image']; ?>
                
        <a href="<?php echo $url; ?>"><img src="admin/ad/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="640" height="120" /></a>
        </td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=5&category_name=sports">&nbsp;&nbsp;&nbsp;Sports</a></td>
        <td rowspan="3" align="center" valign="middle" background="images_khaborebong/divider2.png">&nbsp;</td>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=6&category_name=entertainment">&nbsp;&nbsp;&nbsp;Entertainment</a></td>
        </tr>
      <tr>
        <td height="200" align="center" valign="middle">
         <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '5'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=5&category_name=sports"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        <td height="200" align="center" valign="middle">
         <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '6'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=6&category_name=entertainment"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        </tr>
      <tr>
        <td height="200" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
 <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '5' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=5&category_name=sports">Read More</a></span></td>
          </tr>
          
        </table></td>
        <td height="200" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
          <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '6' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=6&category_name=entertainment">Read More</a></span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="120" colspan="3" align="center" valign="middle" bgcolor="#E6E6E6">
        <?php $qa= "SELECT * FROM `static_ads` WHERE `id`= '3'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$url= $row1['url'];
	$image= $row1['image']; ?>
                
        <a href="<?php echo $url; ?>"><img src="admin/ad/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="640" height="120" /></a>
        </td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=7&category_name=business_technology">&nbsp;&nbsp;&nbsp;Business & Technology</a></td>
        <td rowspan="3" align="center" valign="middle" background="images_khaborebong/divider2.png">&nbsp;</td>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=8&category_name=health_lifestyle">&nbsp;&nbsp;&nbsp;Health & Lifestyle</a></td>
        </tr>
      <tr>
        <td height="200" align="center" valign="middle">
         <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '7'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=7&category_name=business_technology"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '8'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=8&category_name=health_lifestyle"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        </tr>
      <tr>
        <td height="200" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
           <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '7' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=7&category_name=business_technology">Read More</a></span></td>
          </tr>
        </table></td>
        <td height="200" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
       <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '8' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=8&category_name=health_lifestyle">Read More</a></span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="150" colspan="3" align="center" valign="middle">
        <table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr><td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="image_gallery.php?cat_id=17&category_name=photo_gallery">&nbsp;&nbsp;&nbsp;Recent Album</a></td></tr>
          <tr>
            <td height="30" align="center" valign="middle">
            <div class="marquee" id="mycrawler2">
            <?php
$select_user = "SELECT * FROM `album` order by id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
while ($row= mysql_fetch_array($exe_selectuser))
{
	$id= $row['id'];
    $album_name= $row['album_name'];
	
	$q= "SELECT * FROM `album_details` WHERE `album_id`= '$id' order by id asc limit 1";
	$r= mysql_query($q) or die (mysql_error());
	$roww= mysql_fetch_array($r);

	$imagee= $roww['image'];

?>
<a href="image_gallery.php?cat_id=17&category_name=photo_gallery">
<img src="admin/chobighar/<?php echo $imagee; ?>" width="300" height="128" style="padding:0 10px 0 10px;"/>
</a>
<?php } ?>
</div>

<script type="text/javascript">
marqueeInit({
	uniqueid: 'mycrawler2',
	style: {
		'padding': '2px',
		'width': '640px',
		'height': '150px'
	},
	inc: 5, //speed - pixel increment for each iteration of this marquee's movement
	mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
	moveatleast: 2,
	neutral: 150,
	savedirection: true,
	random: true
});
</script></td>
            </tr>
          </table>
          </td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=9&category_name=aaj">&nbsp;&nbsp;&nbsp;Aaj</a></td>
        <td rowspan="3" align="center" valign="middle" background="images_khaborebong/divider2.png">&nbsp;</td>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=10&category_name=astrology">&nbsp;&nbsp;&nbsp;Astrology</a></td>
        </tr>
      <tr>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '9'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=9&category_name=aaj"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '10'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=10&category_name=astrology"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        </tr>
      <tr>
        <td height="180" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
   <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '9' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=9&category_name=aaj">Read More</a></span></td>
          </tr>
        </table></td>
        <td height="180" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
 <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '10' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=10&category_name=astrology">Read More</a></span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="120" colspan="3" align="center" valign="middle" bgcolor="#E6E6E6"
        ><?php $qa= "SELECT * FROM `static_ads` WHERE `id`= '4'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$url= $row1['url'];
	$image= $row1['image']; ?>
                
        <a href="<?php echo $url; ?>"><img src="admin/ad/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="640" height="120" /></a></td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=11&category_name=ladies_special">&nbsp;&nbsp;&nbsp;Ladies Special</a></td>
        <td rowspan="3" align="center" valign="middle" background="images_khaborebong/divider2.png">&nbsp;</td>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=12&category_name=ranna_ghar">&nbsp;&nbsp;&nbsp;Ranna Ghar</a></td>
        </tr>
      <tr>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '11'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=11&category_name=ladies_special"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '12'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=12&category_name=ranna_ghar"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        </tr>
      <tr>
        <td height="180" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
 <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '11' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=11&category_name=ladies_special">Read More</a></span></td>
          </tr>
        </table></td>
        <td height="180" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
         <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '12' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=12&category_name=ranna_ghar">Read More</a></span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="120" colspan="3" align="center" valign="middle" bgcolor="#E6E6E6">
        <?php $qa= "SELECT * FROM `static_ads` WHERE `id`= '5'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$url= $row1['url'];
	$image= $row1['image']; ?>
                
        <a href="<?php echo $url; ?>"><img src="admin/ad/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="640" height="120" /></a>
        </td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=13&category_name=travel">&nbsp;&nbsp;&nbsp;Travel</a></td>
        <td rowspan="3" align="center" valign="middle" background="images_khaborebong/divider2.png">&nbsp;</td>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=14&category_name=career">&nbsp;&nbsp;&nbsp;Career</a></td>
        </tr>
      <tr>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '13'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=13&category_name=travel"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '14'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=14&category_name=career"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        </tr>
      <tr>
        <td height="180" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
           <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '13' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=13&category_name=travel">Read More</a></span></td>
          </tr>
        </table></td>
        <td height="180" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
          <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '14' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=14&category_name=career">Read More</a></span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="120" colspan="3" align="center" valign="middle" bgcolor="#E6E6E6">
        <?php $qa= "SELECT * FROM `static_ads` WHERE `id`= '6'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$url= $row1['url'];
	$image= $row1['image']; ?>
                
        <a href="<?php echo $url; ?>"><img src="admin/ad/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="640" height="120" /></a>
        </td>
        </tr>
      <tr>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        <td height="18">&nbsp;</td>
        </tr>
      <tr>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=15&category_name=bureau_report">&nbsp;&nbsp;&nbsp;Bureau Report</a></td>
        <td rowspan="3" align="center" valign="middle" background="images_khaborebong/divider2.png">&nbsp;</td>
        <td height="40" class="style20" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><a href="news_list.php?cat_id=16&category_name=blog">&nbsp;&nbsp;&nbsp;Blog</a></td>
        </tr>
      <tr>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '15'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=15&category_name=bureau_report"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        <td height="200" align="center" valign="middle">
        <?php

	$q= "SELECT MAX(id) AS id FROM `news` WHERE `category`= '16'";
	$r= mysql_query($q) or die (mysql_error());
	$row= mysql_fetch_array($r);

	$new_id= $row['id'];
	
	$qa= "SELECT * FROM `news` WHERE `id`= '$new_id'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$category= $row1['category'];
	$image= $row1['image'];

	
?><a href="news_list.php?cat_id=16&category_name=blog"><img src="admin/news_image/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>
        </td>
        </tr>
      <tr>
        <td height="180" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
          <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '15' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=15&category_name=bureau_report">Read More</a></span></td>
          </tr>
        </table></td>
        <td height="180" align="left" valign="top" bgcolor="#E6E6E6"><table width="290" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td height="18" align="center" valign="middle">&nbsp;</td>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
           <?php				
$select_user = "SELECT * FROM `news` WHERE `category`= '16' order by id DESC limit 5";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row_news= mysql_fetch_array($exe_selectuser))
{ 

	$category= $row_news['category']; 
	$caption= $row_news['caption'];
	$url= $row_news['url']; 
	$catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$category."'"));
	$category_name= $catname['category']; 

?>
          <tr>
            <td width="30" height="30" align="center" valign="middle"><img src="images_khaborebong/bullet.png" width="30" height="30" border="0" /></td>
            <td height="30" align="left" valign="middle" class="style27"><span class="style27"><a href="news_details.php?cat_id=<?php echo $category; ?>&category_name=<?php echo $category_name; ?>&caption=<?php echo $url; ?>" style="color:#999;">
			<?php echo mb_substr($caption,0,30,'UTF-8')."...."; ?>
            </a>
</span></td>
          </tr>
          <?php } ?>
          <tr>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle"><span class="style29"><a href="news_list.php?cat_id=16&category_name=blog">Read More</a></span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="25" colspan="5" align="center" valign="middle"><hr /></td>
        </tr>
      <tr>
        <td height="320" colspan="5" align="center" valign="top"><?php include('footer.php');?></td>
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
