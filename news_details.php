<?php 
include_once('admin/connection.php');
?>
<?php 
$cat_id=$_REQUEST['cat_id'];
$cat=$_REQUEST['category_name'];
$tag=$_REQUEST['caption'];
?>
 <?php				
$select_user = "SELECT * FROM `news` WHERE `url`= '$tag'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$row_news= mysql_fetch_array($exe_selectuser);

$previous = 'select * from news where id = (select max(id) from news where id < "'.$row_news["id"].'") order by category desc';
$pre_query = mysql_query($previous) or die(mysql_error());
$pre_data = mysql_fetch_assoc($pre_query);
$tot_pre = mysql_num_rows($pre_query);

if($tot_pre > 0) {
$pre_category = 'select * from category where id ='.$pre_data['category'];
$pre_category_query = mysql_query($pre_category) or die(mysql_error());
$pre_category_data = mysql_fetch_assoc($pre_category_query);
}

$next = 'select * from news where id = (select min(id) from news where id > "'.$row_news["id"].'") order by category asc';
$next_query = mysql_query($next) or die(mysql_error());
$next_data = mysql_fetch_assoc($next_query);
$tot_nxt = mysql_num_rows($next_query);

if($tot_nxt > 0) {
$next_category = 'select * from category where id ='.$next_data['category'];
$next_category_query = mysql_query($next_category) or die(mysql_error());
$next_category_data = mysql_fetch_assoc($next_category_query);
}
$review = 'select * from td_review where news_id ='.$row_news['id'].' and approve=1';
$review_query = mysql_query($review) or die(mysql_error());
$review_data = mysql_fetch_assoc($review_query);
$tot_review = mysql_num_rows($review_query);

$related_news = 'select * from news where category ='.$row_news['category'].' and id not in('.$row_news['id'].') limit 4';
$related_query = mysql_query($related_news) or die(mysql_error());
$related_data = mysql_fetch_assoc($related_query);
$tot_related = mysql_num_rows($related_query);

$viwers_news = 'select * from news where editor = 1 order by id desc limit 4';
$viwers_query = mysql_query($viwers_news) or die(mysql_error());
$viwers_data = mysql_fetch_assoc($viwers_query);
$tot_viwers = mysql_num_rows($viwers_query);
?>
<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "2994038546470396",
    enable_page_level_ads: true
  });
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="<?php echo $caption; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<meta property="og:url"           content="<?php echo $url;?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $row_news['caption'];?>" />
  <meta property="og:description"   content="<?php echo $row_news['description']; ?>" />
  <meta property="og:image"         content="http://www.khaborebong.com/admin/news_image/<?php echo $row_news['image']; ?>" />
<link rel="image_src" href="http://www.khaborebong.com/admin/news_image/<?php echo $row_news['image']; ?>" />

<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="styles.css">
<link href="css/flexslider.css" rel="stylesheet" media="screen">
<!--rating_start-->
<link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    
   <!--rating_end--> 

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script>
function review_post() {
  
 $('#process').css('display','block'); 
            $.ajax({type:'POST', url: 'http://khaborebong.com/probal/post_review1.php', data:$('#review_form').serialize(), success: function(response) {
            alert(1);
            var res = response.split("|"); 
           
            if( res[0]=='ok' ) {
                 $('#process').css('display','none');
                 //window.location.href = 'billing.php?b_id='+res[1]; 
                 //window.location.href="billing.php?b_id"+res[1];

            }
}
});
return false;
}
</script>
   <script src="script.js"></script>
   <script src="js/star-rating.js" type="text/javascript"></script><!--rating_script--> 
  <script src="js/jquery.rating.js" type="text/javascript"></script>
   <link rel="stylesheet" href="css/jquery.rating.css" media="all" rel="stylesheet" type="text/css"/>
   <!--social_start-->
   <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "548392b5-111a-442f-8c11-a036bfe02227", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<!--social_end-->
   

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
</style>

</head>

<body>
<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "2994038546470396",
    enable_page_level_ads: true
  });
