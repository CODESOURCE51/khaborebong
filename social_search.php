<?php 
include("admin/connection.php"); 
?>
<table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="220" height="36" style="font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#FFFFFF;"><script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

     if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nyear<1000) nyear+=1900;
if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<div id="clockbox"></div></td>
        
         
        
        <script>
function validateForm() {
    var x = document.forms["myForm"]["searchTxt"].value;
    if (x == null || x == "") {
        alert("Please Fillout before search.");
        return false;
    }
}
</script>
        
        
        
        
        <td width="120" height="36" align="center" valign="middle"><span class="style6">Advertise With Us</span></td>
        <td width="120" height="36" align="center" valign="middle">
        <?php $catname=mysql_fetch_array(mysql_query("select * from category where `id`=20"));
	 $cname=$catname['cat_name']; if( $cname!="") { ?>
       <a href="news_list.php?cat_id=20&category_name=special_page"><span class="style6"><?php echo $cname; ?></span><span class="style9"> <sup>NEW</sup></span></a>
        <?php } else { } ?>
        </td>
        <td width="150" height="36" align="center" valign="middle">
        <?php $catname2=mysql_fetch_array(mysql_query("select * from category where `id`=21"));
     $cname2=$catname2['cat_name']; if( $cname2!="") { ?>
        <a href="contact_form.php" style="padding:5px; background:#F00;" ><span class="style4"><span class="style8 ab"><?php echo $cname2;?></span></span></a>
        <?php } else { } ?>
        </td>
        <form name="myForm" action="search.php" onsubmit="return validateForm()" method="post">
        <td width="200" height="36" align="left" valign="middle"><span class="style6">Search</span>
          <input name="searchTxt" type="text" style="width:145px; outline:none; padding-left:3px; border:#666666 1px solid; line-height:16px;" /></td>
        <td width="40" align="left" valign="middle">
        <input name="search" type="image" src="images_khaborebong/gobtn.png" value="SEARCH" class="butn" style="width:30px; height:36px;" /> 
        </td>
        </form>
        <td width="130" height="36" align="right" valign="middle">
        <a href="https://www.facebook.com/khaborebongwebportal" target="_blank"><img src="images_khaborebong/facebook_khaborebong.png" width="30" height="36" border="0" align="absmiddle" /></a>
        <a href="https://twitter.com/khaborebong_web" target="_blank"><img src="images_khaborebong/twitter_khaborebong.png" width="30" height="36" border="0" align="absmiddle" /></a>
        <a href="https://www.youtube.com/channel/UCz6vOIPF5XsjZC4qMTRL16w" target="_blank"><img src="images_khaborebong/youtube_khaborebong.png" width="30" height="36" border="0" align="absmiddle" /></a>
        <a href="https://instagram.com/khaborebong/" target="_blank"><img src="images_khaborebong/instagram_khaborebong.png" width="30" height="36" border="0" align="absmiddle" /></a></td>
      </tr>
    </table>