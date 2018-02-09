<link rel="stylesheet" type="text/css" media="screen" href="style2.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<?php 
$popular_news = 'select * from news where popular = 1 order by id desc limit 10';
$popular_query = mysql_query($popular_news) or die(mysql_error());
$popular_data = mysql_fetch_assoc($popular_query);
$tot_popular = mysql_num_rows($popular_query);
?>

<table width="360" border="0" align="center" cellpadding="0" cellspacing="0">
          
          <tr>
            <td width="360" height="386" align="left" valign="top" bgcolor="#E6E6E6"><table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
            <?php do {?>
            <div class="news_list popular ">
            	<div class="news_list_image">
                	<img src="admin/news_image/<?php echo $popular_data['image']; ?>" width="75" height="50" />
                </div>
                <div class="description">
                	<span class="style27"><a href="news_details.php?cat_id=<?php echo $popular_data['category']; ?>&category_name=<?php echo $_REQUEST['category_name']; ?>&caption=<?php echo $popular_data['url']; ?>" style="color:#999; line-height:22px;"><?php echo $popular_data['caption']; ?></a></span>
                </div>
            </div>
            <?php } while($popular_data = mysql_fetch_assoc($popular_query));?>
            
            
            </table></td>
          </tr>
          <tr>
            <td height="18" align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="360" height="190" align="center" valign="middle" bgcolor="#E6E6E6" class="style22" >

		<!--<img src="images_khaborebong/topad.jpg" width="300" height="200" border="0" align="absmiddle" />-->

<div class="containernew1">
	<div id="content-slider">
    	<div id="slidernew1">
        	<div id="mask">
            <ul>
         
            <?php				
$select_user = "SELECT * FROM `ad` where `catagory`='1'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$flag=1;

while ($row= mysql_fetch_array($exe_selectuser))
{ 
 $flagg=$flag++;
 
 if($flagg==1){ $cl="firstanimation"; }elseif($flagg==2){ $cl="secondanimation"; }elseif($flagg==3){ $cl="thirdanimation"; }elseif($flagg==4){ $cl="fourthanimation"; }else{ $cl="fifthanimation"; }
	$url= $row['url']; 
	$feature_product_image= $row['feature_product_image']; 

?>
            
           	<li id="first" class="<?php echo $cl;?>">
            <a href="<?php echo $url;?>">
            <img src="admin/feature_product_image/<?php echo $feature_product_image; ?>" alt="Cougar" width="360" height="190"/>
            </a>
            </li>
            <?php } ?>
          
            

            </ul>
            </div>
            <!--<div class="progress-bar"></div>-->
        </div>
    </div>
</div>
</td>
          </tr>
          
          <tr>
            <td width="360" height="18">&nbsp;</td>
          </tr>
          <tr>
            <td width="360" height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Album of the Day</td>
          </tr>
          <tr>
            <td width="360" height="260" align="center" valign="middle" bgcolor="#E6E6E6"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="300" height="200" align="center" valign="middle">
                 <?php

	$qal= "SELECT * FROM `album`ORDER BY id ASC";
	$ral= mysql_query($qal) or die (mysql_error());
	$rowal= mysql_fetch_array($ral);

?>
                
                
                <div class="frame">
                <div class="span12 album_slider">
            <section class="slider">
            <div id="main-slider_2" class="flexslider">
            <ul class="slides">
            <?php do {
              $album_id= $rowal['id'];
  $album_url= $rowal['url'];
  
    $qg= "SELECT * FROM `album_details` WHERE `album_id`= '$album_id' order by id asc limit 1";
  $rg= mysql_query($qg) or die (mysql_error());
  $rowwg= mysql_fetch_array($rg);

  $imagee= $rowwg['image']; ?>
            <li>
            <a href="gallery_details.php?cat_id=17&category_name=photo_gallery&al_id=<?php echo $album_id; ?>&caption=<?php echo $album_url; ?>">
            	<img src="admin/chobighar/<?php echo $imagee; ?>" style="width:300px; height:200px;"/>
            </a>
            </li>
            <?php } while($rowal= mysql_fetch_array($ral));?>
           
           
            </ul>
            </div>
            </section>
             </div>
                </div>
                
                </td>
              </tr>
              <tr>
                <td height="25" align="center" valign="bottom"><span class="style29"><a href="image_gallery.php?cat_id=17&category_name=photo_gallery">More Album</a></span></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="360" height="18">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Quote O Katha</td>
          </tr>
          <tr>
            <td height="510" align="center" valign="middle" bgcolor="#E6E6E6"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="300" height="450" align="center" valign="middle" bgcolor="#CCCCCC"><span class="style28">
                <?php $qa= "SELECT * FROM `category` WHERE `id`= '22'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);
	$rownm= mysql_num_rows($ra);
