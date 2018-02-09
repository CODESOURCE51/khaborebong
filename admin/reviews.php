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

<?php
$select_user = "SELECT * FROM `td_review` order by rev_id DESC";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());

while ($row= mysql_fetch_array($exe_selectuser))
{  
     
$news = 'SELECT * FROM news WHERE id='.$row['news_id'];
$n_query = mysql_query($news) or die(mysql_error());
$news_data = mysql_fetch_assoc($n_query);
?>
        
        <div>
       		  <table width="900" border="0" cellpadding="0" cellspacing="0" style="border-top:solid #CCC 1px; border-bottom-style:inset; box-shadow: 0 -2px 2px -2px #999; background:#F5F5F5;">
  <tr>
    <td width="208" style="padding:6px 0 6px 15px;"><span class="baneer_link">News Caption :</span> <?php echo $news_data['caption']; ?></td>
    <td width="547" align="center" class="baneer_link"><span class="baneer_link">Review :</span><?php echo $row['message']; ?></td>
    <td width="208" style="padding:6px 0 6px 15px;"><span class="baneer_link">Review Date :</span> <?php echo $row['rdate']; ?></td>
    <td width="547" align="center" class="baneer_link"><span class="baneer_link">Reviewer Name :</span><?php echo $row['cust_name']; ?></td>
    <td width="123" align="center"><a href="review_delete.php?id=<?php echo $row['rev_id'];?>"><img src="images/delete.png" height="24" width="75" border="0" /></a> <?php if($row['approve'] == 0) { ?><a href="review_approve.php?id=<?php echo $row['rev_id'];?>">Approve</a><?php } else echo 'Approved';?></td>
  </tr>
</table>
            </div>
                    <?php } ?> 
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