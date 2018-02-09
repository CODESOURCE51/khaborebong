<?php 
$con=mysql_connect("localhost","khaboreb_ong","khabor123") or die(mysql_error());
mysql_select_db("khaboreb_ong",$con) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>

html { 
  background:url(<?php echo "208267.jpg"; ?>) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.rw
{
  width: 100%;
  float: left;
  margin-bottom: 15px;
}
.in
{
  float: left;

}
.pt
{
  float: left;
  margin: 0px;
  
}


</style>
</head>

<body>
<table>
<tr>
    <td width="300" height="40" bgcolor="#FF0000" style="color:#fff; font-weight:bold; background: rgb(150,5,0);
background: -moz-linear-gradient(top, rgba(150,5,0,1) 1%, rgba(255,33,33,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,rgba(150,5,0,1)), color-stop(100%,rgba(255,33,33,1)));
background: -webkit-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -o-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: -ms-linear-gradient(top, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
background: linear-gradient(to bottom, rgba(150,5,0,1) 1%,rgba(255,33,33,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#960500', endColorstr='#ff2121',GradientType=0 );">&nbsp;&nbsp;&nbsp;Poll </td>
          </tr>
          <tr>
            <td width="360" height="250" align="center" valign="middle" bgcolor="#E6E6E6">
<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","vote_video.php?vote="+int,true);
  xmlhttp.send();
}
</script>
 <?php 
$q=mysql_query("SELECT * FROM video_votes where `vid`='".$_REQUEST['cat_id']."' and `ip`='".$_SERVER['REMOTE_ADDR']."'");
    $rowcount=mysql_num_rows($q);
   if($rowcount==0) {
?>           

<div id="poll">
<form>
<span class="rw">
<input type="radio" name="vote" value="1*<?php echo $_REQUEST['cat_id'];?>" onclick="getVote(this.value)" class="in"><p class="pt">Good</p>
</span>
<span class="rw">
<input type="radio" name="vote" value="2*<?php echo $_REQUEST['cat_id'];?>" onclick="getVote(this.value)"class="in"><p class="pt">Avarage</p>
</span>
<span class="rw">
<input type="radio" name="vote" value="3*<?php echo $_REQUEST['cat_id'];?>" onclick="getVote(this.value)"class="in"><p class="pt">Better</p>
</span>
<span class="rw">
<input type="radio" name="vote" value="4*<?php echo $_REQUEST['cat_id'];?>" onclick="getVote(this.value)"class="in"><p class="pt">Best</p>
</span>
</form>
</div>
<?php } else { include("vote_video.php"); } ?>
            </td>
          </tr>
          <tr>
            <td width="360" height="18">&nbsp;</td>
          </tr>
          </table>

</body>
</html>
