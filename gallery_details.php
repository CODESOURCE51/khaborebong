<?php 
$con=mysql_connect("localhost","khaboreb_ong","khabor123") or die(mysql_error());
mysql_select_db("khaboreb_ong",$con) or die(mysql_error());
?><?php 
$cat_id=$_REQUEST['cat_id'];
$cat=$_REQUEST['category_name'];
$tag=$_REQUEST['caption'];
$al_id=$_REQUEST['al_id'];
?>
 <?php
$sele = "SELECT * FROM `album_details` where `album_id`= '$al_id' order by id asc limit 1";
$exe_sel = mysql_query($sele) or die (mysql_error());

$row1= mysql_fetch_array($exe_sel);

	 $tit=$row1['caption'];
	 $image_new= $row1['image']; 
	 
	 $qq= "SELECT * FROM `album` WHERE `id`= '$al_id'";
	$rq= mysql_query($qq) or die (mysql_error());
	$rowwq= mysql_fetch_array($rq);

	$des=$rowwq['album_name']; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="<?php echo $des; ?>" />
<meta name="description" content="<?php echo $tit; ?>" />
<link rel="image_src" href="http://www.khaborebong.com/admin/chobighar/<?php echo $image_new; ?>" />

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
        <tr>
            <td height="40" bgcolor="#FF0000" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><span class="style20">&nbsp;&nbsp;&nbsp;Image Gallery</span></td>
          </tr>
          <tr>
          <td height="40" >
          <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1424332167873592";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<div class="fb-like" data-href="<?php echo $url; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
          </td>
        </tr>
        <tr>
          <td height="20" >
            <table width="640" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="4">
                <style type="text/css">





/* Fades in the slideshow. Hides the initial animation on the li tag. Ooops!! */

@-webkit-keyframes fadeIn {
	0% {
		opacity: 0;
		
	}
	
	50% { 
		opacity: 0;
	}
	
	100% { 
		opacity: 1;
	}
}

#box {
	text-align: left;
	width: 640px;
	
	
	overflow: hidden;
		
	-webkit-animation-name: fadeIn; 
  	-webkit-animation-duration: 3s; 
  	-webkit-animation-iteration-count: 1;
  	-webkit-animation-delay: 0s;
}

ul#slider{
	
	margin: 0px;
	padding: 0px;
	list-style: none;
	position: relative;
	width: 640px;
	height: 360px;
	overflow: hidden;	
}

ul#thumb {
	overflow: none;
	margin: 0px 0px 0px 0px;
	padding: 0px;
	list-style: none;
	position: relative;
	background: #000;
	overflow: auto;
	width: 640px;
}

ul#thumb a {
	-webkit-transition: opacity .2s ease-in-out;
	border: 1px solid #979797;
	width: 30px;
	height: 30px;
	display: block;
	overflow: hidden;
	float: right;
	margin: 2px 0px 2px 10px;
	opacity: 0.75;
}

ul#thumb a:hover {
	opacity: 1;
} 

ul#slider li {	
	width: 640px;
	height: 360px;
	position: absolute;
	}
	
ul#slider li p {
	position: absolute;
	bottom: 0;
	left: 0;
	z-index: inherit;
	color: #fff;
	background: rgba(0, 0, 0, .5);
	width: 100%;
}

ul#slider li p span {
	line-height: 1.2em;
	padding: 10px;
	display: block;
	font-size:24px;
}

/* Animation for the :target image. Slides the image in. */

@-webkit-keyframes moveTarget {
	0% {
		left:-700px;
		
	}
	
	100% { 
		left:0px;
	}
}


ul#slider li:target {
	-webkit-animation-name: moveTarget; 
	-webkit-animation-duration: .5s; 
	-webkit-animation-iteration-count: 1;
	top:0px;
	left: 0px;
	z-index: 10;
}

/*
Animation for the current image. Slides it out the frame and back to the starting position. 
Adds a lower z-index than the now current image.
*/

@-webkit-keyframes moveIt {
	0% {
		left:0px;
		
	}
	50% {
		left:700px;
		
	}
	100% { 
		left:-700px;
		z-index: 5;
	}
}

