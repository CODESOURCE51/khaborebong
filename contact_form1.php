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
	 Contact Form</span><span class="more"></span></td>
            </tr>
          <tr>
            <td height="25px">
             
            </td>
            </tr>
           
         <tr>
            <td height="25px">
            <form name="contact_form" action="send_contact_mail.php" method="post">
             <ul class="contact">
             	<li>
                	<p>Name</p>
                    <input type="text" name="name" required="required"/>
                </li>
                <li>
                	<p>Email</p>
                    <input type="text" name="email" required="required"/>
                </li>
                <li>
                	<p>Phone</p>
                    <input type="text" name="phone" required="required"/>
                </li>
                <li>
                	<p>Message</p>
                    <textarea name="msg" required="required"></textarea>
                </li>
                 <li>
                        <button type="submit">SEND</button><b style="float:right;"><?php if(isset($_REQUEST['p']) && $_REQUEST['p'] == 's') {echo 'Mail Sent Successfully';}?></b>
                    </li>
             </ul>
             </form>
            </td>
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
<img src="admin/background/5542tegnology .jpg" />
</div>
<script src="js/jquery.ez-bg-resize.js"></script>
<script>
$("#pbg").ezBgResize();


</script>
</body>
</html>