?>
<?php if($rownm > 0){?>
	<?php $url= $row1['cat_name'];
	$image= $row1['image']; ?>
                
        <?php echo $url;}?></span>
                </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="18">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Editors Speak</td>
          </tr>
          
          <tr>
            <td height="336" align="left" valign="top" bgcolor="#E6E6E6"><table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
            <?php 
$editors_news = 'select * from news where editor = 1 order by id desc limit 10';
$editors_query = mysql_query($editors_news) or die(mysql_error());
$editors_data = mysql_fetch_assoc($editors_query);
$tot_editors = mysql_num_rows($editors_query);
?>
              <?php do {?>
            <div class="news_list popular">
              <div class="news_list_image">
                  <img src="admin/news_image/<?php echo $editors_data['image']; ?>" width="75" height="50" />
                </div>
                <div class="description">
                  <span class="style27"><a href="news_details.php?cat_id=<?php echo $editors_data['category']; ?>&category_name=<?php echo $_REQUEST['category_name']; ?>&caption=<?php echo $editors_data['url']; ?>" style="color:#999; line-height:22px;"><?php echo $editors_data['caption']; ?></a></span>
                </div>
            </div>
            <?php } while($editors_data = mysql_fetch_assoc($editors_query));?>



            </table></td>
          </tr>
          <tr>
            <td width="360" height="18">&nbsp;</td>
          </tr>
          <tr>
            <td height="190" align="center" valign="middle" bgcolor="#E6E6E6" class="style22" ><div class="containernew1">
  <div id="content-slider">
      <div id="slidernew1">
          <div id="mask">
            <ul>
         
          <?php       
$select_user = "SELECT * FROM `ad` where `catagory`='2'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$flag=1;

while ($row= mysql_fetch_array($exe_selectuser))
{ 
 $flagg=$flag++;
 
 if($flagg==1){ $cl="firstanimation"; }elseif($flagg==2){ $cl="secondanimation"; }elseif($flagg==3){ $cl="thirdanimation"; }elseif($flagg==4){ $cl="fourthanimation"; }else{ $cl="fifthanimation"; }
  $url= $row['url']; 
  $feature_product_image= $row['feature_product_image']; 

?>
            
            <li id="first" class="<?php echo $cl;?>">
            <a href="<?php echo $url;?>">
            <img src="admin/feature_product_image/<?php echo $feature_product_image; ?>" alt="Cougar" width="360" height="190"/>
            </a>
            </li>
            <?php } ?>
         
            </ul>
            </div>
            <!--<div class="progress-bar"></div>-->
        </div>
    </div>
</div></td>
          </tr>
          <tr>
            <td width="360" height="18">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Post of the Day</td>
          </tr>
          <tr>
            <td height="510" align="center" valign="middle" bgcolor="#E6E6E6"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="300" height="450" align="center" valign="middle" bgcolor="#CCCCCC"><span class="style28">
                <?php $qa= "SELECT * FROM `category` WHERE `id`= '23'";
  $ra= mysql_query($qa) or die (mysql_error());
  $row1= mysql_fetch_array($ra);
  $rownm1= mysql_num_rows($ra);
?><?php if($rownm1 > 0){?>
 <?php $url= $row1['cat_name'];
  $image= $row1['image']; ?>
                
        <?php echo $url;}?></span>
                </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="18">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Live Scores</td>
          </tr>
          <tr>
            <td height="280" align="center" valign="middle" bgcolor="#E6E6E6">
      
      <script type="text/javascript"> 
 app="www.cricwaves.com"; mo="f1_zd"; nt="iph"; mats =""; tor =""; Width="302px"; Height="252px"; wi ="w"; 
 co ="iph"; ad="1"; 