</script>
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
    <td align="center" valign="middle" bgcolor="#FFFFFF"><?php /*?><?php include('slider.php');?><?php */?></td>
  </tr>
  <tr>
    <td height="20" align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#FFFFFF"><table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td rowspan="2" valign="top">
        
        <table width="640" border="0" cellspacing="0" cellpadding="0">
          
         <div id="mydiv"> 
          <tr>
            <td height="40"bgcolor="#FF0000" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><span class="style20">&nbsp;&nbsp;&nbsp;<?php $catname=mysql_fetch_array(mysql_query("select * from category where `id`='".$cat_id."'"));
	 echo $catname['cat_name']; ?></span><span class="more"><a href="news_list.php?cat_id=<?php echo $_REQUEST['cat_id'];?>&category_name=<?php echo $_REQUEST['category_name'];?>">More</a></span></td>
            </tr>
          <tr>
            <td height="25px">
             <?php				
$select_user1 = "SELECT * FROM `news` WHERE `url`= '$tag'";
$exe_selectuser1 = mysql_query($select_user1) or die (mysql_error());
$row_news1= mysql_fetch_array($exe_selectuser1);
  $news_id1 = $row_news1['id'];
	$news_image1= $row_news1['image'];
  $news_image2= $row_news1['image2'];
  $news_image3= $row_news1['image3']; 
	$caption1= $row_news1['caption']; 
	$description= $row_news1['description'];
  $description2= $row_news1['description2'];
  $description3= $row_news1['description3'];
  $description4= $row_news1['description4'];
  $description5= $row_news1['description5'];
  $description6= $row_news1['description6'];
  $description7= $row_news1['description7'];
  $description8= $row_news1['description8'];
  $description9= $row_news1['description9'];
  $description10= $row_news1['description10'];
  $description11= $row_news1['description11'];
  $description12= $row_news1['description12'];
  $vid1= $row_news1['video_url']; 
	$date1= $row_news1['date'];
	$reporter1= $row_news1['reporter'];
	$hass_code1= $row_news1['hass_code'];

