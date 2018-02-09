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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="title" content="<?php echo $caption; ?>" />
<meta name="description" content="<?php echo $description; ?>" />
<link rel="image_src" href="http://www.khaborebong.com/admin/news_image/<?php echo $news_image; ?>" />

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
        <td rowspan="2" valign="top"><table width="640" border="0" cellspacing="0" cellpadding="0">
          
          
          <tr>
            <td height="40"bgcolor="#FF0000" style="background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );"><span class="style20">&nbsp;&nbsp;&nbsp;
	 Privacy Policy</span><span class="more"></span></td>
            </tr>
          <tr>
            <td height="25px">
             
            </td>
            </tr>
           
         <tr>
            <td height="25px">
            	<p style="line-height:24px;">The Privacy Policy (hereinafter &quot;the policy&quot;) provided below is with respect to our use and protection of any personal information you provide to us through the khaborebong.com website.NEWZIC is the sole owner of the website www.khaborebong.com (hereinafter &quot;website&quot;). The Policy is applicable to the website.You may be required to provide personally identifiable information at several different points on our website. By accepting the policy at the time of registration, you expressly approve and consent to our collection, storage, use and disclosure of your personal information as described in this Policy.</p>
                    <span class="style16" style="color:#000;">Use</span>
                  <p style="line-height:24px;">If you choose to provide us with the abovementioned information, you consent to the use, transfer and storage of the information so provided by you on our servers. The information provided by you shall not be sold/given/rented to third parties (third parties for this purpose do not include our group / holding / subsidiary companies and or our service partners / associates) for marketing purposes and other related activities without your prior consent.</p>
                  
                  <p style="line-height:24px;">The information provided by you shall be used by us to:<br />
                  
                  Improve our website and enable us to provide you the most user-friendly experience which is safe, smooth and customized;<br />

                  
                  Improve and customize our services, content and other commercial /non - commercial features on the website;<br />

                  
                  Send you information on our products, services, special deals, promotions;</p>

                  
                  <p style="line-height:24px;">Send you marketing/promotional communications (If you do not wish to receive such marketing/promotional communications from us you may indicate your preferences at the time of registration or by following the instructions provided on the website or by providing instructions to this effect);<br /><br />
                  Send newsletter(s) to you (Provided you subscribe to the same);</p>
                  
                  <span class="style16" style="color:#000;">Cookies</span><br />
                  <p style="line-height:24px;">We use cookies on the website but do not link the information we store in cookies to any personally identifiable information you submit while on our website. We do not set cookies to store your passwords. If you reject cookies, you will still use our website.
We have no access to or control over third party cookies and we don't store any cookies and just use the facility of .net framework for page output cache. This privacy statement does not cover the use of cookies by any advertisers.</p>

                  <span class="style16" style="color:#000;">Business Transaction</span>
                  <p style="line-height:24px;">In the event NEWZIC goes through a business transition, such as a merger, acquisition by another company, or sale of all or a portion of its assets, your personally identifiable information will likely be among the assets transferred. Where your information is transferred you will be notified via email/prominent notice on our website for 30 days of any such change in ownership or control of your personal information.</p>
                  <span class="style16" style="color:#000;">Links to Other Sites</span>
                  <p style="line-height:24px;">The website contains links to other sites that are not owned or controlled by NEWZIC. Please be aware that we, NEWZIC and/or the website, are not responsible for the privacy practices of such other sites.
We encourage you to be aware when you leave our site and to read the privacy statements of each and every Web site that collects personally identifiable information.
This privacy statement applies only to information collected by the website or to our other related websites provided it appears at the footer of the page therein. It does not apply to third party advertisements which appear on our websites and we suggest you read the privacy statements of such advertisers.</p></td>
            </tr>
            
          <tr>
            <td height="15px"></td>
            </tr>
         
          <tr>
            <td height="15px"></td>
            </tr>
         
            
            <tr>
            <td height="15px"></td>
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
<img src="admin/background/6046india.jpg" />
</div>
<script src="js/jquery.ez-bg-resize.js"></script>
<script>
$("#pbg").ezBgResize();


</script>
</body>
</html>