</script>
<script type="text/javascript" src="http://www.cricwaves.com/cricket/widgets/script/scoreWidgets.js"></script>



</td>
          </tr>
          <tr>
            <td height="18">&nbsp;</td>
          </tr>
          
          <tr>
            <td width="360" height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Today's Weather</td>
          </tr>
          <tr>
            <td width="360" height="270" align="center" valign="middle" bgcolor="#E6E6E6">
			
			
			<script language="JavaScript" type="text/javascript"> 
 document.write('<script language="JavaScript" src="http://www.myweather2.com/Plugins/weather/general.ashx?type=js&n=1&t=6&x=f1_day&inc=True&w=300&h=200&headerbgcolor=FFFFFF&headertextcolor=000000&temp_unit=1&windspeed_unit=1&puref=99953934-6509-426b-a868-957cd22af9bb&cb=' + Math.random() + '" type="text/javascript"><\/scr' + 'ipt>');
 </script><noscript><a href="http://www.myweather2.com/City-Town/India/Kolkata.aspx" title="Kolkata">Kolkata weather forecast from Weather2</a></noscript> </td>
          </tr>
          
          
          
          <tr>
            <td height="18" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="190" align="center" valign="middle" bgcolor="#E6E6E6"><div class="containernew1">
	<div id="content-slider">
    	<div id="slidernew1">
        	<div id="mask">
            <ul>

 <?php				
$select_user = "SELECT * FROM `ad` where `catagory`='3'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$flag=1;

while ($row= mysql_fetch_array($exe_selectuser))
{ 
 $flagg=$flag++;
 
 if($flagg==1){ $cl="firstanimation"; }elseif($flagg==2){ $cl="secondanimation"; }elseif($flagg==3){ $cl="thirdanimation"; }elseif($flagg==4){ $cl="fourthanimation"; }else{ $cl="fifthanimation"; }
	$url= $row['url']; 
	$feature_product_image= $row['feature_product_image']; 

?>
            
           	<li id="first" class="<?php echo $cl;?>">
            <a href="<?php echo $url;?>">
            <img src="admin/feature_product_image/<?php echo $feature_product_image; ?>" alt="Cougar" width="360" height="190"/>
            </a>
            </li>
            <?php } ?>

            </ul>
            </div>
            <!--<div class="progress-bar"></div>-->
        </div>
    </div>
</div></td>
          </tr>
          <tr>
            <td height="18">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Featured Image</td>
          </tr>
          <tr>
            <td height="260" align="center" valign="middle" bgcolor="#E6E6E6"><table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="300" height="200" align="center" valign="middle" bgcolor="#CCCCCC">
                <?php $qa= "SELECT * FROM `static_ads` WHERE `id`= '8'";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);

	$url= $row1['url'];
	$image= $row1['image']; ?>
                
        <a href="<?php echo $url; ?>"><img src="admin/ad/<?php echo $image; ?>"  border="none" alt="" title="" rel="." width="300" height="200" /></a>                
                </td>
              </tr>
            </table></td>
          </tr>
          
          <tr>
            <td height="18">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Recent News</td>
          </tr>
          
          <tr>
            <td height="336" align="left" valign="top" bgcolor="#E6E6E6"><table width="350" border="0" align="left" cellpadding="0" cellspacing="0">
            <?php 
$recent_news = 'select * from news where recent_news = 1 order by id desc limit 10';
$recent_query = mysql_query($recent_news) or die(mysql_error());
$recent_data = mysql_fetch_assoc($recent_query);
$tot_recent = mysql_num_rows($recent_query);
?>
              <?php do {?>
            <div class="news_list popular">
              <div class="news_list_image">
                  <img src="admin/news_image/<?php echo $recent_data['image']; ?>" />
                </div>
                <div class="description">
                  <span class="style27"><a href="news_details.php?cat_id=<?php echo $recent_data['category']; ?>&category_name=<?php echo $_REQUEST['category_name']; ?>&caption=<?php echo $recent_data['url']; ?>" style="color:#999; line-height:22px;"><?php echo $recent_data['caption']; ?></a></span>
                </div>
            </div>
            <?php } while($recent_data = mysql_fetch_assoc($recent_query));?>



            </table></td>
          </tr>
        </table>