ul#slider li:not(:target) {
	-webkit-animation-name: moveIt; 
  	-webkit-animation-duration: 1.5s; 
  	-webkit-animation-iteration-count: 1;
	top:0px;
	left: 0px;
}

</style>
<div id="box">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>



 <div class="container connrtund">
 <div  class="row">
	       
         <div class="col-sm-12 col-md-12">         
             <div class="row">
                     
             
  
      
  
  <div class="content">
   


<link rel="stylesheet" type="text/css" href="stylep.css" />
	<link rel="stylesheet" type="text/css" href="elastislide.css" />

        		
				
		<div id="img-wrapper-tmpl" style="display: none;">
			<div class="rg-image-wrapper" >
								<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				<h1 style="color:#FFF;"><?php 
    $q= "SELECT * FROM `album` WHERE `id`= '$al_id'";
	$r= mysql_query($q) or die (mysql_error());
	$roww= mysql_fetch_array($r);

	echo $roww['album_name']; ?></h1>
				
			<div class="socialiconbxtp visible-lg">
            <div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="background: none !important; width:70px;border-radius: 0px;position: absolute;top: 10px !important;">
                <a class="addthis_button_facebook_share"  fb:share:layout="vertical"></a>
                <a class="addthis_button_facebook_like"  fb:like:layout="box_count"></a>
                <a class="addthis_button_tweet" tw:count="vertical"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
                <a class="addthis_button_linkedin_counter" li:counter="top"></a>
                <a class="addthis_counter"></a>
            </div>
        </div>
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</div>

<div class="field field-name-field-gallery-data field-type-field-collection field-label-above">  
   				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-carousel">
								<ul>
                                    <?php
$select_user = "SELECT * FROM `album_details` where `album_id`= '$al_id' order by id ASC";
$i=36825;
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
    $img_id=$row['id'];
	$caption=$row['caption'];
	$image= $row['image']; 
	$i++;

?>
																		  <li id="j<?php echo $i; ?>">
					<a href="#">
						<img 
							src="admin/chobighar/<?php echo $image; ?>" width="100" 
							data-large="admin/chobighar/<?php echo $image; ?>" 
							alt="" 
							
							data-description="<?php echo $caption; ?>" 
							data-url="<?php echo $i; ?>"/>
					</a>
			  </li>	
              <?php } ?>																	  																																		  				</ul>
							</div>
							
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
						
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->	
</div>
		<script type="text/javascript" src="http://ste.india.com/sites/all/themes/zeemedia_th/static/js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="http://ste.india.com/sites/all/themes/zeemedia_th/static/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="http://ste.india.com/sites/all/themes/zeemedia_th/static/js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="http://sth.india.com/hindi/sites/all/themes/zeemedia/dgallery.js"></script>
<script>
    var imgid = 0;
    function getimg() {
        imgid = 126663       
        return imgid;
    }
</script> 
<style>
     .rg-gallery{background-color:Black;margin-top: 15px; width:640px; }
  .rg-view{display:none;}
  .rg-thumbs{margin-top:10px;}
  .rg-caption p{color:White;}
  .rg-image img{width:auto !important;}
.pagination ul>li>span.active{background-color: #9c0403;color: white;}
.addthis_toolbox{top:250px !important;}
.page-photos #carousel-photos .carousel-inner .item h3 {
  position: absolute;
  padding: 10px 30px;
  z-index: 1000;
  bottom: 130px;
  width: 100%;
  background: #444;
  background: rgba(0, 0, 0, 0.6) !important;
  color: white;
  margin: 0;
}
.list_carousel {
    margin: 0px;
    width: 100%;
    height: 104px !important;
    position: relative;
}
</style>


  </div>

  
  


             </div>
         
     </div><!--end of lft area -->
</div>
 
 



</div>

</div>
                
                
                
                </td>
                </tr>
              <tr>
                <td colspan="4"></td>
                </tr>
              
            </table>
            </td>
        </tr>
        
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