?>
            </td>
            </tr>
           
          <tr>
            <td class="news_heading"><?php echo $caption1; ?></td>
            </tr>
            <tr>
            <td height="8px"></td>
            </tr>
            <?php if($row_news1['video_url'] != '') { ?>
          <tr>
            <td><iframe width="600" height="359" src="https://www.youtube.com/embed/<?php echo $row_news1['video_url'];?>" frameborder="0" allowfullscreen></iframe></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
            <?php } ?>
          <tr>
            <td><img src="admin/news_image/<?php echo $news_image1; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description; ?></p></td>
            </tr>
            <?php $exp = explode('.',$row_news1['image2']); if($exp[1] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image2']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description2; ?></p></td>
            </tr>
            <?php } ?>
            <?php if($row_news1['image3'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image3']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description3; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image4'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image4']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description4; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image5'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image5']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description5; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image6'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image6']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description6; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image7'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image7']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description7; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image8'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image8']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description8; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image9'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image9']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description9; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image10'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image10']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description10; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image11'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image11']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description11; ?></p></td>
            </tr>
          
          <?php } ?>
          <?php if($row_news1['image12'] != '') { ?>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><img src="admin/news_image/<?php echo $row_news1['image12']; ?>" alt="" width="600" height="400" /></td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><p class="text"><?php echo $description12; ?></p></td>
            </tr>
          
          <?php } ?>
          </div>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td>
            
     
   <div style="float:right">  
     <span class='st_googleplus_large' displayText='Google +'></span>
  <!-- <a class="fb-share-button" data-href="<?php echo $url; ?>" data-layout="icon" style="float:left; margin-right:6px;"><img src="k.png" /></a>  -->  
<!-- <a href="https://www.facebook.com/dialog/feed?app_id=181714115521047&amp;display=popup&amp;caption=<?php echo $tag;?>&amp;link=<?php echo $url;?>&amp;redirect_uri=<?php echo $url;?>" target="_blank" 
style="float:left; margin-right:6px;">
<img src="k.png" />
</a> -->
<!-- <span class='st_facebook_large' displayText='Facebook'></span> -->
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>  
<!-- <input type="button" value="Print Div" onclick="PrintElem('#mydiv')" /> -->     
  </div>          
<div style="float:left">             
<!-- <div id="fb-root"></div> -->
<script>
  // window.fbAsyncInit = function() {
  //   FB.init({
  //     appId      : '181714115521047',
  //     xfbml      : true,
  //     version    : 'v2.5'
  //   });
  // };

  // (function(d, s, id){
  //    var js, fjs = d.getElementsByTagName(s)[0];
  //    if (d.getElementById(id)) {return;}
  //    js = d.createElement(s); js.id = id;
  //    js.src = "//connect.facebook.net/en_US/sdk.js";
  //    fjs.parentNode.insertBefore(js, fjs);
  //  }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=181714115521047";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="<?php echo $url; ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
<!-- <div class="fb-like" data-href="<?php echo $url; ?>" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div><br/><br/>
<div class="fb-share-button" data-href="<?php echo $url; ?>&amp;title=<?php echo $caption1;?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div> -->

</div> 

              </td>
            </tr>
          <tr>
            <td height="15px"></td>
            </tr>
          <tr>
            <td><ul class="bottom_list">
               <li class="date"><?php echo $date1; ?></li>
              <li class="staff"><?php echo $reporter1; ?></li>
              </ul></td>
            </tr>
          <tr>
            <td> <ul class="seo">
            <li>TAGS :- </li>
            <?php 
	
$wordChunks = explode(",", $hass_code1);
for($i = 0; $i < count($wordChunks); $i++){
	echo "<li>".$wordChunks[$i]."</li>";
}
	?> 
              </ul></td>
            </tr>
            <tr>
            <td> 
            	<ul class="prevnext">
              <?php if($tot_pre > 0) {?>
                	<li class="prev"><a href="news_details.php?cat_id=<?php echo $pre_data['category']; ?>&category_name=<?php echo $pre_category_data['category']; ?>&caption=<?php echo $pre_data['url']; ?>" style="margin-bottom: 2px; margin-right: 2px; margin-left: 2px;"><img src="image/prev.png" />Previous</a></li>
                    <?php } ?>
                    <?php if($tot_nxt > 0) {?>
                    <li class="next"><a href="news_details.php?cat_id=<?php echo $next_data['category']; ?>&category_name=<?php echo $next_category_data['category']; ?>&caption=<?php echo $next_data['url']; ?>" style="margin-bottom: 2px; margin-right: 2px; margin-left: 2px;">Next<img src="image/next.png" /></a></li>
                <?php } ?>
                </ul>
            </td>
            </tr>
            <tr>
            <td height="15px"></td>
            </tr>
            <tr>
            <td>
            <div class="comment_form">
            <form name="review_form" id="review_form" action="post_review1.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="news_id" value="<?php echo $news_id1;?>">
            <input type="hidden" name="id" value="<?php echo $_REQUEST['cat_id'];?>">
            <input type="hidden" name="category" value="<?php echo $_REQUEST['category_name'];?>">
            <input type="hidden" name="caption" value="<?php echo $_REQUEST['caption'];?>">
            <h4>Post Comment</h4>
            	<ul>
                	<li>
                    	<p>Name :</p>
                        <input type="text" name="post_name" required/>
                    </li>
                    <li>
                    	<p>Email Id:</p>
                        <input type="text" name="post_email" required/>
                    </li>
                    <li>
                    	<p>Rating:</p>
                         <div>
        <input class="star" type="radio" name="rating" value="1" />
           <input class="star" type="radio" name="rating" value="2"/>
           <input class="star" type="radio" name="rating" value="3"/>
           <input class="star" type="radio" name="rating" value="4"/>
           <input class="star" type="radio" name="rating" value="5"/>
       </div>
                    </li>
                    <li>
                    	<p>Comment:</p>
                        <textarea name="post_comment" required></textarea>
                    </li>
                    <li>
                    	<input type="submit" class="submit_c"/><div id="process" style="display:none;">Please Wait....</div>
                    </li>
                    
                </ul>
                </form>
            </div>
            </td>
            </tr>
            <tr>
            <td height="15px"></td>
            </tr>
            <tr>
            <td>
            <div class="comments">
            <h4>Comments</h4>
            	<ul>
              <?php if($tot_review > 0) { ?>
                	<li>
                    	<div class="comment_image">
                        	<img src="image/profile.jpg" />
                        </div>
                        <div class="my_comment">
                        	<h5><?php echo $review_data['cust_name'];?></h5>
                            
                            <p><?php echo $review_data['message'];?></p>
                            <div>
                            <?php if($review_data['rate'] == 1) { ?>
                            <img src="image/1star.png">
                            <?php } elseif($review_data['rate'] == 2) {?>
                            <img src="image/2star.png">
                            <?php } elseif($review_data['rate'] == 3) {?>
                            <img src="image/3star.png">
                            <?php } elseif($review_data['rate'] == 4) {?>
                            <img src="image/4star.png">
                            <?php } elseif($review_data['rate'] == 5) {?>
                            <img src="image/5star.png">
        <?php } ?>
       </div>
                            <ul class="bottom_list">
               <li class="date"><?php echo $review_data['rdate'];?></li>
              </ul>
                        </div>
                    </li>
                    <?php } else echo 'Be the first to post a review';?>
                  
                </ul>
            </div>
            </td>
            </tr>
            <tr>
            <td height="15px"></td>
            </tr>
            <tr>
            <td width="360" height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Related News</td>
          </tr>
          	<tr>
            <td height="8px"></td>
            </tr>
            <tr>
            
            <td>
            <div class="rnews">
            	<ul>
              <?php if($tot_related > 0 ) {do {?>
                	<li>
                    	<div class="news_list_image">
                	<img src="admin/news_image/<?php echo $related_data['image']; ?>" />
                </div>
                <div class="description">
                	<span class="style27"><a href="news_details.php?cat_id=<?php echo $related_data['category']; ?>&category_name=<?php echo $_REQUEST['category_name']; ?>&caption=<?php echo $related_data['url']; ?>" style="color:#999; line-height:22px;"><?php echo $related_data['caption']; ?> </a></span>
                </div>
                        
                    </li>
                    <?php } while($related_data = mysql_fetch_assoc($related_query)); } else echo 'No Such News To Show.';?>
                   
                </ul>
            </div>
            </td>
            </tr>
            <tr>
            <td height="30px"></td>
            </tr>
            <tr>
            <td width="360" height="40" class="style22" style="background: rgb(0,0,0);
background: -moz-linear-gradient(top, rgba(0,0,0,1) 1%, rgba(71,71,71,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(0,0,0,1)), color-stop(100%,rgba(71,71,71,1)));
background: -webkit-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -o-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: -ms-linear-gradient(top, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
background: linear-gradient(to bottom, rgba(0,0,0,1) 1%,rgba(71,71,71,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#474747',GradientType=0 );">&nbsp;&nbsp;&nbsp;Editors Speak</td>
          </tr>
          	<tr>
            <td height="8px"></td>
            </tr>
            <tr>
            
            <td>
            <div class="rnews">
            	<ul>
              <?php do { ?>

                	<li>
                    	<div class="news_list_image">
                	<img src="admin/news_image/<?php echo $viwers_data['image']; ?>" />
                </div>
                <div class="description">
                	<span class="style27"><a href="news_details.php?cat_id=<?php echo $viwers_data['category']; ?>&category_name=<?php echo $_REQUEST['category_name']; ?>&caption=<?php echo $viwers_data['url']; ?>" style="color:#999; line-height:22px;"><?php echo $viwers_data['caption']; ?> </a></span>
                </div>
                        
                    </li>
                    <?php } while ($viwers_data = mysql_fetch_assoc($viwers_query));?>
                   
                </ul>
            </div>
            </td>
            </tr>
        </table></td>
        <td width="40" rowspan="2" align="center" valign="middle" background="images_khaborebong/divider.png">&nbsp;</td>
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
        <td width="360" align="center" valign="top"><?php include('right_bar.php');?></td>
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
<script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'mydiv', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
</body>
</html>
