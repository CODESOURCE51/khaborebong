
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- include Cycle plugin -->
<link rel="stylesheet" type="text/css" media="screen" href="style1.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<table width="1040" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="370" height="120" align="left" valign="middle"><a href="http://khaborebong.com/"><img src="images_khaborebong/logo_khaborebong.jpg" width="340" height="120" border="0" align="absmiddle" /></a></td>
        <td width="670" height="120" align="center" valign="middle">

		<!--<img src="images_khaborebong/topad.jpg" width="670" height="120" border="0" align="absmiddle" />-->
<div class="containernew">
	<div id="content-slider1">
    	<div id="slidernew">
        	<div id="mask1">
            <ul>

 <?php				
$select_user = "SELECT * FROM `logo_upload` where `category`='$cat'";
$exe_selectuser = mysql_query($select_user) or die (mysql_error());
$flag=1;

while ($row= mysql_fetch_array($exe_selectuser))
{ 
 $flagg=$flag++;
 
 if($flagg==1){ $cl="firstanimation"; }elseif($flagg==2){ $cl="secondanimation"; }elseif($flagg==3){ $cl="thirdanimation"; }elseif($flagg==4){ $cl="fourthanimation"; }else{ $cl="fifthanimation"; }
	$url= $row['url']; 
	$logo= $row['logo']; 

?>
            
           	<li id="first" class="<?php echo $cl;?>">
            <a href="<?php echo $url;?>">
            <img src="admin/logo/<?php echo $logo; ?>" alt="Cougar" width="670" height="120"/>
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
    </table>