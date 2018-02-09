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

<script src="js/modernizr-2.6.2.min.js"></script>

<style type="text/css">
.style4 {	font-family: Tahoma;
	font-size: 12px;
}
</style>

<!----------------------validation----------------------------->

 <script type="text/javascript" src="js/jquery.js"></script>  
  <script type="text/javascript" src="js/validate.js"></script>  
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#payslip").validate({
		rules: {
			category: {
				required: true
			},
			newsflash: {
				required: true
			}
			
		 
		}, //end rules
		messages: {
			
			category: {
				required: "<br /> Please Select Category."
			
			},
			newsflash: {
				required: "<br /> Please Choose News."
			
			}
			
		} //end messages
		
	}); //end validate
  });
</script>
<!----------------------validation----------------------------->

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
<?php $qa= "SELECT * FROM `video` order by id desc";
	$ra= mysql_query($qa) or die (mysql_error());
	$row1= mysql_fetch_array($ra);
	do {
	$vid = $row1['id'];
	?>
<?php 
	  
	  $q=mysql_query("SELECT * FROM video_votes where `vid`='$vid'");
	  $anscount=mysql_num_rows($q);
	
      $f=mysql_query("SELECT * FROM video_votes where `vid`='$vid' and `option_id`=1");
	  $fcount=mysql_num_rows($f);
	  
	  $s=mysql_query("SELECT * FROM video_votes where `vid`='$vid' and `option_id`=2");
	  $scount=mysql_num_rows($s);

	  $f1=mysql_query("SELECT * FROM video_votes where `vid`='$vid' and `option_id`=3");
	  $fcount1=mysql_num_rows($f1);
	  
	  $s1=mysql_query("SELECT * FROM video_votes where `vid`='$vid' and `option_id`=4");
	  $scount1=mysql_num_rows($s1);

?>
        
        <div>
       		  <table width="900" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
  <tr>
  <td width="208" style="padding:6px 0 6px 15px;"><span class="baneer_link"><?php echo $row1['video_path']; ?></td>
    <td width="208" style="padding:6px 0 6px 15px;"><span class="baneer_link">Good :</span> <img src="../poll.gif"
width='<?php echo(100*round($fcount/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($fcount/($anscount),2)); ?>%</td>
    <td width="547" align="center" class="baneer_link"><span class="baneer_link">Average :</span><img src="../poll.gif"
width='<?php echo(100*round($scount/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($scount/($anscount),2)); ?>%</td>
    <td width="208" style="padding:6px 0 6px 15px;"><span class="baneer_link">Better :</span> <img src="../poll.gif"
width='<?php echo(100*round($fcount1/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($fcount1/($anscount),2)); ?>%</td>
    <td width="547" align="center" class="baneer_link"><span class="baneer_link">Best :</span><img src="../poll.gif"
width='<?php echo(100*round($scount1/($anscount),2)); ?>'
height='10'>
<?php echo(100*round($scount1/($anscount),2)); ?>%</td>
     <td width="547" align="center" class="baneer_link"><span class="baneer_link">Total Votes :</span><?php echo $anscount; ?></td>
    
  </tr>
</table>
            </div>
            <?php } while($row1= mysql_fetch_array($ra));?>
                    
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